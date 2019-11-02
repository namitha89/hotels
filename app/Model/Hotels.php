<?php

namespace App\Model;

use App\Model\Locations;
use App\Model\Rooms;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    //
    protected $fillable = [
        'hotel_name','hotel_rating','hotel_category','image','reputation','hotelier','location_id'
    ];

    public function locations(){

    	return $this->belongsTo('App\Model\Locations', "location_id");
    }

    public function rooms(){

    	return $this->hasMany('App\Model\Rooms',"hotels_id");
    }

    public function getMinimumRoomPrice(){

        return $this->rooms()->min('room_price');
        
    }

    public function getAvailability(){

    	return $this->rooms()->where('room_status','available')->count();
    }
}
