<?php

Route::get('/','TestController@index');



Route::prefix('/restrict')->namespace('HotelReservationApp')->group(function(){
    Route::get('/rooms','RoomController@index')->name('admin.room.index');
    Route::get('/rooms/create','RoomController@create')->name('admin.room.create');

    Route::get('/room-types','RoomTypeController@index');
    Route::get('/reservations','ReservationController@index');
    Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');
});
