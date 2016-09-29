<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
use App\Elan;
use App\User;
use Auth;


class PagesController extends Controller
{
  public function index()
  {
      $datas=Elan::paginate(8);
      $datamaps=Elan::all();
      return view('pages.index',compact('datas','datamaps'));
  }

    public function haqqimizda(){
      return view('pages.haqqimizda');
    }

    public function elaqe(){
      return view('pages.elaqe');
    }

    public function single($id){
      $single = Elan::find($id);
      return view('pages.single',compact('single'));
    }

    public function desteklist()  //yeni
    {
      $desteklist=Elan::paginate(24);
      return view('pages.ds',compact('desteklist'));
    }
        public function isteklist()  //yeni
    {
      $isteklist=Elan::paginate(24);
      return view('pages.isteklist',compact('isteklist'));
    }
     public function profil(){
       $city=City::all();
    return view('pages.profil', compact('city'));
    }

        public function avatar(Request $req)
    {
      $direction='image/';
      $filetype=$req->file('image')->getClientOriginalExtension();
      $filename=rand(11111,99999).'.'.$filetype;
      $req->file('image')->move(public_path('image/'),$filename);

      $data = [
            'avatar'=>$filename
          ];

       Auth::user()->update($data);
       return redirect('/profil');
      }



    public function update(Request $req) //yeniiiiii
    {
      Auth::user()->update($req->all());
      return redirect('/profil');
    }
    public function desteklerim(){
    return view('pages.profilqatqi');
    }


}
