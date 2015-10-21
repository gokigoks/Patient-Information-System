<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['patient_id', 'doctor_id', 'email', 'password','role'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
    
    public function is($role)
    {   
        if($role == Auth::user()->role){
            return true;
        }
        else{
            return false;
        }
    }

    public function getRole(){
        
        if($this->role == "user")
        {
            return $this->patient()->pfname;
        }
        else
        {
            return $this->role;
        }

    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function sayHello(){
        return "hello!";
    }

    public function getName()
    {  
        if($this->role == "user")
        {               
            return $this->patient()->first()->pfname;        
        }
        else
        {
            return $this->role;
        }
    }

}
