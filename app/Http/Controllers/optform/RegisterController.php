<?php

namespace App\Http\Controllers\optform;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Services\DataPostService;
use App\Http\Requests\OPTRegistrationRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Redis;

class RegisterController extends Controller
{
    /**
     * @param OPTRegistrationRequest $request
     * @param UserService $user
     * @param DataPostService $post
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function create(OPTRegistrationRequest $request, UserService $user, DataPostService $post, ApiController $apiType) {

        $apiRequested = Redis::get('api');
        $apiValues = explode(',' , $apiRequested);

        if (count($apiValues) > 1) {

            foreach($apiValues as $apiValue) {

                $apiName = $apiType->getApiName($apiValue);

                $response = $post->$apiName();

                if ( strpos( $response, "Error" ) !== false ) {
                    return redirect()->back()->withInput()->withErrors( [ 'fields' => $response ] );
                    break;
                }
            }

            $user->store( $request );
            return redirect( $response );

        } else {
            $apiName = $apiType->getApiName($apiValues[0]);

            $response = $post->$apiName();
        }
    }
}
