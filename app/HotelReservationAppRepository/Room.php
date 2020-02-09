<?php

namespace App\HotelReservationAppRepository;
use App\Models\Room as RoomModel;
use Illuminate\Support\Facades\DB;

class Room implements IRoom
{
    /*
     * public accessible variable to bind model instance to
     */
    public $model;
    public $query;

    /*
     * constructor
     * @params RoomModel object
     */
    public function __construct(RoomModel $model)
    {
        $this->model = $model;
    }

    /**
     * Get all rooms
     * @param $room string
     * @return Object
     */
    public function get()
    {
       return $this->model::with(['roomType'])->paginate();
    }

    /**
     * get rooms based on query params
     * @param $queryParmas [array]
     * @return Object
     */
    public function getWithQueryParams($queryParams)
    {
        if (isset($queryParams['room_number']))
        {
            $this->model = $this->model->where('room_number', $queryParams['room_number']);
        }

        if (isset($queryParams['with']))
        {
            $this->model = $this->model->with($queryParams['with']);
        }

        return $this->model->paginate();
    }


    /**
     * @param $data array
     * @return Object 
     */
    public function create($data)
    {
        return $this->model::create($data);
    }

    /**
     * Update a room
     * @param $room_number [string]
     * @param $data [array]
     * @return mixed
     * TODO test this methoD
     * TODO there is something wring when the application tries to update
     * the application will fail becuase of the id remove it after findin the element
     */
    public function update($id,$data)
    {
        return $this->model::where('id','=',(int)$id)->update($data);
    }

    /**
     * Delete a room
     * @param $room_number
     * @return mixed
     * TODO test this method
     */
    public function delete($id)
    {
        return $this->model::where('id', $id)->delete();
    }
}
