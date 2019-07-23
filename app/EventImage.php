<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{

    protected $table = 'events_images';



    public function event()
    {
        return $this->belongsTo( Event::class );
    }
}
