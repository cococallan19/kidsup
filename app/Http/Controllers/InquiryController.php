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

class InquiryController extends Controller
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

    public function getIndex() {
      $schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
      return view('inquiry.index')
           ->with(compact('schools'));
    }

    public function getIndexDefaultValue(Request $request) {
      $req = $request->all();

      //スクールリストを取得 ※除外すべきものは除外
      if(isset($req['exclude_school'])){
        $exclude_school = explode(',',$req['exclude_school']);
        $schools = School::where('status', 'public')->whereNotIn('id',$exclude_school)->orderBy('published_at','desc')->get();
      } else {
        $schools = School::where('status', 'public')->orderBy('published_at','desc')->get();
      }

      return view('inquiry.index')
           ->with(compact('schools'))
           ->with(compact('req'))
         ;
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
      // データをメールで送信へ
      // $this->sendInquiryMail($mailer,$data);
      //
      // \Session::flash('flash_message', 'メッセージを送信しました。');
      // return redirect('/');

      return view('inquiry.confirm')->with(compact('data'));
    }

    public function postComplete(Mailer $mailer,Request $request)
    {
      $data = $request->all();
      $schools = School::all();

      //教室名をキーに、メールアドレスリストを生成
      $sendScoolEmail = array();
      foreach($schools as $row){
        $sendScoolEmail += array('KidsUP'.$row->school_name.'校'  => $row->email);
      }
      $sendScoolEmail += array('まだ決まっていない' => 'hq@kids-up.jp');

      if(isset($data['action'])){
        return redirect('/inquiry')->withInput();
      } else {
        //問合せデータをテーブルに
        $data['school_name'] = $data['school'];
        //問合せスクールのid
        if($data['school'] == 'まだ決まっていない'){
          $data['school_id'] = '9999';
        } else {
          $schoolNameDb = str_replace('KidsUP', '', $data['school']);
          $schoolNameDb = str_replace('校', '', $schoolNameDb);
          $school = School::where('school_name',$schoolNameDb)->first();
          if($school){
            $data['school_id'] = $school->id;
          }
        }

        $data['tel']   = Library::format_phone_number($data['tel']);
        $data['birth'] = Library::formatYmdString($data['birth']); //2018-04-01形式
        $data['age']   = Library::grade($data['birth']); //今年何歳になるか？
        $inquiry = new Inquiry;
        $inquiry->fill($data)->save();

        // データをメールで送信へ
        $data['sendmail'] = $sendScoolEmail[$data['school']];
        //お客様へ自動返信 + スクールへ通知
        $this->sendInquiryMail($mailer,$data);
        \Session::push('entry', 'complete');
        return redirect('/inquiry/complete');
      }
    }

    public function getComplete()
    {
      $entry = \Session::get('entry');

      if($entry[0] == 'complete'){
          \Session::forget('entry');
          return view('inquiry.complete');
        } else {
          return redirect('/');
        }


    }

    //自動メール返信
    private function sendInquiryMail(Mailer $mailer, $data)
      {
          //お客様へ通知
          $mailer->send(
              array('text' => 'emails.inquiry'),
              $data ,
              function($message) use ($data) {
                  $message->from('hq@kids-up.jp', 'KidsUP開校準備室');
                  $message->to($data['email'], $data['name'])->subject('【'.$data['school'].'】お問い合わせありがとうございます');
              }
          );

          //スクールへ通知
          $mailer->send(
              array('text' => 'emails.inquiry_to_school'),
              $data ,
              function($message) use ($data) {
                  $message->from('hq@kids-up.jp', 'KidsUP開校準備室');
                  $message->to($data['sendmail'] , $data['school'])->cc(env('MAIN_MAIL'))->subject('【'.$data['school'].'】お問い合わせがありました');
              }
          );
      }

    public function test(){

      $url = 'kiWO=&,+-pa2e%3FSQ';
      $test = urlencode($url);
      dd($test);
    }



}
