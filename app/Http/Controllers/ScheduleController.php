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

class ScheduleController extends Controller
{
  public function index ()
  {
      $hello = 'Hello,World!';
      $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

      return view('index', compact('hello', 'hello_array'));
  }


}
