<?php

use App\Events\websocketdemo;

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

	broadcast(new websocketdemo('Algo de información'));

    return view('welcome');
});

Auth::routes();

Route::get('/chats','ChatsController@index');

Route::get('/messages','ChatsController@fetchMessages');

Route::post('/messages','ChatsController@sendMessages');



Route::get('/home', 'HomeController@index')->name('home');
