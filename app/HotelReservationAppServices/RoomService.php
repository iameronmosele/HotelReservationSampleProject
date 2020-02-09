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
    public function get($request)
    {
        $this->data =  $this->roomRepo->get();

        return [
            'status' => 200,
            'data' => $this->data
        ];
    }

    /**
     * create a room
     * @params $data array
     * @return \Illuminate\Http\JsonResponse
     */
    public function create($data)
    {
        $this->data = $this->roomRepo->create($data);

        if(!empty($this->data) && is_object($this->data))
        {
            return [
                    'status'   => 200,
                    'data'      => $this->data,
                    'message'   => 'Room Created'
            ];

        }

        return [
            'status'   => 400,
            'data'      => $this->data,
            'message'   => 'Failed to create room'
         ];
    }

    /**
     * Update a room
     * @param $data [array]
     * @return \Illuminate\Http\JsonResponse
     * TODO : test this method and  see if it works
     */
    public function update($id,$data)
    {
        $this->data = $this->roomRepo->update($id,$data);

        if($this->data){
            return [
                'status'   => 200,
                'message' => 'Room  Updated'
             ];
            
        }

        return [
            'status'   => 400,
            'message' => 'Failed to update room'
        ];

    }

    /**
     * Soft Delete a room
     * @param $data [array]
     * @return \Illuminate\Http\JsonResponse
     * TODO : test this method and  see if it works
     */
    public function delete($id)
    {
        $this->data = $this->roomRepo->delete($id);

        if($this->data)
        {
            return [
                'status' => 200,
                'message' => 'Room  Deleted'
            ];
        }

        return [
            'status' => 400,
            'message' => 'Failed to delete room'
        ];
    }

    /**
     * returns the query params set in the request
     * @param $request
     * @return array
     */
    public function inspectQueryParams($request)
    {
        if(!empty($request->input('room_number')))
        {
            $explodeRoomNumber = explode_value(',',$request->input('room_number'));

            if(count($explodeRoomNumber) === 1)
            {
                $this->queryParamsOptions['room_number'] = $request->input('room_number');
            }
        }

        if(!empty($request->input('with')))
        {
            $explodeWith = explode_value(',',$request->input('with'));

            if(count($explodeWith) >= 1 && count($explodeWith) <= 2)
            {
                $this->queryParamsOptions['with'] = explode_value(',',$request->input('with'));
            }
        }

        return $this->queryParamsOptions;
    }
}
