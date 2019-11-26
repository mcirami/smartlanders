<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function() {
    Route::get('/','IndexController@index');

    Route::post('opt-create','optform\RegisterController@create');
    /*Route::get('opt-data-post','DataController@postCreateOPT');*/

    Route::post('ml-create','moneylovers\RegisterController@create');
    Route::get('ml-success','moneylovers\RegisterController@success')->name('ml-success');

    Route::get('ml-terms','moneylovers\MoneyLoversController@terms')->name('ml-terms');
    Route::post('ml-login','moneylovers\MoneyLoversController@login');
});


