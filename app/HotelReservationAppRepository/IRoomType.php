<?php

namespace App\HotelReservationAppRepository;

interface IRoomType
{
    public function create();
    public function get();
    public function getList();
}
