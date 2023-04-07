<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{



  public function getIndex()
  {
    return view('admin.home');
  }

  public function getSchool()
  {
    return view('admin.school.create');

  }

  public function getLogout()
  {
    \Auth::logout();
    return redirect()->back();
  }
}
