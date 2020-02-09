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

//middleware
//create resertvations api
//create rooms api encapsulates the room types

Route::namespace('HotelReservationApp')->group(function () {
    Route::get('/rooms','RoomController@index');
    Route::post('/rooms/create','RoomController@create');
    Route::put('/rooms/update','RoomController@update');
    Route::delete('/rooms/delete','RoomController@delete');

    //reservation routes
    Route::get('/reservations','ReservationController@index');
    Route::post('/reservation/create','ReservationController@create');
});

//create the view and arrange the forms


