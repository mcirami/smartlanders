<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    public function index(Request $request, TemplateController $template) {

        if ($request->get('clickid'))   Redis::set('clickid', $request->get('clickid'));
        if ($request->get('affid'))     Redis::set('affid', $request->get('affid'));
        if ($request->get('sub1'))      Redis::set('sub1', $request->get('sub1'));
        if ($request->get('sub2'))      Redis::set('sub2', $request->get('sub2'));
        if ($request->get('sub3'))      Redis::set('sub3', $request->get('sub3'));
        if ($request->get('sub4'))      Redis::set('sub4', $request->get('sub4'));
        if ($request->get('sub5'))      Redis::set('sub5', $request->get('sub5'));

        Redis::set('ip', $request->ip());
        Redis::set('actualLink', url()->current());

        if($request->get('t')) $templateNumber = $request->get('t'); else $templateNumber = '1';
        $templateName = $template->index($templateNumber);

        if($request->get('a')) Redis::set('api', $request->get('a'));

        return view('templates.' . $templateName . '.index');
    }
}
