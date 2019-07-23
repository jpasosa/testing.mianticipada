<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

    protected $table = 'places';

    function events()
    {
        return $this->hasMany('App\Event');
    }
}
