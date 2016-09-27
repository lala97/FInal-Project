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

    public function isteklerim(){
      $istekler = Elan::all();
    return view('pages.profilqeyd',compact('istekler'));
    }

    public function store(Request $req){
      $this->validate($req, [
          'title' => 'required|max:255',
          'lat' => 'required',
           'lng' => 'required',
    ]);

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

      // $elan= new Elan;
      // $elan->create($req->all());
      //   return back();
       Auth::user()->elanlar()->create($data);
       return redirect('/isteklerim');
      }
}
