<?php

namespace App\Http\Resources\HotelReservationAppResource;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
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
            "reference"         => $this->reference,
            "email"             => $this->email,
            "mobile_number"     => $this->mobile_number,
            "reserved_from"     => $this->reserved_from,
            "reserved_to"       => $this->reserved_to,
            "status"            => $this->status,
            "room"              => new RoomResource($this->whenLoaded('room'))
        ];
    }
}
