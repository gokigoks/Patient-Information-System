<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Visit;

class Room extends Model
{	
	
	protected $table = 'rooms';

	protected $fillable  = ['floor','section','bed_type','rate_per_night','capacity'];

	
	public function beds()
	{
	    return $this->hasMany('App\Bed');
	}


	public function vacant(){
	
		$ids = \App\Visit::lists('bed_id');
		
		$beds = $query->select(\DB::raw("CONCAT(bed_type,'bed type : ',floor,'th floor ',section,' section ',rate_per_night, 'per night' ) AS full_name, id"
        ))->whereNotIn('id',$ids)->lists('full_name', 'id');

		$beds = 

    	return $beds;		
	}

}
