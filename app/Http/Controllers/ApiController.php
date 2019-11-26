<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getApiName($int) {

        $apiArray = [

            '1' => 'postOPTSignup',
            '2' => 'postSMS',
            '3' => 'postRelevance',
            '4' => 'postCakeSignup'
        ];

        return $apiArray[$int];
    }

}
