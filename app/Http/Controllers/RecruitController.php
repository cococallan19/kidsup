<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecruitController extends Controller
{
  public function getMain() {
    return view('recruit.main');
  }

  public function getBilingual() {
    return view('recruit.bilingual');
  }
  public function getBusDriver() {
    return view('recruit.bus-driver');
  }
  public function getBusStaff() {
    return view('recruit.bus-staff');
  }
  public function getNative() {
    return view('recruit.native');
  }
  public function getSchoolManager() {
    return view('recruit.school-manager');
  }
}
