<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Admin extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
	use Authenticatable, Authorizable, CanResetPassword;
	protected $table = 'admins';
    protected $primaryKey = 'adminid';
    protected $fillable = ['adminid','adminlname','adminfname','adminmname','adminemail','adminaddress','admingender','adminnumbers'];  
    protected $hidden = ['adminpass'];
    public function is($role)
    {   
        if($role == Auth::user()->role){
            return true;
        }
        else{
            return false;
        }
    }
    public $timestamps = false;

}
