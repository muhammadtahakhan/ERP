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
|q
*/
Route::post('register', 'API\AuthController@register');
Route::post('login', 'API\AuthController@login');
Route::apiResource('ceo', 'API\CEOController')->middleware('auth:api');

Route::group(['middleware' => ['cors', 'auth:api', 'json.response']], function () {
    // ...
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
