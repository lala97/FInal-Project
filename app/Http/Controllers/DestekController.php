<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
class DestekController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');

  }
    public function show(){
      return view('pages.destek');
    }
    public function store(Request $req){

        Auth::user()->elanlar()->create($req->all());
        return back();
    }
}
