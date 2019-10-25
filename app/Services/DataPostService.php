<?php


namespace App\Services;


use App\Data;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class DataPostService {

    public $email, $firstName, $lastName, $clickID, $affID, $userIP;

    /**
     * DataPostService constructor.
     *
     * @param Request $request
     */

    public function __construct(Request $request) {

        $this->email = $request['email'];
        $this->firstName = $request['first_name'];
        $this->lastName = $request['last_name'];
        $this->clickID = Redis::get('clickid');
        $this->affID = Redis::get('affid');
        $this->userIP = Redis::get('ip');
    }

    /**
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function postOPTUser() {

        $siteURL = "https://onlineplaytime.com";
        $endpointUrl = "/api/signup?email=" . $this->email . "&period=0&clickid=" . $this->clickID . "&custid=&invoiceid=&cardhash=&LeadIPAddress=" . $this->userIP . "&h=1&affid=". $this->affID . "&firstname=" . $this->firstName . "&lastname=" . $this->lastName;

        $client = new Client();
        $response = $client->request('GET', $siteURL . $endpointUrl, [
            'form_params' => [
                'email'          => $this->email,
                'period'         => 0,
                'clickid'        => $this->clickID,
                'LeadIPAddress'  => $this->userIP,
                'h'              => 1,
                'affid'          => $this->affID,
                'firstname'      => $this->firstName,
                'lastname'       => $this->lastName
            ]
        ]);

        $response =  $response->getBody()->getContents();

        Data::create([
            'type' => 'opt signup',
            'response' => $response
        ]);

        return explode( "|", $response );
    }

    /**
     * @param $phoneRequest
     *
     * @return void
     *
     */
    public function postSMS($phoneRequest) {
        $phone =  preg_replace('/\s+/', '', $phoneRequest);
        $search = array('+1', '(', ')', '-');
        $replace = array('', '', '', '');
        $phone = str_replace($search, $replace, $phone);

        $endpointUrl = "https://sms.mlresponder.com/api/v1/direct/list/5da0bf073bc782fa765e7690/contacts?phone_number=" . $phone ."&token=YfyMHlqb1ZmNj7isUM0ZO0saIz4K5T6jX13602xuOEFtmSPhsxxgeqri9GXh";

        $client = new Client();

        try {
            $response = $client->post($endpointUrl, [
                'form_params' => [
                    'phone' => $phone,
                ]
            ]);

            Data::create([
                'type' => 'sms',
                'response' => $response->getBody()->getContents()
            ]);

        } catch (RequestException $e) {

            if ($e->getResponse()->getStatusCode() == '400') {
               $message = json_decode($e->getResponse()->getBody()->getContents(), true);

               if(strpos($message['error'], 'Duplicate phone number') !== false ) {

                   Data::create([
                       'type' => 'sms',
                       'response' => $message['success'] . " " . $message['error']
                   ]);

               } else {

                   return redirect()->back()->withInput()->withErrors(['phone' => $message['error']]);
               }
            }
        }

    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */

    public function postRelevance() {

        $leadURL = Redis::get('actualLink');
        $leadDate =  date("m-d-Y-h:i:sa");
        $userIP = Redis::get('ip');

        $endpointUrl = "http://api.rrddm.com/DDM/Import.cfc?method=submitRecord&ClientID=175&DataSourceID=17164&Token=C7F0T0K7Y9&TokenPassword=Z5F6D5&EmailAddress=" . $this->email . "&LeadDate=" . $leadDate . "&LeadURL=" . $leadURL . "&LeadIPAddress=" . $userIP . "&FirstName=" . $this->firstName . "&LastName=" . $this->lastName;

        $client = new Client();
        $response = $client->request('POST', $endpointUrl, [
            'form_params' => [
                'email'         => $this->email,
                'FirstName'     => $this->firstName,
                'LastName'      => $this->lastName,
                'LeadIPAddress' => $userIP,
                'LeadDate'      => $leadDate,
                'LeadURL'       => $leadURL
            ]
        ]);

        Data::create([
            'type' => 'relevance',
            'response' => $response->getBody()->getContents()
        ]);
    }
}
