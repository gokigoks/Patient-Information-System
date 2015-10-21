<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminRequest extends Request
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
            'adminid' => 'required|numeric',
            'adminlname' => 'required|alpha',
            'adminfname' => 'required|alpha',
            'adminmname' => 'alpha',
            'adminemail' => 'required|alpha',
            'adminpass' => 'required|alpha',
            'adminaddress' => 'required|alpha',
            'admingender' => 'required|alpha',
            'adminnumber' => 'required|alpha'
        ];
    }
}
