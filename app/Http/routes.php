<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/install', 'SystemController@install');

Route::get('/', 'ChatController@index');
Route::get('/action', 'ChatController@get');
Route::delete('/action/{id}', 'ChatController@remove');
Route::put('/action/{id}', 'ChatController@save');