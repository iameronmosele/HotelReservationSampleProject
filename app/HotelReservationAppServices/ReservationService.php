<?php

namespace App\HotelReservationAppServices;
use App\HotelReservationAppRepository\IReservation;
use App\HotelReservationAppServices\ResponseService;
use App\Http\Resources\HotelReservationAppResource\ReservationResource;

class ReservationService
{
    public $reservationRepo;
    public $response;
    public $data;

    /**
     * ReservationService constructor.
     * @param IReservation $reservationRepo
     * @param \App\HotelReservationAppServices\ResponseService $response
     */
    public function __construct(IReservation $reservationRepo,ResponseService $response)
    {
        $this->reservationRepo = $reservationRepo;
        $this->response = $response;
    }

    /**
     * @param $condition
     * @param $query
     * @return \Illuminate\Http\JsonResponse
     */
    public function get($condition,$query)
    {
        $this->data =  ReservationResource::collection($this->reservationRepo->get());

        if(isset($condition) && isset($query) && $condition === 'reference')
        {
            $this->data =  ReservationResource::collection($this->reservationRepo->getByQueryParams($query));
        }

        return $this->response->response(200,[
            'data' =>  $this->data,
            ]
        );
    }

    /**
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function create($data)
    {
        //the only reason to create a reservation is if payment has been made
        $this->data = $this->reservationRepo->create($data);

        if(!empty($this->data) && is_object($this->data))
        {
            return $this->response->response(200,[
                    'data'      => $this->data,
                    'message'   => 'Reservation Created'
                ]);
        }

        return $this->response->response(400,[
            'message'   => 'Failed to create reservation'
        ]);
    }
}


