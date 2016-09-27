<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Elan;
use App\User;

class AdminController extends Controller
{
  public function index()
  {
     return view('admin.layout');
  }

  public function lists()
  {
     return view('admin.index');
  }

  public function desteklist()
  {
    $destekler=Elan::all();
     return view('admin.desteklist',compact('destekler'));
  }

  public function isteklist()
  {
     $istekler=Elan::all();
     return view('admin.isteklist',compact('istekler'));
  }

  public function userlist()
  {
     $users=User::all();
     return view('admin.userlist', compact('users'));
  }

   public function activate($id)
  {
    $status=Elan::find($id);
    $status->status='1';
    $status->save();
    return back();
  }

   public function deactivate($id)
  {
    $status=Elan::find($id);
    $status->status='0';
    $status->save();
    return back();
  }
}
