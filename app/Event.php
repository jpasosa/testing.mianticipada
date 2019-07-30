<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;

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

    static function getEventsInHome()
    {
        try {
            $events = Event::where('active', true)
                                ->whereDate('finishdate', '>=', date('Y-m-d'))
                                ->inRandomOrder()
                                ->take(6)
                                ->get();
        } catch (Illuminate\Database\QueryException $e) {
            dd($e);
        } catch (PDOException $e) {
            dd($e);
        }

        return $events;
    }

    static function getBanners()
    {
        try {
            $banners = Event::where('active', true)
                                ->whereDate('date', '>=', date('Y-m-d'))
                                ->where('banner', '!=', null)
                                ->inRandomOrder()
                                ->take(6)
                                ->pluck('banner')
                                ->toArray();
        } catch (Illuminate\Database\QueryException $e) {
            dd($e);
        } catch (PDOException $e) {
            dd($e);
        }

        return $banners;
    }

    static function getAllEvents()
    {

        try {
            $events = Event::orderBy('date', 'asc')
                                ->where('active', true)
                                ->whereDate('finishdate', '>=', date('Y-m-d'))
                                ->get();

        } catch (Illuminate\Database\QueryException $e) {
            dd($e);
        } catch (PDOException $e) {
            dd($e);
        }


        return $events;
    }



}
