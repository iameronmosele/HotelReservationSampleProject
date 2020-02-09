<?php

namespace App\HotelReservationAppRepository;

interface IRoom
{
    public function create($data);
    public function get();
    public function getWithQueryParams($queryParams);
    public function update($id,$data);
    public function delete($id);
}
