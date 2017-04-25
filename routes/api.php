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

Route::post('users/login', ['as' => 'authentication', 'uses' => 'Api\UsersController@authentication']);
Route::post('users', ['as' => 'registration', 'uses' => 'Api\UsersController@registration']);

Route::resource('articles', 'Api\ArticlesController');
