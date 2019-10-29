<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TemplateController extends Controller
{
    public function index(Request $request) {

        Redis::set('clickid', $request->get('clickid'));
        Redis::set('affid', $request->get('affid'));
        Redis::set('ip', $request->ip());
        Redis::set('actualLink', url()->current());

        $template = $request->get('t');

        return view('templates.' . $template . '.index');

    }
}
