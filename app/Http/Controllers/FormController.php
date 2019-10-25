<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class FormController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index(Request $request) {

        Redis::set('clickid', $request->get('clickid'));
        Redis::set('affid', $request->get('affid'));
        Redis::set('ip', $request->ip());
        Redis::set('actualLink', url()->current());

        return view('main.index');
    }
}
