<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedSpecialty extends Model
{
    //
    protected $table = "medspecialties";

    protected $fillable = ['med_specialty','med_desc'];

    public $timestamps = false;

    public function doctor(){
    	return $this->belongsTo('App\Doctor');
    }
}
