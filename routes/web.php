<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        'whole_message_info' => ""
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'whole_message_info' => ""
    ]);
});

Route::get('/searchbook', 'App\Http\Controllers\BookController@searchBook');

Route::get('/about', function () {
    return view('about');
});

Route::get('/sign_in_or_sign_up', function () {
    if (session()->has('current_user_name') 
        && session()->has('current_user_password')) {
        session()->forget('current_user_name');
        session()->forget('current_user_password');
        if (session()->has('premium_user_type')) {
            session()->forget('premium_user_type');
        }
    }
    return view('sign_in_or_sign_up', [
        'whole_message_info' => ""
    ]);
});

Route::get('/statistics', function () {
    return view('statistics');
});

Route::get('/premium', function () {
    return view('premium');
});

Route::post('/home', 
    'App\Http\Controllers\UserInfoController@getUserInfo')
->name('user_input_data');
Route::post('/premium', function (Illuminate\Http\Request $req) {
    if ($req->input('option_cancel')){
        app('App\Http\Controllers\UserInfoController')->cancelPremium($req);
    } else {
        app('App\Http\Controllers\UserInfoController')->buyPremium($req);
    }
    return view('premium');
});