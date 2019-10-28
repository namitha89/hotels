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
Route::post('/register','Api\AuthController@register');

Route::post('/login','Api\AuthController@login');

Route::apiResource('/customers','CustomersController');

Route::apiResource('/hoteliers','HoteliersController');

Route::apiResource('/locations','LocationsController');

Route::apiResource('/hotels','HotelsController');

Route::group(['prefix'=>'hotels'],function(){
	Route::apiResource('/{hotels}/rooms','RoomsController');
});
Route::group(['prefix'=>'hotels'],function(){
	Route::apiResource('/{hotels}/rooms/{rooms}/book','RoomsController');
});

Route::apiResource('/bookings','BookingsController');
