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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/send-mail', 'HomeController@postSendMail')->name('post_send_mail_route');

// test relationships
Route::get('/list', 'HomeController@delete_list');
Route::post('/post-save', 'HomeController@post_save')->name('post_phone_route');
Route::view('/get-update', 'add-new-phone')->name('get_update_route');
