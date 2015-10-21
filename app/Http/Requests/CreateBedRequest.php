<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateBedRequest extends Request
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
            'floor' => 'required|min:1', 
            'section' => 'required',
            'bed_type' => 'required',
            'rate_per_night' => 'required|min:1'  
        ];
    }
    public function messages(){

        return [
            'floor.required' => 'which floor is this bed located',
            'section.required' => 'which section in the building is this bed located',
            'bed_type.required' => 'bed type is required',
            'rate_per_night.required' => 'please specify the price per night of this bed',
        ];
    }
}
