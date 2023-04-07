<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Log;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class SettleController extends Controller
{
  public function getIndex()
  {
    $ip = $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    if($ip == '192.168.10.1' || $ip == '210.164.6.67' || $ip == '202.221.139.50'){
      $status = Input::get('status');
      if($status == '02'){
        $this->createApplication($status);
      }
    }
    // $this->createLog($ip,$user_agent);
    return view('settle.index');
  }
  private function createApplication($status)
  {
    // dd($status);
    $bank = new Bank;
    $bank->status = $status;
    $bank->save();
  }
  private function createLog($ip,$user_agent)
  {
    $logs = new Log;
    $logs->ip = $ip;
    $logs->user_agent = $user_agent;
    $logs->save();
  }
}
