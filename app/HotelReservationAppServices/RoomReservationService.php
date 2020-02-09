<?php

namespace App\HotelReservationAppServices;
use App\HotelReservationAppRepository\IRoom;
use App\HotelReservationAppServices\ResponseService;
use App\Http\Resources\HotelReservationAppResource\RoomResourceCollection;
use App\Http\Resources\HotelReservationAppResource\RoomResource;

class RoomReservationService
{
    public $roomRepo;
    public $response;

    public function __construct(IRoom $roomRepo,ResponseService $response)
    {
        $this->roomRepo = $roomRepo;
        $this->response = $response;
    }

    public function getRooms()
    {
        $data =  RoomResource::collection($this->roomRepo->get());

        return $this->response->response(200,[
            'data' =>  $data,
            ]
        );
    }
}
