<?php

namespace App\Http\Controllers\HotelReservationApp;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelReservationAppRequests\CreateReservationRequest;
use  App\HotelReservationAppServices\ReservationService;
use  App\HotelReservationAppServices\ResponseService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public $reservationService;
    public $responseService;
    protected $queryParamsOptions;

    public function __construct(
        ReservationService $reservationService,
        ResponseService $responseService
        )
    {
        $this->reservationService = $reservationService;
        $this->responseService = $responseService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return $this->reservationService->get($request->input('condition'),$request->input('query'));
    }

    /**
     * create a new reservation
     * @return array
     * TODO : Test this function
     * @todo create confirm reservation which accepts proof of payment for every resertvation to confirm
     * the reservation
     */
    public function create(CreateReservationRequest $request)
    {
        //before a reservation is created the application has to check through reservations and make sure the room
        //there has to be a place where the application can trust as a source of truth to find which rooms have been booked
        //when a reservation is confirmed the application checks if the room has booked,pending
        $data = $request->validated();
        return $this->reservationService->create($data);
    }

    //i have a limited number of rooms
    //when a room is booked lock it down with payment
}
