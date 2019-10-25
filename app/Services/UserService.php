<?php


namespace App\Services;


use App\User;
use Illuminate\Support\Facades\Redis;

class UserService {

    /**
     * @param $request
     */

    public function store($request) {

        User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email'     => $request['email'],
            'phone'     => $request['phone'],
            'affid'     => Redis::get('affid'),
            'clickid'   => Redis::get('clickid'),
            'ip'        => Redis::get('ip')
        ]);

    }
}
