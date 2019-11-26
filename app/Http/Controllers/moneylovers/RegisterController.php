<?php

namespace App\Http\Controllers\moneylovers;

use App\Http\Controllers\ApiController;
use App\Services\DataPostService;
use App\Http\Requests\MLRegistrationRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RegisterController extends Controller
{

    /***
     * @param MLRegistrationRequest $request
     * @param DataPostService $post
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(MLRegistrationRequest $request, DataPostService $post, ApiController $apiType) {

        $apiRequested = Redis::get('api');
        $apiValues = explode(',' , $apiRequested);

        if (count($apiValues) > 1) {

            foreach($apiValues as $apiValue) {
                $apiName = $apiType->getApiName($apiValue);

                $post->$apiName($request);
            }

        } else {
            $apiName = $apiType->getApiName($apiValues[0]);

            $response = $post->$apiName($request);

            if($response == "true") {
                return redirect('/ml-success?t=2&a=4');
            } else {
                return redirect()->to(url()->previous() . '#signup')->withInput()->withErrors(['fields' => $response]);
            }
        }
    }

    /***
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function success(){
        return view('templates.money-lovers.success');
    }
}
