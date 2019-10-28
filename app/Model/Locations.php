<?php

namespace App\Model;

use App\Model\Hotels;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    //
    public function hotels(){

    	return $this->hasMany(Hotels::class, "location_id");
    }
}
