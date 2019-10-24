<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redis;

class DataController extends Controller
{

    /**
     * @param $response
     *
     * @return void
     *
    **/
    private function checkResponse($response) {

        if ( $response['0'] == 1 ) {
            return redirect($response[1]);
        } elseif ( $response['0'] == 5 ) {
            Redis::set('OPTPostError', 'ERROR: Email is already being use');
            return redirect('/register')->withInput();
        } elseif ( $response['0'] == 0 ) {
            Redis::set('OPTPostError', 'ERROR: The fields you entered are invalid');
            return redirect('/register')->withInput();
        }
    }

    public function postCreateOPT(Request $userID) {

        $userDetails = User::find($userID)->first();

        $siteURL = "https://onlineplaytime.com";
        $endpointUrl = "/api/signup?email=" . $userDetails['email'] . "&period=0&clickid=" . $userDetails['clickid'] . "&custid=&invoiceid=&cardhash=&LeadIPAddress=" . $userDetails['ip'] . "&h=1&affid=". $userDetails['affid'] . "&firstname=" . $userDetails['first_name'] . "&lastname=" . $userDetails['last_name'];

        $client = new Client();
        $response = $client->request('GET', $siteURL . $endpointUrl, [
           'form_params' => [
               'email'          => $userDetails['email'],
               'period'         => 0,
               'clickid'        => $userDetails['clickid'],
               'LeadIPAddress'  => $userDetails['ip'],
               'h'              => 1,
               'affid'          => $userDetails['affid'],
               'firstname'      => $userDetails['first_name'],
               'lastname'       => $userDetails['last_name']
           ]
        ]);

        $response = $response->getBody()->getContents();

        $this->checkResponse($response);

        /*if ( $response[0] == 1 ) {
            return redirect($response[1]);
        } elseif ( $response[0] == 5 ) {
            //Redis::set('OPTPostError', 'ERROR: Email is already being use');
            return redirect()->back()->withInput();
        } elseif ( $response[0] == 0 ) {
            //Redis::set('OPTPostError', 'ERROR: The fields you entered are invalid');
            return redirect()->back()->withInput();
        }*/

    }
}
