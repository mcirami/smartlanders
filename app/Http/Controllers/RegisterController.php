<?php

namespace App\Http\Controllers;

use App\Services\DataPostService;
use App\Http\Requests\RegistrationRequest;
use App\Services\UserService;

class RegisterController extends Controller
{
    /**
     * @param RegistrationRequest $request
     * @param UserService $user
     * @param DataPostService $post
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function create(RegistrationRequest $request, UserService $user, DataPostService $post) {

        $post->postSMS($request['phone']);

        $optResponse = $post->postOPTUser();

        if ( $optResponse[0] == '1' ) {

            $user->store($request);
            $post->postRelevance();

        } elseif ( $optResponse[0] == '5' ) {

            return redirect()->back()->withInput()->withErrors(['email' => 'Email is already being use']);

        } elseif ( $optResponse[0] == '0' ) {

            return redirect()->back()->withInput()->withErrors(['fields' => 'The fields you entered are invalid']);

        }

        return redirect()->back();
    }
}
