<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';


    public function Events()
    {
        return $this->belongsToMany( Event::class, 'events_categories' );
    }
}
