<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomsRequest extends FormRequest
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
            //
            'name' => 'required',
            'roomtype' => 'required|in:single,double,triple,quad,queen,king',
            'price' => 'required|integer',
            'hotel_id' => 'required|integer',
            'status' => 'required|in:available,booked',
            
        ];
    }
}
