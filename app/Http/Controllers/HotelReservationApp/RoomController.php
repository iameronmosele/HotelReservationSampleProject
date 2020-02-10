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
    public function index()
    { 
        $rooms  = $this->roomService->get();

        return view('rooms.index',compact('rooms'));
    } 

    /**
     * create a new room
     * @param RoomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        $roomTypes = $this->roomType->getList();
        return view('rooms.create',compact("roomTypes"));
    }

    /**
     * create a new room
     * @param RoomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(RoomRequest $request)
    {
        $data = $request->validated();

        if($this->roomService->create($data)){
            return redirect(route('admin.room.create'))->with('200','Room created');
        }

        return redirect(route('admin.room.create'))->with('400','Room not created');
    }

    public function view($id)
    {
        $room       = $this->roomService->getById($id);
        $roomTypes  = $this->roomType->getList();

        return view('rooms.view',compact(['room','roomTypes']));
    }

    /**
     * @param RoomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'room_number' => 'required|integer|unique:rooms,room_number',
            'room_type_id' => 'required|integer',
        ]);

        if($this->roomService->update((int)$request->id,$data)){
            return redirect()->back()->with('200','Room created');
        }

        return redirect()->back()->with('400','Room not created');
    }

    // room to reservation

    /**
     * @param RoomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        if($this->roomService->delete($id)){
            return redirect(route('admin.room.index'));
        }
        return redirect()->back();
    }
}
