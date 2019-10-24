<?php


namespace App\Services;


use App\Data;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redis;

class DataPostService {

    public function postOPTUser($request) {

        $email = $request['email'];
        $firstName = $request['first_name'];
        $lastName = $request['last_name'];
        $clickID = Redis::get('clickid');
        $affID = Redis::get('affid');
        $userIP = Redis::get('ip');

        $siteURL = "https://onlineplaytime.com";
        $endpointUrl = "/api/signup?email=" . $email . "&period=0&clickid=" . $clickID . "&custid=&invoiceid=&cardhash=&LeadIPAddress=" . $userIP . "&h=1&affid=". $affID . "&firstname=" . $firstName . "&lastname=" . $lastName;

        $client = new Client();
        $response = $client->request('GET', $siteURL . $endpointUrl, [
            'form_params' => [
                'email'          => $email,
                'period'         => 0,
                'clickid'        => $clickID,
                'LeadIPAddress'  => $userIP,
                'h'              => 1,
                'affid'          => $affID,
                'firstname'      => $firstName,
                'lastname'       => $lastName
            ]
        ]);

        $response =  $response->getBody()->getContents();

        Data::create([
            'type' => 'opt signup',
            'response' => $response
        ]);

        return explode( "|", $response );
    }

    public function postSMS($phoneRequest) {
        $phone =  preg_replace('/\s+/', '', $phoneRequest);
        $search = array('+1', '(', ')', '-');
        $replace = array('', '', '', '');
        $phone = str_replace($search, $replace, $phone);

        $endpointUrl = "https://sms.mlresponder.com/api/v1/direct/list/5da0bf073bc782fa765e7690/contacts?phone_number=" . $phone ."&token=YfyMHlqb1ZmNj7isUM0ZO0saIz4K5T6jX13602xuOEFtmSPhsxxgeqri9GXh";

        $client = new Client();
        $response = $client->request('POST', $endpointUrl, [
            'form_params' => [
                'phone'          => $phone,
            ]
        ]);

        $response =  $response->getBody()->getContents();

        Data::create([
            'type' => 'sms',
            'response' => $response
        ]);

    }

    public function postRelevance($request) {

        $leadURL = Redis::get('actualLink');
        $leadDate =  date("m-d-Y-h:i:sa");
        $userIP = Redis::get('ip');
        $email = $request['email'];
        $firstName = $request['first_name'];
        $lastName = $request['last_name'];

        $endpointUrl = "http://api.rrddm.com/DDM/Import.cfc?method=submitRecord&ClientID=175&DataSourceID=17164&Token=C7F0T0K7Y9&TokenPassword=Z5F6D5&EmailAddress=" . $email . "&LeadDate=" . $leadDate . "&LeadURL=" . $leadURL . "&LeadIPAddress=" . $userIP . "&FirstName=" . $firstName . "&LastName=" . $lastName;

        $client = new Client();
        $response = $client->request('POST', $endpointUrl, [
            'form_params' => [
                'email'         => $email,
                'FirstName'     => $firstName,
                'LastName'      => $lastName,
                'LeadIPAddress' => $userIP,
                'LeadDate'      => $leadDate,
                'LeadURL'       => $leadURL
            ]
        ]);

        $response =  $response->getBody()->getContents();

        Data::create([
            'type' => 'relevance',
            'response' => $response
        ]);
    }
}
