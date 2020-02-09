<?php

namespace App\Http\Controllers\HotelReservationApp;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelReservationAppRequests\RoomRequest;
use App\Http\Requests\HotelReservationAppRequests\DeleteRoomRequest;
use App\HotelReservationAppServices\RoomService;
use App\HotelReservationAppRepository\IRoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public $roomService;
    public $roomType;

    public function __construct(RoomService $roomService,IRoomType $roomType)
    {
        $this->roomService = $roomService;
        $this->roomType = $roomType;
    }

    /**
     * return a list of rooms
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    { 
        $data = $this->roomService->get($request);

        return view('rooms.index',$data);
    } 

    /**
     * create a new room
     * @param RoomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        $data = $this->roomType->getList();
        return view('rooms.create',$data);
    }

    /**
     * create a new room
     * @param RoomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(RoomRequest $request)
    {
        //set session here from response of url

        $data = $this->roomService->create($data);

        //run checks here and return data

        return $data;
    }

    /**
     * @param RoomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(RoomRequest $request)
    {
        $data = $request->validated();

        return $this->roomService->update($data['id'],[
            'room_number'=>$data['room_number'],
            'room_type_id' => $data['room_type_id']
            ]);
    }

    /**
     * @param RoomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(DeleteRoomRequest $request)
    {
        $data = $request->validated();
        return $this->roomService->delete($data['id']);
    }
}
