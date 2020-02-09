<?php

namespace App\HotelReservationAppRepository;
use App\HotelReservationAppRepository\IReservation;
use App\Models\Reservation as ReservationModel;

class Reservation implements IReservation
{
    /*
     * public accessible variable to bind model instance to
     */
    public $model;

    /*
     * constructor
     * @params ReservsationModel object
     */
    public function __construct(ReservationModel $model)
    {
        $this->model = $model;
    }

    /**
     * @return ReservationModel[]|\Illuminate\Database\Eloquent\Collection
     */
    public function get()
    {
        return $this->model->paginate();
    }

    /**
     * @param $reference
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getByQueryParams($reference)
    {
        return $this->model::with(['room','room.roomType'])
            ->where('reference','=',$reference)
            ->get();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->model::create($data);
    }
}
