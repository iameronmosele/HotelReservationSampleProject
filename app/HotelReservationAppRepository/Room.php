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
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function get()
    {
       return $this->model::with(['roomType'])->paginate();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model::findOrFail($id);
    }


    /**
     * @param $data
     * @return mixed
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
     * TODO test this method
     * TODO there is something wring when the application tries to update
     * the application will fail because of the id remove it after finding the element
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
