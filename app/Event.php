<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $table = 'events';


    function place()
    {
        return $this->belongsTo('App\Place');
    }

    function userCreate()
    {
        return $this->belongsTo( User::class, 'usercreate_id');
    }

    function userCoord()
    {
        return $this->belongsTo( User::class, 'usercoord_id');
    }

    function userZone()
    {
        return $this->belongsTo( User::class, 'userzone_id');
    }

    function categories()
    {
        return $this->belongsToMany( Category::class, 'events_categories');
    }

    function images()
    {
        return $this->hasMany( EventImage::class );
    }

    function locationsNormal()
    {
        return $this->hasMany( LocationNormal::class );
    }



}
