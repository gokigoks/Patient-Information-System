<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PatientRequest extends Request
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
            
            'plname' => 'required',
            'pfname' => 'required',                   
        ];
    }

    public function messages(){

        return [
            'plname.required' => 'patient first name field is required..',
            'pfname.required' => 'patient middle name field is required..'            
        ];
    }
}
