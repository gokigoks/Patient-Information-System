<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewVisitRequest extends Request
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
            'patient_id' => 'exists:patients,id|required',
            'doctor_id' => 'required',
            
        ];        
    }

    public function messages(){

        return [
            'patient_id.exists' => 'there is no patient with that patient id.',
            'doctor_id.required' => 'doctor id is required',          
        ];
    }
}
