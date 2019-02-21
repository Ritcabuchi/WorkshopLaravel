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
    return view('welcome');
});

Route::get('/form',function() {
    return view('form');
 });

Route::get('/foo/bar',function() {
    return view('foo');
});

Route::get('create',function() {
    return view('createform');
});

Route::get('sendbasicmail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');
Route::post('/sendData', array('uses' => 'MailController@basic_email'));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
