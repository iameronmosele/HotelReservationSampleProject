<?php

Route::get('/','SiteController@index')->name('site.index');
Route::get('/about','SiteController@about')->name('site.about');
Route::get('/book','SiteController@book')->name('site.book');


//Route::prefix('/restrict')->namespace('HotelReservationApp')->group(function(){
//
//    Route::get('/rooms','RoomController@index')->name('admin.room.index');
//    Route::get('/rooms/create','RoomController@create')->name('admin.room.create');
//    Route::post('/rooms/store','RoomController@store')->name('admin.room.store');
//    Route::get('/rooms/view/{id}','RoomController@view')->name('admin.room.view');
//    Route::post('/rooms/update','RoomController@update')->name('admin.room.update');
//    Route::get('/rooms/delete/{id}','RoomController@delete')->name('admin.room.delete');
//
//    Route::get('/room-types','RoomTypeController@index');
//    Route::get('/reservations','ReservationController@index');
//    Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');
//});

Auth::routes();

