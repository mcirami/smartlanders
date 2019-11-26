<?php

namespace App\Http\Controllers;

class TemplateController extends Controller
{
    private function templates($templateNumber) {

        $templateArray = [
            '1' => 'opt-signup-form',
            '2' => 'money-lovers'
        ];

        return $templateArray[$templateNumber];
    }

    public function index($int) {

        return $templateName = $this->templates($int);
    }
}
