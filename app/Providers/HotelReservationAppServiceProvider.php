<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HotelReservationAppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\HotelReservationAppRepository\IRoom',
            'App\HotelReservationAppRepository\Room'
        );
        $this->app->bind(
            'App\HotelReservationAppRepository\IRoomType',
            'App\HotelReservationAppRepository\RoomType'
        );
        $this->app->bind(
            'App\HotelReservationAppRepository\IReservation',
            'App\HotelReservationAppRepository\Reservation'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
