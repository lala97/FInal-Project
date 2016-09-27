<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
  public function index()
  {
     return view('admin.layout');
  }

  public function list()
  {
     return view('admin.index');
  }
  public function desteklist()
  {
     return view('admin.desteklist');
  }
  public function isteklist()
  {
     return view('admin.isteklist');
  }
  public function userlist()
  {
     return view('admin.userlist');
  }
}
