<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class AllEventsController extends Controller
{


    public function index()
    {

        $data['events']     = Event::getAllEvents();
        // $data['banners']    = Event::getBanners();
        // $data['categories'] = Category::getToShowInHome();
        // $data['publicity']  = Publicity::getPublicity();

        return view( 'events', $data );
    }


}
