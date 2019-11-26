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
        $this->phone = $request['phone'];
        $this->clickID = Redis::get('clickid');
        $this->affID = Redis::get('affid');
        $this->userIP = Redis::get('ip');
    }

    /**
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function postOPTSignup() {

        $siteURL = "https://onlineplaytime.com";
        $endpointUrl = "/api/signup?email=" . $this->email . "&period=0&clickid=" . $this->clickID . "&custid=&invoiceid=&cardhash=&LeadIPAddress=" . $this->userIP . "&h=1&affid=". $this->affID . "&firstname=" . $this->firstName . "&lastname=" . $this->lastName . "&phone=" . $this->phone;

        $client = new Client();

        try {
            $response = $client->request( 'GET', $siteURL . $endpointUrl, [
                'form_params' => [
                    'email'         => $this->email,
                    'period'        => 0,
                    'clickid'       => $this->clickID,
                    'LeadIPAddress' => $this->userIP,
                    'h'             => 1,
                    'affid'         => $this->affID,
                    'firstname'     => $this->firstName,
                    'lastname'      => $this->lastName
                ]
            ] );

            $response = $response->getBody()->getContents();

            Data::create( [
                'type'     => 'opt signup',
                'response' => $response
            ] );

            $output = explode( "|", $response );

            if ( $output[0] == '1' ) {

                return $output[1];

            } elseif ( $output[0] == '5' ) {

                return "Error: Email is already being use";

            } elseif ( $output[0] == '0' ) {

                return "Error: The fields you entered are invalid";

            } elseif ( $output[0] == '6' ) {

                return "Error: Username is already in use";
            }

        } catch (RequestException $e) {
            $response = $e->getResponse()->getBody()->getContents();

            Data::create([
                'type' => 'optsignup',
                'response' => $response->message
            ]);

            return "error: " . $response->message;
        }
    }

    /**
     * @param $phoneRequest
     *
     * @return void
     *
     */
    public function postSMS() {

        $phone =  preg_replace('/\s+/', '', $this->phone);
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

            return;

        } catch (RequestException $e) {

            if ($e->getResponse()->getStatusCode() == '400') {
               $message = json_decode($e->getResponse()->getBody()->getContents(), true);

               if(strpos($message['error'], 'Duplicate phone number') !== false ) {

                   Data::create([
                       'type' => 'sms',
                       'response' => $message['success'] . " " . $message['error']
                   ]);

                   return;

               } else {

                   Data::create([
                       'type' => 'sms',
                       'response' => $message['error']
                   ]);

                   return;
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

        try {
            $response = $client->request( 'POST', $endpointUrl, [
                'form_params' => [
                    'email'         => $this->email,
                    'FirstName'     => $this->firstName,
                    'LastName'      => $this->lastName,
                    'LeadIPAddress' => $userIP,
                    'LeadDate'      => $leadDate,
                    'LeadURL'       => $leadURL
                ]
            ] );

            Data::create( [
                'type'     => 'relevance',
                'response' => $response->getBody()->getContents()
            ] );

            return;

        } catch (RequestException $e) {
            $response = $e->getResponse()->getBody()->getContents();

            Data::create([
                'type' => 'relevance',
                'response' => $response->message
            ]);

            return;
        }
    }

    public function postCakeSignup($request) {

        $apiKey = 'qUK1FB8YLVud42uoD5COjsFYuMj03O';
        $name = $request['company'];
        $website = isset($request['website']) && $request['website'] != "" ? $request['website'] : " ";
        $taxClass = $request['tax-class'];
        $taxID = $request['ssn'];
        $payment = $request['payment'];
        $address = $request['address'];
        $address2 = isset($request['address2']) && $request['address2'] != "" ? $request['address2'] : " ";
        $city = $request['city'];
        $state = $request['state'];
        $zip = $request['postcode'];
        $country = $request['country'];
        $firstName = $request['firstName'];
        $lastName = $request['lastName'];
        $email = $request['email'];
        $jobTitle = isset($request['jobTitle']) && $request['jobTitle'] != "" ? $request['jobTitle'] : " ";
        $phone = $request['phone'];
        $cell = isset($request['cell']) && $request['cell'] != "" ? $request['cell'] : " ";
        $fax = isset($request['fax']) && $request['fax'] != "" ? $request['fax'] : " ";
        $imService = $request['imService'];
        $imName = $request ['imName'];
        $model = $request['model'];
        $category1 = $request['category1'];
        $category2 = $request['category2'];
        $comments = isset($request['comments']) && $request['comments'] != "" ? $request['comments'] : " ";

        $endpointUrl = "https://affiliate.moneylovers.com/api/4/signup.asmx/Affiliate?";


        /*api_key=" . $apiKey . "&affiliate_name=" . $name . "&account_status_id=1&affiliate_tier_id=0&hide_offers=False&website=" . $website . "&tax_class=" . $taxClass . "&ssn_tax_id=" . $taxID . "&vat_tax_required=False&swift_iban=null&payment_to=" .  $payment . "&payment_fee=-1&payment_min_threshold=100&currency_id=0&payment_setting_id=0&billing_cycle_id=0&payment_type_id=0&payment_type_info=null&address_street=" . $address . "&address_street2=" . $address2 . "&address_city=" . $city . "&address_state=" . $state . "&address_zip_code=" . $zip . "&address_country=" . $country . "&contact_first_name=" . $firstName . "&contact_middle_name=&contact_last_name=" . $lastName . "&contact_email_address=" . $email . "&contact_password=abc123&contact_title=" . $jobTitle . "&contact_phone_work=" . $phone . "&contact_phone_cell=" . $cell . "&contact_phone_fax=" . $fax . "&contact_im_service=" . $imService . "&contact_im_name=" . $imName . "&contact_timezone=EST&contact_language_id=1&media_type_ids=17&price_format_ids=" . $model . "&vertical_category_ids=" . $category1 . "," . $category2 . "&country_codes=&tag_ids=&date_added=" . date( "m/d/Y-h:i:sa" ) . "&signup_ip_address=" . $this->userIP . "&referral_affiliate_id=0&referral_notes=&terms_and_conditions_agreed=True&notes=" . $comments*/

        $client = new Client();

        try {
            $response = $client->request( 'POST', $endpointUrl, [
                'form_params' => [
                    'api_key'                     => $apiKey,
                    'affiliate_name'              => $name,
                    'account_status_id'           => 1,
                    'affiliate_tier_id'           => 1,
                    'hide_offers'                 => "FALSE",
                    'website'                     => $website,
                    'tax_class'                   => $taxClass,
                    'ssn_tax_id'                  => $taxID,
                    'vat_tax_required'            => "FALSE",
                    'swift_iban'                  => " ",
                    'payment_to'                  => $payment,
                    'payment_fee'                 => "0.00",
                    'payment_min_threshold'       => "100.00",
                    'currency_id'                 => 0,
                    'payment_setting_id'          => 0,
                    'billing_cycle_id'            => 0,
                    'payment_type_id'             => 0,
                    'payment_type_info'           => "",
                    'address_street'              => $address,
                    'address_street2'             => $address2,
                    'address_city'                => $city,
                    'address_state'               => $state,
                    'address_zip_code'            => $zip,
                    'address_country'             => $country,
                    'contact_first_name'          => $firstName,
                    'contact_middle_name'         => "",
                    'contact_last_name'           => $lastName,
                    'contact_email_address'       => $email,
                    'contact_password'            => "abc123",
                    'contact_title'               => $jobTitle,
                    'contact_phone_work'          => $phone,
                    'contact_phone_cell'          => $cell,
                    'contact_phone_fax'           => $fax,
                    'contact_im_service'          => $imService,
                    'contact_im_name'             => $imName,
                    'contact_timezone'            => "EST",
                    'contact_language_id'         => 1,
                    'media_type_ids'              => "15",
                    'price_format_ids'            => $model,
                    'vertical_category_ids'       => $category1,
                    'country_codes'               => "US",
                    'tag_ids'                     => 1,
                    'date_added'                  => date( "m/d/Y h:i:s"),
                    'signup_ip_address'           => $this->userIP,
                    'referral_affiliate_id'       => 343,
                    'referral_notes'              => " ",
                    'terms_and_conditions_agreed' => "TRUE",
                    'notes'                       => $comments
                ]
            ] );

            $xmlConvert = simplexml_load_string($response->getBody()->getContents());
            $output = json_decode(json_encode($xmlConvert), true);

            if ($output['success'] === 'false') {
                return $output['message'];
            } elseif($output['success'] === 'true') {
                return 'true';
            }

        } catch (RequestException $e) {
            $output = $e->getResponse()->getBody()->getContents();

            Data::create([
                'type' => 'cakeSignup',
                'response' => $output->message
            ]);

            return $output->message;
        }

    }
}
