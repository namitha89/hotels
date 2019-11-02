<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelsRequest extends FormRequest
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
            'name' => 'required|min:10|notIn:Free,Offer,Book,Website',
            'rating' => 'required|integer|between:0,5',
            'category' => 'required|in:hotel,alternative,hostel,lodge,resort,guest-house',
            'image' => 'required',
            'reputation' => 'required|integer|between:0,1000',
            'location_id' => 'required|integer',
            'hotelier_id' => 'required|integer'
            
        ];
    }
}
