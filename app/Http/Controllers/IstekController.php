<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IstekController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function show(){
      return view('pages.istek');
    }
}
