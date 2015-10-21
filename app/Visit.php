<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = "visits";
    protected $fillable = ['bed_id','patient_id','doctor_id','visit_type','symptoms','findings','medical_advice'];

    public function patient()
    {
    	return $this->belongsTo('App\Patient');
    }

    public function doctor()
    {
    	return $this->belongsTo('App\Doctor');
    }

    public function bed()
    {
    	return $this->belongsTo('App\Bed');
    }

    public function getTotalDue()
    {
    	// $start = $this->bed->created_at;
    	// $end = \Carbon\Carbon::now();
    	$multiplier = $this->created_at->diffInDays(\Carbon\Carbon::now());
    	
    	$rate = $this->rate_per_night;
    	$total = $multiplier * $rate;

    	if($total == 0){
    		$total = 1000; // consultation fee
    	}
    	return $total;
    }
}
