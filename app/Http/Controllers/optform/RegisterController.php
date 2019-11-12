<?php

namespace App\Http\Controllers\optform;

use App\Http\Controllers\Controller;
use App\Services\DataPostService;
use App\Http\Requests\OPTRegistrationRequest;
use App\Services\UserService;

class RegisterController extends Controller
{
    /**
     * @param OPTRegistrationRequest $request
     * @param UserService $user
     * @param DataPostService $post
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function create(OPTRegistrationRequest $request, UserService $user, DataPostService $post) {

        $post->postSMS($request['phone']);

        $optResponse = $post->postOPTSignup();

        if ( $optResponse[0] == '1' ) {

            $user->store($request);
            $post->postRelevance();

            return redirect($optResponse[1]);

        } elseif ( $optResponse[0] == '5' ) {

            return redirect()->back()->withInput()->withErrors(['email' => 'Email is already being use']);

        } elseif ( $optResponse[0] == '0' ) {

            return redirect()->back()->withInput()->withErrors(['fields' => 'The fields you entered are invalid']);

        }

        return redirect()->back();
    }
}
