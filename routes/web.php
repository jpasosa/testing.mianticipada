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

Route::get('/', function () {
    return view('newhome');
});


Route::get('/buscar', function () {
    return view('search');
})->name('buscar');


Route::get('/eventos', function () {
    return view('events');
})->name('eventos');;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/terminos-condiciones', 'StaticPagesController@terminos')->name('terminos');

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');


