<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Event;

Route::get('testing', function ()
{
    // $events = DB::table('events')->get();


    $event = App\Event::findOrFail(1);

    // $images = App\EventImage::findOrFail(1);
    $images = App\EventImage::where('event_id', $event->id)->get();
    dd($images);

    // dd($event->images);

    foreach ($event->images AS $image)
    {
        echo $image->file . '<br />';
    }

    dd('FIN');


    dd($event->categories);
    // dd($event->userZone->name);
    // dd($event->userCoord->name);

    // $places = App\Place::all();

    // dd($places[0]->events());



    return true;
});

Route::get('/', 'HomeController@index');

Route::get('/eventos', 'AllEventsController@index');

Route::get('/evento/{url}', 'EventController@show')->middleware('auth');;



Route::get('/buscar', function () {
    return view('search');
})->name('buscar');


// Route::get('/eventos', function () {
//     return view('events');
// })->name('eventos');;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/terminos-condiciones', 'StaticPagesController@terminos')->name('terminos');

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');


