<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function istek(){
      return view('pages.istek');
    }

    public function destek(){
      return view('pages.destek');
    }

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
}
