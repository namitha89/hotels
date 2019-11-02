<?php

namespace App\Model;

use App\Model\Hotels;
use DB;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //
    protected $fillable = [
        'room_name','room_type','room_price','hotels_id','room_status'
    ];

    public function hotels()
    {
        return $this->belongsTo(Hotels::class);
    }

    public function getHotelName()
	{
		$hotel = DB::table('hotels')->leftJoin('rooms', 'hotels.id', '=', 'rooms.hotels_id')
			->where('hotels.id','=',$this->hotels_id)
			->select('hotel_name')
            ->get();
        $hotel_name = $hotel[0]->hotel_name;
        return $hotel_name;

	}
}
