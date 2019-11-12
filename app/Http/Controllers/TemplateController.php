<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TemplateController extends Controller
{
    private function templates($templateNumber) {

        $templateArray = [
            '1' => 'opt-signup-form',
            '2' => 'money-lovers'
        ];

        return $templateArray[$templateNumber];
    }

    public function index(Request $request) {

        Redis::set('clickid', $request->get('clickid'));
        Redis::set('affid', $request->get('affid'));
        Redis::set('ip', $request->ip());
        Redis::set('actualLink', url()->current());

        $getNumber = $request->get('t');
        $templateNumber = isset($getNumber) ? $getNumber : '1';
        $templateName = $this->templates($templateNumber);

        return view('templates.' . $templateName . '.index');
    }


}
