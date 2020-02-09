<?php

namespace App\Http\Requests\HotelReservationAppRequests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class RoomRequest extends FormRequest
{
    public $error_code = 'room_error_001';
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "room_number"   => 'required',
            "room_type_id"  => 'required|integer',
        ];
    }

    
}
