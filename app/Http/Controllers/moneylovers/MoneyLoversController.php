<?php

namespace App\Http\Controllers\moneylovers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\moneylovers\DataController;
use Illuminate\Http\Request;

class MoneyLoversController extends Controller
{

    /***
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function terms() {

        return view('templates.money-lovers.terms');
    }

    /***
     * @param Request $request
     * @param DataController $post
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request, DataController $post) {

        $response = $post->loginPost($request);

        if (isset($response->success) && $response->success == 'false') {
            return redirect()->to(url()->previous() . '&loginError='.$response->error_text);
        }

    }
}
