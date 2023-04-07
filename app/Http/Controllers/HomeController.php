<?php

namespace App\Http\Controllers;

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

use App\Recruit;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use Illuminate\Contracts\Mail\Mailer;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\App;

use Carbon\Carbon;

class HomeController extends Controller
{

  protected function validator(array $data)
     {
         return Validator::make($data, [
             'name' => 'required|max:255',
             'number' => 'required|max:255',
             'email' => 'required|email|max:255',
             'subject' => 'required',
             'body' => 'required|max:255',
         ]);
     }

  public function getIndex()
  {
    $object = new EventController();
    $event = $object->getIndex();
    $event = $event['data']['items'];

    $timeline = array();
    $school = array();
    $location = '';
    $i = 0;

    $week = array(
      0 => '日',
      1 => '月',
      2 => '火',
      3 => '水',
      4 => '木',
      5 => '金',
      6 => '土',
    );

    for ($i=0; $i < count($event); $i++) {
      $school[] = $event[$i]['summary'];
    }

    $school = array_merge(array_unique($school));
    foreach ($school as $key => $value) {
      $timeline = array();
      for($i=0; $i < count($event); $i++) {
        if($event[$i]['summary'] == $value){
          //項目の修正
          if(isset($event[$i]['location'])){
              $location = str_replace('日本','',$event[$i]['location']);
          }
          $date = $this->formatDate($event[$i]['start']);
          $orign = $date->month . '月' . $date->day . '日（' . $week[$date->dayOfWeek] . '）';
          $orign .= '<span>' . $date->format('H:i') . '</span>';
          // dd($orign);
          $timeline[$i]['timeline'] = $orign;
          $timeline[$i]['url'] = $date->format('YmdHi');
          $timeline = array_merge($timeline);
        }
      }
      $school[$key] = array('title' => $value , 'location' => $location, 'timeline' => $timeline);
    }

    $school_list = (new SchoolController)->getSchoolList(1, true);
    $school_list_all = (new SchoolController)->getSchoolList(10, true);
    $news_list = (new NewsController)->getNewsListAll(3, true);

    $event_list = (new NewsController)->getNewsList(1, 2, true);
    $seasonal_list = (new NewsController)->getNewsList(1, 3, true);
    $top_banner = (new NewsController)->getTopBanner();

    //短期講習
    $seasonal_sub_count = 0;
    if(count($seasonal_list) > 0 && !empty($seasonal_list[0]->sub_image) ){
      $seasonal_list[0]->sub_image = unserialize($seasonal_list[0]->sub_image);
      foreach($seasonal_list[0]->sub_image as $seasonal_sub){
        if(!empty($seasonal_sub)){
          $seasonal_sub_count = $seasonal_sub_count + 1; //サブイメージカウント
        }
      }
    }
    $seasonal_mobile_count = 0;
    if(count($seasonal_list) > 0 && !empty($seasonal_list[0]->mobile_image) ){
      $seasonal_list[0]->mobile_image = unserialize($seasonal_list[0]->mobile_image);
      foreach($seasonal_list[0]->mobile_image as $seasonal_sub){
        if(!empty($seasonal_sub)){
          $seasonal_mobile_count = $seasonal_mobile_count + 1; //サブイメージカウント
        }
      }
    }

    //イベント
    $event_sub_count = 0;
    if(count($event_list) > 0 && !empty($event_list[0]->sub_image) ){
      $event_list[0]->sub_image = unserialize($event_list[0]->sub_image);
      foreach($event_list[0]->sub_image as $event_sub){
        if(!empty($event_sub)){
          $event_sub_count = $event_sub_count + 1; //サブイメージカウント
        }
      }
    }
    $event_mobile_count = 0;
    if(count($event_list) > 0 && !empty($event_list[0]->mobile_image) ){
      $event_list[0]->mobile_image = unserialize($event_list[0]->mobile_image);
      foreach($event_list[0]->mobile_image as $event_sub){
        if(!empty($event_sub)){
          $event_mobile_count = $event_mobile_count + 1; //サブイメージカウント
        }
      }
    }
    //TOPバナー
    $top_sub_count = 0;
    if(count($top_banner) > 0 && !empty($top_banner->sub_image) ){
      $top_banner->sub_image = unserialize($top_banner->sub_image);
      foreach($top_banner->sub_image as $top_sub){
        if(!empty($top_sub)){
          $top_sub_count = $top_sub_count + 1; //サブイメージカウント
        }
      }
    }
    $top_mobile_count = 0;
    if(count($top_banner) > 0 && !empty($top_banner->mobile_image) ){
      $top_banner->mobile_image = unserialize($top_banner->mobile_image);
      foreach($top_banner->mobile_image as $top_sub){
        if(!empty($top_sub)){
          $top_mobile_count = $top_mobile_count + 1; //サブイメージカウント
        }
      }
    }
    return view('index')
         ->with('school',$school)
         ->with(compact('school_list'))
         ->with(compact('seasonal_list'))
         ->with(compact('event_list'))
         ->with(compact('news_list'))
         ->with(compact('seasonal_sub_count'))
         ->with(compact('seasonal_mobile_count'))
         ->with(compact('event_sub_count'))
         ->with(compact('event_mobile_count'))
         ->with(compact('top_banner'))
         ->with(compact('top_sub_count'))
         ->with(compact('top_mobile_count'))
         ->with(compact('school_list_all'));
  }

