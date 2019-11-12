<?php

namespace App\Http\Controllers\moneylovers;

use App\Services\DataPostService;
use App\Http\Requests\MLRegistrationRequest;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    /***
     * @param MLRegistrationRequest $request
     * @param DataPostService $post
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(MLRegistrationRequest $request, DataPostService $post) {

        $response = $post->postCakeSignup($request);

        if ($response->success == 'false') {
            return redirect()->to(url()->previous() . '#signup')->withInput()->withErrors(['fields' => $response->message]);
        } elseif($response->success == 'true') {
            return redirect('/ml-success?t=2');
        } else {
            return redirect()->to(url()->previous() . '#signup')->withInput()->withErrors(['fields' => $response]);
        }
    }

    /***
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function success(){
        return view('templates.money-lovers.success');
    }
}
