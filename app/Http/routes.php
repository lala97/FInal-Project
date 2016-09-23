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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/istək', 'PagesController@istek');

Route::get('/dəstək', 'PagesController@destek');

Route::get('/haqqımızda', 'PagesController@haqqimizda');

Route::get('/əlaqə', 'PagesController@elaqe');

Route::get('/single', 'PagesController@single');

Route::get('/dəstəksiyahısı', 'PagesController@desteklist');

Route::get('/profil', 'PagesController@profil');

Route::get('/qatqi', 'PagesController@qatqi');

Route::get('/qeyd', 'PagesController@qeyd');

