<?php

namespace App\Model;

use App\Model\Hotels;
use Illuminate\Database\Eloquent\Model;

class Hoteliers extends Model
{
    //
    public function hotels(){

    	return $this->belongsTo(Hotels::class);
    	
    }
}
