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

Route::get('pinjams','ApiController@getAllPinjam');
Route::get('pinjams/{id}','ApiController@getPinjam');
Route::post('pinjams','ApiController@storePinjam');
Route::put('pinjams/{id}','ApiController@updatePinjam');
Route::delete('pinjams/{id}','ApiController@deletePinjam');
Route::post('notifs','ApiController@storeTokenExpo');
Route::get('notifs','ApiController@getToken');
// Route::post('login', 'UserController@login');
// Route::post('register', 'UserController@register');
// Route::group(['middleware' => 'auth:api'], function(){
//     Route::post('details', 'UserController@details');
// });
