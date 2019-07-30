<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;
use App\Publicity;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // fuerzo logout
        Auth::logout();

        $data['events']     = Event::getEventsInHome();
        $data['banners']    = Event::getBanners();
        $data['categories'] = Category::getToShowInHome();
        $data['publicity']  = Publicity::getPublicity();

        return view( 'newhome', $data );
    }
}
