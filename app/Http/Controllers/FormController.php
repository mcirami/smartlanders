<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class FormController extends Controller
{
    protected $clickID, $affID, $userIP, $actualLInk;

    public function index(Request $request) {

        Redis::set('clickid', $request->get('clickid'));
        Redis::set('affid', $request->get('affid'));
        Redis::set('ip', $request->ip());
        Redis::set('actualLink', url()->current());

        $this->clickID = $request->get('clickid');
        $this->affID = $request->get('affid');
        $this->userIP = $request->ip();
        $this->actualLInk = url()->current();

        return view('main.index');
    }
}
