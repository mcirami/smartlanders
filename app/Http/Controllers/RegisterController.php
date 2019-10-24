<?php

namespace App\Http\Controllers;

use App\Services\DataPostService;
use App\Http\Requests\RegistrationRequest;
use App\Services\UserService;

class RegisterController extends Controller
{
    public function create(RegistrationRequest $request, UserService $user, DataPostService $post) {

        $response = $post->postOPTUser();

        if ( $response[0] == '1' ) {

            $user->store($request);
            $post->postRelevance();
            $post->postSMS($request['phone']);

            return redirect($response[1]);

        } elseif ( $response[0] == '5' ) {

            return redirect()->back()->withInput()->withErrors(['email' => 'Email is already being use']);

        } elseif ( $response[0] == '0' ) {

            return redirect()->back()->withInput()->withErrors(['fields' => 'The fields you entered are invalid']);

        }

        return redirect()->back();
    }
}
