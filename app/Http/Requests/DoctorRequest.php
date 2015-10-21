<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DoctorRequest extends Request
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
            'doctor_fname' => 'required',
            'doctor_lname' => 'required',
            'doctor_address' => 'required',
            'medspecialty_id' => 'required',
        ];
    }

    public function messages(){

        return [
            'doctor_fname.required' => 'doctor first name field is required..',
            'doctor_mname.required' => 'doctor middle name field is required..',
            'doctor_lname.required' => 'doctor last name field is required..',
            'medspecialty_id.required' => 'please specify the specialty of this doctor',
        ];
    }
}
