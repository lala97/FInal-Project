<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Elan;
use Auth;
class IstekController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function show(){
      return view('pages.istek');
    }

    public function store(Request $req){
      $this->validate($req, [
          'title' => 'required|unique:posts|max:255',
          'lat' => 'required',
           'lng' => 'required',
    ]);

      // dd($req->all());
      $elan= new Elan;
      $elan->create($req->all());
        return back();
    }
}
