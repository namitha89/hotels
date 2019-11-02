<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LocationsResource extends JsonResource
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
            'city'=> $this->city,
            'state'=> $this->state,
            'country'=> $this->country,
            'zip_code'=> $this->postalcode,
            'address'=> $this->address,
            ];
    }
}
