<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationNormal extends Model
{

    protected $table = 'locations_normal';


    public function event()
    {
        return $this->belongsTo( 'App\Event' );
    }
}
