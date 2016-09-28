<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Elan;

use Auth;

class DestekController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');

  }
    public function show(){
      $sonEls=Elan::orderBy('created_at','desc')->first();
      // dd($sonEls);
      return view('pages.destek', compact('sonEls'));
    }

    public function desteklerim(){
      $destekler = Elan::all();
    return view('pages.profilqatqi',compact('destekler'));
    }
    public function store(Request $req){

        $direction='image';
      $filetype=$req->file('image')->getClientOriginalExtension();
      $filename=rand(11111,99999).'.'.$filetype;
      $req->file('image')->move(public_path('image'),$filename);

      $data = [
            'type_id'=>$req->type_id,
            'title'=>$req->title,
            'about'=>$req->about,
            'location'=>$req->location,
            'lat'=>$req->lat,
            'lng'=>$req->lng,
            'name'=>$req->name,
            'phone'=>$req->phone,
            'email'=>$req->email,
            'image'=>$filename,
            'org'=>$req->org,
            'nov'=>$req->nov
          ];

        Auth::user()->elanlar()->create($data);
        return redirect('/desteklerim');
    }
}
