<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $table = 'patients';
    protected $fillable = ['patientid','plname','pfname','pmname','paddress','pbirth','pcontact','regdate'];   
    

    public function fullname($id){

    	$patient = \App\Patient::select(\DB::raw("CONCAT(pfname,' ', pmname,' ',plname) AS full_name")
        )->where('id','=',$id)->lists('full_name')->first();

        return $patient;
    }

    public function record(){
    	//get all record
    	return $this->hasMany('App\Record');
    }

    public function getRecord($id){
    	//to get 1 specific record    	
    	$record = Record::findOrFail($id);
    	return $record;
    }

    // public function getRecord($id)
    // {	
    // 	// $record = \App\Record::where('patient_id','=',$this->id)
    // 	// ->where('id','=',$id)->first();
    // 	// $record = $this->records()->get();
    // 	// dd($record);
    // 	$record = $this->records()->getRecord();
    // 	dd($record);
    // }
    public function user()
    {
    	return $this->hasOne('App\User');
    }

    
    
}
