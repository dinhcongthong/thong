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

Route::get('/', 'HomeController@index');

// test relationships
Route::get('/list', 'HomeController@phone_list');
Route::post('/post-save', 'HomeController@post_save')->name('post_phone_route');
Route::view('/get-update', 'add-new-phone')->name('get_update_route');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::post('/send-mail', 'HomeController@postSendMail')->name('post_send_mail_route');
