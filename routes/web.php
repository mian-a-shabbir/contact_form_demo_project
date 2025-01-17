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
    return view('contact-form');
});

Route::post('/save-contact','ContactsInfoController@saveContact');


Route::get('/test/env', function () {
    dd(env('DB_PASSWORD')); // dump db variable value one by one
});