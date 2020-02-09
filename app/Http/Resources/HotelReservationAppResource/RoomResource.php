<?php

namespace App\Http\Resources\HotelReservationAppResource;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'room_number'   => $this->room_number,
            'room_type'     => new RoomTypeResource($this->whenLoaded('roomType')),
            'reservation'   => ReservationResource::collection($this->whenLoaded('reservation')),
        ];
    }
}
