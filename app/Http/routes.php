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

Route::get('/', 'PagesController@index');

Route::get('/istek', 'IstekController@show');

Route::post('/istek', 'IstekController@store');

Route::get('/destek', 'DestekController@show');

Route::post('/destek', 'DestekController@store');

Route::get('/haqqimizda', 'PagesController@haqqimizda');

Route::get('/profil', 'PagesController@profil');

Route::post('/profil', 'PagesController@update'); //yenilik

Route::get('/desteklerim', 'DestekController@desteklerim');

Route::get('/isteklerim', 'IstekController@isteklerim');

Route::get('/elaqe', 'PagesController@elaqe');

Route::get('/single/{id}', 'PagesController@single');

Route::get('/desteksiyahisi', 'PagesController@desteklist');

Route::get('/desteksiyahisi', 'PagesController@desteklist');//yeni

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/alfagen', 'AdminController@index');
Route::get('/lists', 'AdminController@lists');

Route::get('/isteklist', 'AdminController@isteklist');
Route::get('/desteklist', 'AdminController@desteklist');
Route::get('/userlist', 'AdminController@userlist');
Route::get('/activate/{id}', 'AdminController@activate');
Route::get('/deactivate/{id}', 'AdminController@deactivate');
