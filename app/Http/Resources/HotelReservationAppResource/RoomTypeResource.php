<?php

namespace App\Http\Resources\HotelReservationAppResource;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($data)
    {
        return [
            'name'          => $this->name,
            'image'         => $this->image,
            'description'   => $this->description
        ];
    }
}