  public function formatDate($data)
  {

    $year = substr($data['dateTime'], 0, 4);
    $month = substr($data['dateTime'], 5, 2);
    $day = substr($data['dateTime'], 8, 2);
    $hour = substr($data['dateTime'], 11, 2);
    $minute = substr($data['dateTime'], 14, 2);

    $date = Carbon::create($year, $month, $day, $hour, $minute, 0);
    // $date->dayOfWeek





    return $date;
  }

  public function postIndex(Mailer $mailer,Request $request)
  {
    $validator = $this->validator($request->all());
    if ($validator->fails()) {
          $this->throwValidationException(
              $request, $validator
          );
      }
    $data = $request->all();
    // dd($data);
    $this->sendInquiryMail($mailer,$data);

    \Session::flash('flash_message', 'メッセージを送信しました。');
    return redirect('/inquiry');
  }

  private function sendInquiryMail(Mailer $mailer, $data)
    {
        $mailer->send(
            array('text' => 'emails.inquiry'),
            $data ,
            function($message) use ($data) {
                $message->from('hq@kids-up.jp', 'KidsUP開校準備室');
                $message->to($data['email'], $data['name'])->bcc('hq@kids-up.jp')->subject('【KidsUP】お問い合わせありがとうございます');
            }
        );
    }

  public function getModel()
  {
    return view('model.index');
  }

  public function postModel(Mailer $mailer)
  {
    $data = Input::all();
    // $data = $request->all();
    // dd($data);
    $rules = array(
        'file' => 'mimes:jpeg,bmp,png,pdf,xlsx,xlsm,xls,doc,docx|max:30000',
        'name' => 'required|max:255',
        'number' => 'required|max:255',
        'email' => 'required|email|max:255',
        'body' => 'required|max:255',
    );
    $validation = Validator::make($data, $rules);

    // dd(Input::file('file'));

    $name = md5(sha1(uniqid(mt_rand(), true))).'.'.Input::file('image')->getClientOriginalExtension();
    $upload = Input::file('image')->move('uploads', $name);
    // dd($upload);
    $this->saveModel($data,$name);
    $this->sendCompleteMail($mailer,$data);

    return redirect('model/complete');
  }

  public function getComplete()
  {
    return view('model.complete');
  }

  private function saveModel($data,$name)
  {
    $file = new Recruit();
    $file->plans = serialize($data['plans']);
    $file->name = $data['name'];
    $file->kana = $data['kana'];
    $file->parents = $data['parents'];
    $file->number = $data['number'];
    $file->email = $data['email'];
    $file->image = $name;
    $file->body = $data['body'];

    $file->save();

  }

  private function sendCompleteMail(Mailer $mailer,$data)
  {
    $mailer->send(
        array('text' => 'emails.model'),
        $data ,
        function($message) use ($data) {
            $message->from('hq@kids-up.jp', 'KidsUP開校準備室');
            $message->to($data['email'], $data['name'])->bcc('hq@kids-up.jp')->subject('【KidsUP】ご応募が完了いたしました。');
        }
    );
  }
}
