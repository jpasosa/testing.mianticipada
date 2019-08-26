<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Auth;

class EventController extends Controller
{

    function __construc()
    {
        $this->middleware('auth');
    }



    function show( $url )
    {

        // if (Auth::check()) {
        //     dd('usuario logueado');
        // } else {
        //     dd('usuario no logueado');
        // }


        try {
            $event = Event::where('active', true)
                                ->where('url', $url)
                                ->get();
        } catch (Illuminate\Database\QueryException $e) {
            dd($e);
        } catch (PDOException $e) {
            dd($e);
        }

        $data['event'] = isset($event[0]) ? $event[0] : '';




        $data['first_locations']= $event[0]->locationsNormal[0]; // luego hay que utilizar ajax para realizar bien esto.
        $data['totaltickets']   = 450;
        $data['serviceprice']   = 60;
        $data['total']          = 510;

        return view( 'detailevent', $data );

    }
}
