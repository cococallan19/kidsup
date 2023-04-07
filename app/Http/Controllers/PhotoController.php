<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Session;
use App\Http\Requests;

class PhotoController extends Controller
{
  public function getIndex() {
    return view('photos.index');
  }
  public function postIndex(Request $request) {
    $data = $request->all();
    $password = 'kids0320';
    if($data['password'] == $password) {
      \Session::put('auth', 'login');
      return redirect('/photo/view');
    } else {
      $error = 'パスワードが違います';
      return view('photos.index')->with('error',$error);
    }
  }
  public function getView() {

    $session = \Session::get('auth');
    if($session == 'login'){
      $num = 103;
      return view('photos.view')->with('num',$num);
    } else {
      return redirect('/photo');
    }
  }
  public function getViewLogout() {
    \Session::forget('auth');
    return redirect('/photo');
  }
}
