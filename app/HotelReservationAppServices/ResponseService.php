<?php


namespace App\HotelReservationAppServices;


class ResponseService
{
    /*
     * @params $status integer
     * @params $data array|string
     */
    public function response($status,$data)
    {
        return response()->json($data,$status);
    }
}
