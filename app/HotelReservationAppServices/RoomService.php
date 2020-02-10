<?php

namespace App\HotelReservationAppServices;
use App\HotelReservationAppRepository\IRoom;
use App\HotelReservationAppServices\ResponseService;
use App\Http\Resources\HotelReservationAppResource\RoomResource;
use Illuminate\Support\Facades\DB;

class RoomService
{
    public $roomRepo;
    public $response;
    public $data;
    public $queryParamsOptions = [];

    public function __construct(IRoom $roomRepo,ResponseService $response)
    {
        $this->roomRepo = $roomRepo;
        $this->response = $response;
    }

    /**
     * @param $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function get()
    {
        return $this->roomRepo->get();
    }

    public function getById($id)
    {
        return $this->roomRepo->find($id);
    }

    /**
     * @param $data
     * @return bool
     */
    public function create($data): bool
    {
        $this->data = $this->roomRepo->create($data);

        if(!empty($this->data) && is_object($this->data)) {
            return true;
        }

        return false;
    }

    /**
     * @param $id
     * @param $data
     * @return bool
     */
    public function update($id,$data):bool
    {
        if($this->roomRepo->update($id,$data)) {
            return true;
        }

        return false;
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id) : bool
    {
        if($this->roomRepo->delete($id)) {
            return true;
        }

        return false;
    }

}
