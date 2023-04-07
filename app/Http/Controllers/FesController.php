<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Mail\Mailer;
use App\School;
use App\Inquiry;
use Carbon\Carbon;
use App\Http\Library\Library;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\App;

class FesController extends Controller
{
  
  protected function validator(array $data)
     {
         return Validator::make($data, [
             'school'     => 'required',
             'name'       => 'required|max:255',
             'tel'        => 'required|max:255',
             'email'      => 'required|email|max:255',
             'body'       => 'required',
             'year'       => 'required',
             'month'      => 'required',
             'day'        => 'required',
             'name_child' => 'required',
         ]);
     }

    public function summerIndex() {
      $schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.summer');
    }

    public function halloweenIndex() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.halloween');
    }

    public function halloweenEvent() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.online-event');
    }

    public function christmasIndex() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.christmas');
    }

    public function christmasEvent() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.christmas-online');
    }

    public function winterschoolIndex() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.winterschool');
    }

    public function springschoolIndex() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.SpringSchool-2023');
    }

    public function minigpIndex() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.minigp');
    }

    public function setsumeikaiIndex() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.setsumeikai');
    }

    public function chocodayIndex() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.ChocolateDay-2023');
    }

    public function chocodayOnline() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.ChocolateDay-2023-Online');
    }

    public function speechcontestIndex() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.Speech-Contest-2022');
    }

    public function easterIndex() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.easter');
    }
    public function easterOnline() {
      //$schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('festivities.easter-online');
    }

    public function test(){

      $url = 'kiWO=&,+-pa2e%3FSQ';
      $test = urlencode($url);
      dd($test);
    }



}