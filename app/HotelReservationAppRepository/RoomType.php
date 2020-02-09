<?php

namespace App\HotelReservationAppRepository;
use App\Models\RoomType as RoomTypeModel;
use App\HotelReservationAppRepository\IRoomType;

class RoomType implements IRoomType
{
    /*
     * public accessible variable to bind model instance to
     */
    public $model;

    /*
     * constructor
     * @params RoomTypeModel object
     */
    public function __construct(RoomTypeModel $model)
    {
        $this->model = $model;
    }

    /**
     * @return list of roomtypes
     */
    public function get()
    {
        return $this->model->paginate();
    }

    public function getList()
    {
        return $this->model->all();
    } 

    public function create()
    {
        // TODO: Implement create() method.
    }
}
