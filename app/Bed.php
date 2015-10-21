<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
	protected $table = 'beds';

    protected $fillable  = ['floor','section','bed_type','rate_per_night'];

    public function scopeVacant($query){
    	
    	$ids = \App\Visit::lists('bed_id');
		//dd($ids);
		$beds = $query->select(\DB::raw("CONCAT(bed_type,'bed type : ',floor,'th floor ',section,' section ',rate_per_night, 'per night' ) AS full_name, id"
        ))->whereNotIn('id',$ids)->lists('full_name', 'id');
    	return $beds;
    }

    public function getBed(){

        $bed = bed::select(\DB::raw("CONCAT(floor,'th floor ', section) AS full_name")
        )->where('id','=',$this->id)->lists('full_name')->first();

        return $bed;
    }

    public function room(){
        return $this->belongsTo('App\Bed');
    }
    

}
 