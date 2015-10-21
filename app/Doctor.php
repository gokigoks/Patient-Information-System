<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $table = "doctors";

    protected $fillable = ['doctor_fname','doctor_mname','doctor_lname','doctor_address','doctor_contact','medspecialty_id'];

    public function specialty(){
    	return $this->hasOne('App\MedSpecialty','id','medspecialty_id');
    }

    public function fullname($id){
    	
    	$doctor = Doctor::select(\DB::raw("CONCAT(doctor_fname,' ', doctor_mname,' ',doctor_lname) AS full_name")
        )->where('id','=',$id)->lists('full_name')->first();

        return $doctor;

    }
}
