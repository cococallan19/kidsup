<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;
use App\SchoolMeta;
use App\Http\Requests;
use App\Http\Library\Library;
use Carbon\Carbon;

class SchoolController extends Controller
{

    public function index()
    {
        $schools = $this->getSchoolList(99, true);
        return view('school.index')->with(compact('schools'));
    }

    public function getSchoolList($length = 99, $html_disp = false)
    {
      if($html_disp){
        //【幼児コースご希望の方はこちら】が名前に含まれるスクールを除外
        $schools = School::where('status', 'public')->where('school_name', 'not like', '%【%')->with('school_meta')->take($length)->orderBy('published_at','desc')->get();
      }else{
        $schools = School::where('status', 'public')->with('school_meta')->take($length)->orderBy('published_at','desc')->get();
      }

      $now = new Carbon();
      foreach ($schools as $key => $school) {
        if(!empty($school['sub_image'])){
          $school['sub_image'] = unserialize($school['sub_image']);
        }
        preg_match('/(.{3})(.{4})/',$school->zip,$match);
        $school->zip = $match[1].'-'.$match[2];

        foreach ($school->school_meta as $key => $value) {
          $school[$value->meta_key] = $value->meta_value;
        }


        $published_at = Carbon::parse($school->published_at);
        $dt2 = $published_at->copy()->addDay(5)->endOfDay();

        if($now->lte($dt2)) {
          $school->publish_at = $published_at->month . '/' . $published_at->day;
        }


      }
      return $schools;
    }

    public function show($id)
    {
        $school = School::where('id', $id)->with('school_meta')->first();
        if(!empty($school['sub_image'])){
          $school_sub_images = unserialize($school['sub_image']);
          $sub_empty_count = 0;

          for ($i=0; $i < count($school_sub_images); $i++) {
            if(empty($school_sub_images[$i])){
              $sub_empty_count++;
            }
          }
          if($sub_empty_count == count($school_sub_images)) {
            $school['sub_image'] = null; //サブイメージが1つもない
          }else {
            $school['sub_image'] = $school_sub_images;
          }
        }
        if(!empty($school['keywords'])){
          $school['keywords'] = unserialize($school['keywords']);
        }

        preg_match('/(.{3})(.{4})/',$school->zip,$match);
        $school->zip = $match[1].'-'.$match[2];

        foreach ($school->school_meta as $key => $value) {
          $school[$value->meta_key] = $value->meta_value;
        }
        return view('school.detail')->with(compact('school'));
    }

    //説明会申込フォーム：都道府県 & 市区町村プルダウン用
    public function getPrefCity()
    {
      //$schools = School::open()->get( ['id','school_name','pref', 'addr01', 'addr02', 'addr03'] );
      $schools = School::open()->get();
      $result = [];
      foreach ($schools as $school) {
        $pref = $school->pref;
        $city = Library::trimCity($school->addr01.$school->addr02);

        if(!isset($result[$pref] ) ){
          $result[$pref] = [];
        }
        if(!in_array($city, $result[$pref]) ){
          $result[$pref][] = $city;
        }
      }
      return json_encode($result);
    }
    //説明会申込フォーム：スクールJSON
    public function getSchoolJson()
    {
      //$schools = School::open()->get( ['id','school_name','pref', 'addr01', 'addr02', 'addr03'] );
      $schools = School::open()->where('school_name', 'not like', '%【%')->get();
      $result = [];
      foreach ($schools as $school) {
        $hash = [];
        $hash['school_name'] = $school->school_name;
        $hash['school_id']   = $school->id;
        $hash['addr01'] = $school->pref . $school->addr01;
        $hash['freeword'] = $hash['school_name'] . $hash['addr01'] . $school->addr02 . $school->addr03;

        $metas = $school->school_meta;

        foreach ($metas as $meta) {
          $hash['freeword'] = $hash['freeword'] . $meta->meta_value;
        }

        $result[] = $hash;
      }
      return json_encode($result);
    }
}
