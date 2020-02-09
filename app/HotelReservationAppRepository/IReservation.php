<?php

namespace App\HotelReservationAppRepository;


interface IReservation
{
    public function get();
    public function getByQueryParams($reference);
    public function create(array $data);
}
