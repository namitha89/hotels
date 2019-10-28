<?php

namespace App\Http\Resources\Hotels;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function getBadge(){

        $badge = 'green';
        if($this->reputation <= 500){
            $badge = 'red';
        }elseif ($this->reputation > 500 and $this->reputation <= 799) {
            $badge = 'yellow';
        }
        return $badge;
    }

    public function toArray($request)
    {
        

       
        return [
            'id'=> $this->id,
            'name'=> $this->hotel_name,
            'rating'=>$this->hotel_rating,
            'category'=>$this->hotel_category,
            'location'=>array(
                "id"=> $this->locations->id,
                "city"=> $this->locations->city,
                "state"=> $this->locations->state,
                "country"=> $this->locations->country,
                "zip_code"=> $this->locations->postalcode,
                "address"=> $this->locations->address,
            ),
            'image'=>$this->image,
            'reputation'=>$this->reputation,
            'reputationBadge'=>$this->getBadge(),
            'price'=>$this->getMinimumRoomPrice(),
            "availability"=>$this->getAvailability(),
            ];
    }
}
