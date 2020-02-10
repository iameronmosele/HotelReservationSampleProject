<?php

namespace App\HotelReservationAppRepository;

interface IRoom
{
    public function create($data);
    public function get();
    public function find($id);
    public function update($id,$data);
    public function delete($id);
}
