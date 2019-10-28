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

Route::apiResource('/customers','CustomersController');

Route::apiResource('/hoteliers','HoteliersController');

Route::apiResource('/locations','LocationsController');

Route::apiResource('/hotels','HotelsController');

Route::group(['prefix'=>'Hotels'], function () {

	Route::apiResource('/{hotel}/rooms','RoomsController');
});

Route::apiResource('/Bookings','BookingsController');
