<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;

class PagesController extends Controller
{
    // public function istek(){
    //   return view('pages.istek');
    // }

    // public function destek(){
    //   return view('pages.destek');
    // }

    public function haqqimizda(){
      return view('pages.haqqimizda');
    }

    public function elaqe(){
      return view('pages.elaqe');
    }

    public function single(){
      return view('pages.single');
    }

    public function desteklist(){
      return view('pages.ds');
    }

     public function profil(){
       $city=City::all();
    return view('pages.profil', compact('city'));
    }
    public function desteklerim(){
    return view('pages.profilqatqi');
    }

    public function ehtiyaclarim(){
    return view('pages.profilqeyd');
    }
}
