<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //
    public function hotels()
    {
        return $this->belongsTo('App\Model\Hotels');
    }
}
