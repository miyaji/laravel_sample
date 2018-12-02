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

//Route::middleware('api')->get('user',       'API\UserController@show');
//Route::middleware('api')->get('user/add',   'API\UserController@add');

Route::middleware('auth:api')->get('book',       'API\BookController@index');
Route::middleware('auth:api')->get('book/add',   'API\BookController@add');