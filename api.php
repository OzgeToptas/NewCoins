<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/coins','CoinsController@create');

Route::get('/coins','CoinsController@show');

Route::get('/coins/{id}','CoinsController@showbyid');

Route::put('/coinsupdate/{id}','CoinsController@updatebyid');

Route::delete('/coinsdelete/{id}','CoinsController@deletebyid');