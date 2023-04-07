<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\School;
use App\SchoolMeta;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Validator;

class SchoolController extends Controller
{
  protected function validator(array $data)
     {
         return Validator::make($data, [
             'published_at' => 'required',
             'status' => 'required',
             'main_image' => 'required',
             'school_name' => 'required|max:255',
             'number' => 'required',
             'direct_number' => 'required',
             'email' => 'required',
             'zip' => 'required',
             'pref' => 'required|max:12',
             'addr01' => 'required|max:7',
             'addr02' => 'required',
             'lat' => 'required',
             'lng' => 'required',
             'business_start' => 'required',
             'business_end' => 'required',
         ]);
     }

  public function getIndex()
  {

    $published = \Input::get('published');
    $keyword = \Input::get('keyword');

    if(!empty($published) or !empty($keyword)) {

      //どちらか入ってる
      if($published == 'active'){
        $schools = School::where('status','public')
                  ->where('school_name' , 'like' , '%'.$keyword.'%')
                  ->orderBy('created_at', 'desc')->paginate(10);

      } else {
        $schools = School::where('school_name' , 'like' , '%'.$keyword.'%')
                  ->orderBy('created_at', 'desc')->paginate(10);
      }
    } else {
      $schools = School::orderBy('created_at', 'desc')->paginate(10);
    }



    return view('admin.school.index')->with('schools',$schools);
  }
  public function getEdit($id)
  {
    $time = new Carbon(Carbon::now());
    $date = date_format($time , 'Y-m-d');

    $school = School::where('id', $id)->with('school_meta')->first();
    if(!is_null($school)){
      $school['sub_image'] = unserialize($school['sub_image']);
      $school['keywords'] = unserialize($school['keywords']);

      foreach ($school->school_meta as $key => $value) {
        $school[$value->meta_key] = $value->meta_value;
      }

      return view('admin.school.edit')->with('date', $date)->with('school',$school);
    } else {
      return redirect('/404');
    }


  }

  public function postEdit(Request $request,$id)
  {
    $validator = $this->validator($request->all());
    if ($validator->fails()) {
          $this->throwValidationException(
              $request, $validator
          );
    }

    $data = $request->all();

    $this->createSchool($data,$id);


    return redirect('/school/edit/'.$id);
  }

  public function getCreate()
  {
    $time = new Carbon(Carbon::now());
    $date = date_format($time , 'Y-m-d');
    return view('admin.school.create')->with('date', $date);
  }

  public function postCreate(Request $request)
  {
    $validator = $this->validator($request->all());
    if ($validator->fails()) {
          $this->throwValidationException(
              $request, $validator
          );
    }
    $data = $request->all();

    $id = null;
    $school = $this->createSchool($data,$id);
    return redirect('/school/edit/' . $school->id);

  }

  private function createSchool($data,$id)
  {
    if( $id == null ){
      $school = new School;
    } else {
      $school = School::where('id',$id)->first();
    }
    $school->status = $data['status'];
    $school->main_image = $data['main_image'];
    $school->sub_image = serialize($data['sub_image']);
    $school->school_name = $data['school_name'];
    $school->number = $data['number'];
    $school->direct_number = $data['direct_number'];
    $school->email = $data['email'];
    $school->zip = $data['zip'];
    $school->pref = $data['pref'];
    $school->addr01 = $data['addr01'];
    $school->addr02 = $data['addr02'];
    $school->addr03 = $data['addr03'];
    $school->lat = $data['lat'];
    $school->lng = $data['lng'];
    $school->business_start = $data['business_start'];
    $school->business_end   = $data['business_end'];
    $school->keywords = serialize($data['keywords']);
    $school->contents = $data['contents'];

    $school->published_at = $this->trimDate($data['published_at']);
    $school->save();

    $this->createMeta($school,$data,$id);

    return $school;
  }

  private function createMeta($school,$data,$id)
  {
    $meta_key = array('access','trafic','area');
    foreach ($meta_key as $value) {
      if($id === null){
        $school_meta = new SchoolMeta;
        $school_meta->school_id = $school->id;
        $school_meta->meta_key = $value;
        $school_meta->meta_value = $data[$value];
        $school_meta->save();
      } else {
        $school_meta = SchoolMeta::where('school_id',$school->id)
                  ->where('meta_key' , $value)->first();
        $school_meta->meta_value = $data[$value];
        $school_meta->save();
      }
    }

  }

  private function trimDate($date)
  {
    if($date === date("Y-m-d H:i:s", strtotime($date)) or $date === '0000-00-00 00:00:00') {
      return $date;
    } else {
      $dates = explode('-', $date);
      return Carbon::create($dates[0] , $dates[1], $dates[2], 10, 0, 0);
    }

  }
}
