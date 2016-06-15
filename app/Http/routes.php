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

Route::auth();

Route::get('/', 'PromotionsController@index');

Route::get('/{id}', 'PromotionsController@show');

Route::post('/store', 'PromotionsController@store');

Route::get('/edit/{id}', 'PromotionsController@edit');

Route::post('/update/{id}', 'PromotionsController@update');

Route::delete('/delete/{id}', 'PromotionsController@destroy');
