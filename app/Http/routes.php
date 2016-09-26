<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Elan;
use App\Elantype;
use App\User;
use App\City;



Route::get('/test/{id}',function($id)
{
      $data=Elan::find($id);
      return $data->qarsiliqlar;
});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/istek', 'IstekController@show');

Route::get('/destek', 'DestekController@show');

Route::get('/haqqimizda', 'PagesController@haqqimizda');

Route::get('/profil', 'PagesController@profil');

Route::get('/desteklerim', 'PagesController@desteklerim');

Route::get('/ehtiyaclarim', 'PagesController@ehtiyaclarim');

Route::get('/elaqe', 'PagesController@elaqe');

Route::get('/single', 'PagesController@single');

Route::get('/desteksiyahisi', 'PagesController@desteklist');

Route::auth();

Route::get('/home', 'HomeController@index');
