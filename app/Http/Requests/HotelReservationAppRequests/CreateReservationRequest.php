<?php

namespace App\Http\Requests\HotelReservationAppRequests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;


class CreateReservationRequest extends FormRequest
{
    public $error_code = 'reservation_error_001';
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
            "reference"         => 'required|unique:reservations,reference',
            "email"             => 'required',
            "mobile_number"     => 'required',
            "reserved_from"     => 'required|date',
            "reserved_to"       => 'required|date',
            "status"            => 'required|integer',
            "room_id"           => 'required|integer'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $collection  = collect($validator->errors())->flatten()->values()->all();

        throw new HttpResponseException(response([
                'type'    => $this->error_code,
                'message' => $collection
            ], Response::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
