<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {   

        $this->middleware('guest', ['except' => ['getLogout','getRegister','postRegister']]);
        $this->middleware('admin',['only'=> ['getRegister','postRegister']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        

        $messages = [
            'patient_id.exists' => 'patient does not exist',
            'patient_id.required' => 'patient id is required for the user account',
            'doctor_id.required' => 'doctor id is required for a doctor role',
            'doctor_id.exists' => 'doctor does not exist',
            'email.required' => 'Email is required',
            'email.unique' => 'email is already taken',        
            'password.confirmed' => 'confirm password',
            'role.required' => 'role is required',
            'password.min' => 'A minimum of 6 characters is allowed for passwords',
            'password.required' => 'Password field is required'
        ];

        if($data){

            $role = ( $data['role']=="patient" ? ['account_id' => 'required|exists:patients,id|unique:users,patient_id'] : ['account_id' => 'required|exists:doctors,id|unique:users,doctor_id'] );
            
            // dd($data,[
            //     key($role) => current($role), 
            //     'role' => 'required',
            //     'email' => 'required|email|max:255|unique:users,email',
            //     'password' => 'required|confirmed|min:6'
            // ]);

            
            return Validator::make($data, [
                key($role) => current($role), 
                'role' => 'required',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|confirmed|min:6'
            ],$messages);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $role = ( $data['role']=="patient" ? 'patient_id' : 'doctor_id' );
        
        $user = new \App\User([            
            'role' => $data['role'],        
            'email' => $data['email'],            
            'password' => bcrypt($data['password']),
            'doctor_id' => $data['account_id']
        ]);

        //dd($user,$role);
        return User::create([
            $role => $data['account_id'],
            'role' => $data['role'],        
            'email' => $data['email'],            
            'password' => bcrypt($data['password'])
        ]);
    }
}
