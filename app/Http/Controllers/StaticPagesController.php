<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{


    function terminos()
    {
        return view('terminos');
    }


}
