<?php

namespace App\Http\Controllers\moneylovers;

use App\Data;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Redis;

class DataController extends Controller
{

    /***
     * @param $request
     *
     * @return \SimpleXMLElement|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loginPost($request) {
        $username = $request['username'];
        $password = $request['password'];
        $ipAddress = Redis::get('ip');

        $endpointUrl = "https://affiliate.moneylovers.com/api/1/auth.asmx/Login?&username=" . $username . "&password=" . $password . "&ip_address=" . $ipAddress;

        $client = new Client();

        try {
            $response = $client->request( 'GET', $endpointUrl, [
                'form_params' => [
                    'username'   => $username,
                    'password'   => $password,
                    'ip_address' => $ipAddress
                ]
            ] );
        } catch (RequestException $e) {
            $message = $e->getResponse()->getBody()->getContents();

            Data::create([
                'type' => 'cakeSignup',
                'response' => $message
            ]);

            return $message;
        }

        $xmlConverted = simplexml_load_string($response->getBody()->getContents());

        $error = "";
        if (isset($xmlConverted->error_text)) {
            $error = $xmlConverted->error_text;
        }

        Data::create([
            'type' => 'cakeLogin',
            'response' => $xmlConverted->success . " " . $error
        ]);

        return $xmlConverted;
    }
}
