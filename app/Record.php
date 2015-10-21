<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = ['doctor_id','patient_id','bed_id','visit_type','symptoms','findings','medical_advice'];


    public function bed(){
    	return $this->belongsTo('App\Bed');
    }
    public function doctor(){
    	return $this->belongsTo('App\Doctor');
    }

    public function getRecord($id)
    {
    	$record = Record::findOrFail($id);
    	return $record;
    }
}
