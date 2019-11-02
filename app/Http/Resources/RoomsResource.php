<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'roomname'=> $this->room_name,
            'roomtype'=> $this->room_type,
            'roomprice'=> $this->room_price,
            'roomstatus' => $this->room_status,
            'hotel_name'=> $this->getHotelName(),
            ];
    }
}
