<?php

namespace App\Http\Requests\HotelReservationAppRequests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class DeleteRoomRequest extends FormRequest
{
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
            'id'   => 'required|integer'
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
