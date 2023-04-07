<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\School;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Mail\Mailer;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\App;

use Carbon\Carbon;
use App\Reservation;
use App\ReservationMeta;
use App\EventSchedule;
use App\Http\Library\Library;


class EventController extends Controller
{
   public function getIndex(){

   }

  protected function validator(array $data)
     {
         return Validator::make($data, [
             'name'             => 'required|max:255',
             'number'           => 'required|max:255',  //山下TODO 入力形式はハイフンあり？
             'email'            => 'required|email|max:255',
             'name_child'       => 'required',
             'year'             => 'required',
             'month'            => 'required',
             'day'              => 'required',
             'submit_school_id' => 'required', //申込先スクール
             'submit_event_id'  => 'required',  //説明会のevent_id
             'primary_attend'   => 'required',
             'kinder_attend'    => 'required',
         ]);
     }

  protected function validatorReply(array $data)
      {
          return Validator::make($data, [
              'gender'            => 'required',
              'english'           => 'required',  //山下TODO 入力形式はハイフンあり？
              'attendance_detail' => 'required',
              'route'             => 'required',
          ]);
      }

  public function postConfirm(Request $request){
    $validator = $this->validator($request->all());
    $data = $request->all();
    if ($validator->fails()) {
          $this->throwValidationException(
              $request, $validator
          );
      }

    $data['school_name'] = School::where('id', $data['submit_school_id'])->first()->school_name;
    if(!isset($data['trigger'])){
        $data['trigger'] = '';
    }

    $url = parse_url($_SERVER['HTTP_REFERER']);
    $data['referer'] = $url['path']; //遷移元のURLを取得
    return view('event.confirm')
         ->with(compact('data'));
  }

  public function postComplete(Mailer $mailer,Request $request){

    $data = $request->all();
    $submit_school_id = $data['submit_school_id'];

    if(isset($data['action'])){
      return redirect($data['referer'])->withInput();
    } else {

      $data['school_name'] = School::where('id', $data['submit_school_id'])->first()->school_name;

      $data['address'] = School::where('id', $data['submit_school_id'])->first()->pref;
      $data['address'] .= School::where('id', $data['submit_school_id'])->first()->addr01;
      $data['address'] .= School::where('id', $data['submit_school_id'])->first()->addr02;
      $data['address'] .= School::where('id', $data['submit_school_id'])->first()->addr03;

      //生年月日から年齢を計算
      $data['birth'] = Library::formatYmdString($data['birth']); //2018-04-01形式
      $data['age']   = Library::grade($data['birth']); //今年何歳になるか？

      //申し込んだ説明会情報を取得
      $eventSchedule = EventSchedule::where('event_id', $data['submit_event_id'])->first();
      $data['taiken'] = $eventSchedule->taiken;

      //会場のスクール情報
      $data['kaijo'] = School::where('id', $eventSchedule->school_id)->first();

      //entriesテーブルにデータを登録
      $reservation = new Reservation;

//      $date = new Carbon($data['event_date']);
      $reservation->name        = $data['name'];
      $reservation->tel         = Library::format_phone_number($data['number']);
      $reservation->email       = $data['email'];
      $reservation->age         = $data['age'];
      $reservation->birth       = $data['birth'];
      $reservation->name_child  = $data['name_child'];
//      $reservation->attend      = $data['attend'];
      $reservation->kinder_attend = $data['kinder_attend'];
      $reservation->primary_attend = $data['primary_attend'];
      $reservation->start_season = $data['start_season'];
      $reservation->trigger     = $data['trigger'];
      $reservation->body        = $data['body'];
      $reservation->event_id    = $data['submit_event_id'];
      $reservation->school_id   = $data['submit_school_id'];
      $reservation->school_name = $data['school_name_disp_hidden'];
      $reservation->save();

      //カウンターメールからアクセスするためのハッシュID
      $reservation->hash_id = $encrypted = Library::encryptString($reservation->id);
      $reservation->save();
      $data['hash_id'] = $reservation->hash_id;

      $url = parse_url($_SERVER['HTTP_REFERER']);
      $data['referer'] = str_replace($url['path'], '', $_SERVER['HTTP_REFERER']); //ホストURLを取得

      //お客様へ自動返信 + スクールへ通知
      $this->sendEventMail($mailer,$data);
      \Session::push('event', 'complete');

      return redirect('/event/complete');
    }

  }

  public function getComplete()
  {
    $event = \Session::get('event');

    if($event[0] == 'complete'){
        \Session::forget('event');
        return view('event.complete');
      } else {
        return redirect('/');
      }


  }

  private function sendEventMail(Mailer $mailer, $data)
    {
        //参加先スクール情報
        $data['school'] = School::where('id', $data['submit_school_id'])->first();
        //まだ決まっていない　場合への例外対応
        if(!$data['school']){
          $data['school'] = new School();
          $data['school']->direct_number = "0120-378-056";
          $data['school']->email = 'hq@kids-up.jp';
          $data['school']->school_name = 'まだ決まってない';
        }
        $subject = '【KidsUP'.$data['school_name'].'校】説明会予約ありがとうございます';
        if($data['taiken'] == 'off'){
          $subject =  '【KidsUP'.$data['school_name'].'校】説明会予約ありがとうございます';
        }
        $data['subject'] = $subject;
        $mailer->send(
            array('text' => 'emails.event'),
            $data ,
            function($message) use ($data) {
                $message->from('hq@kids-up.jp', 'KidsUPお客様サポート');
                $message->to($data['email'], $data['name'])
                        ->subject($data['subject']);
            }
        );

        //スクール通知用
        $subject = '【'.$data['school']->school_name.'】無料体験予約がありました';
        if($data['taiken'] == 'off'){
          $subject = '【'.$data['school']->school_name.'】説明会予約がありました';
        }

        $mailer->send(
            array('text' => 'emails.event_to_school'),
            $data ,
            function($message) use ($data) {
                $message->from('hq@kids-up.jp', 'KidsUPお客様サポート');
                $message->to($data['school']->email, $data['school']->school_name)
                        ->cc(env('MAIN_MAIL'))
                        ->subject($data['subject']);
            }
        );
    }

    //★カレンダーに表示する説明会スケジュールを取得
    public function eventSearch(Request $request){
      $req = $request->all();
      $today = Carbon::now()->format('Y-m-d');
      $dt  = new Carbon($req['start_date']);

      // カレンダーで選択された月が・・・
      // 1)未来⇒対象月の1日～末日で検索する
      // 2)現在⇒当日～対象月末日で検索する
      // 3)過去⇒当日～対象月末日で検索する ※対象月末日は過去日付のため、検索結果は０件
      $nowCarbon   = new Carbon(Carbon::now()->startOfMonth()->format('Y-m-d'));
      $startCarbon = new Carbon($dt->subDay(5)->addMonth()->startOfMonth()->format('Y-m-d'));

      if($startCarbon->gt($nowCarbon)){
        $start_date = $dt->subDay(5)->addMonth()->startOfMonth()->format('Y-m-d'); // 1)未来月
      }else{
        $start_date = Carbon::now()->format('Y-m-d');  // 2),3)現在月 or 過去月
      }

      $end_date   = $dt->subDay(5)->addMonth()->endOfMonth()->format('Y-m-d'); //選択した月の末日

      if(isset($req['submit_school_id'])){
        $eventSchedule = $this->getEventList($req, $today, $start_date, $end_date); //スクール指定でイベント検索
      }else{
        $eventSchedule = $this->getEventListAll($req, $today, $start_date, $end_date); //スクールに関係なくイベント検索
      }

      //説明会スケジュール を配列に整形
      $eventArray = array();
      for ($i=0; $i < count($eventSchedule); $i++) {
        $event = array(
          'id'    => $eventSchedule[$i]->event_id ,
          'title' => '◯',
          'start' => $eventSchedule[$i]->date,       //例)2017-03-15
          'end'   => $eventSchedule[$i]->date,       //例)2017-03-15
          'className' => 'check' //アイコン装飾用
        );
        $eventArray[$i] = $event;
      }
      return json_encode($eventArray);
    }

    //★現在以降に、説明会が存在するかチェック
    public function eventSearchExists(Request $request){
      $req = $request->all();
      $today = Carbon::now()->format('Y-m-d');
      $start_date = $today;
      $end_date   = '2050-12-31';

      if(isset($req['submit_school_id'])){
        $eventSchedule = $this->getEventList($req, $today, $start_date, $end_date); //スクール指定でイベント検索
      }else{
        $eventSchedule = $this->getEventListAll($req, $today, $start_date, $end_date); //スクールに関係なくイベント検索
      }

      return json_encode(count($eventSchedule));
    }

    //スクール指定でイベント検索
    private function getEventList($req, $today, $start_date, $end_date){
      $ids = $req['submit_school_id'];
      $eventSchedule = DB::table('event_schedule')
                       ->where('event_schedule.status', 'public')  //公開のみ表示
                       ->where('event_schedule.date' ,'>=', $start_date)
                       ->where('event_schedule.date' ,'<=', $end_date)
                       ->where('event_schedule.release_date' ,'<=', $today);
        $eventSchedule = $eventSchedule->where(function($query) use ($ids){
          for($i=0; $i < count($ids); $i++){
            if($i == 0){
              $query->where('event_schedule.relational_school', 'like', "%#" .$ids[$i]. "#%");
            }else{
              $query->orWhere('event_schedule.relational_school', 'like', "%#" .$ids[$i]. "#%");
            }
          }
        });//開催教室に含まれるか
        $eventSchedule =$eventSchedule->select(['event_id', 'date', DB::raw('COUNT(event_id) as count')])
                        ->groupBy('date')
                        ->get();
      return $eventSchedule;
    }

    //スクールに関係なくイベント検索
    private function getEventListAll($req, $today, $start_date, $end_date){
      $eventSchedule = DB::table('event_schedule')
                       ->where('event_schedule.status', 'public')  //公開のみ表示
                       ->where('event_schedule.date' ,'>=', $start_date)
                       ->where('event_schedule.date' ,'<=', $end_date)
                       ->where('event_schedule.release_date' ,'<=', $today)
                       ->where(function($query){
                         $query->whereNull('event_schedule.restrict')
                               ->orWhere('event_schedule.restrict' ,'!=', 'limit');
                       })
                       ->select(['event_id', 'date', DB::raw('COUNT(event_id) as count')])
                       ->groupBy('date')
                       ->get();
      return $eventSchedule;
    }

    //★会場、時刻を取得
    public function getSchedule(Request $request){

      $req = $request->all();
      $start_date = $req['start_date'];

      $end_date   = $req['end_date'];
      $today = Carbon::now()->format('Y-m-d');

      if(isset($req['submit_school_id'])){
        $eventSchedule = $this->getScheduleList($req, $today, $start_date); //スクール指定でイベント検索
      }else{
        $eventSchedule = $this->getScheduleListAll($req, $today, $start_date); //スクールに関係なくイベント検索
      }

      return json_encode($eventSchedule);
    }

    //★会場、時刻を取得
    private function getScheduleList($req, $today, $start_date){
      $ids = $req['submit_school_id'];
      $schedule = DB::table('event_schedule')
                       ->join('schools', 'event_schedule.school_id', '=', 'schools.id')
                       ->where('event_schedule.status', 'public')  //公開のみ表示
                       ->where('event_schedule.date' , $start_date)
                       ->where('event_schedule.release_date' ,'<=', $today);
                      $schedule = $schedule->where(function($query) use ($ids){
                       for($i=0; $i < count($ids); $i++){
                         if($i == 0){
                           $query->where('event_schedule.relational_school', 'like', "%#" .$ids[$i]. "#%");
                         }else{
                           $query->orWhere('event_schedule.relational_school', 'like', "%#" .$ids[$i]. "#%");
                         }
                       }
                     });//開催教室に含まれるか
      $schedule = $schedule ->select(DB::raw("event_schedule.*, schools.school_name,DATE_FORMAT(event_schedule.date,'%Y年%m月%d日') as date_format"))
                       ->orderBy('event_schedule.time', 'asc')
                       ->orderBy('event_schedule.school_id', 'asc')
                       ->get();

      // 各スケジュールの予約数を取得
      foreach($schedule as $row){
        $reservation = Reservation::where('event_id',$row->event_id)->count();
        $row->count  = $reservation;
      }

      return $schedule;
    }

    //★会場、時刻を取得 ※スクール関係なし
    private function getScheduleListAll($req, $today, $start_date){
      $schedule = DB::table('event_schedule')
                       ->join('schools', 'event_schedule.school_id', '=', 'schools.id')
                       ->where('event_schedule.status', 'public')  //公開のみ表示
                       ->where('event_schedule.date' , $start_date)
                       ->where('event_schedule.release_date' ,'<=', $today)
                       ->where(function($query){
                         $query->whereNull('event_schedule.restrict')
                               ->orWhere('event_schedule.restrict' ,'!=', 'limit');
                       })
                       ->select(DB::raw("event_schedule.*, schools.school_name,DATE_FORMAT(event_schedule.date,'%Y年%m月%d日') as date_format"))
                       ->orderBy('event_schedule.time', 'asc')
                       ->orderBy('event_schedule.school_id', 'asc')
                       ->get();

      // 各スケジュールの予約数を取得
      foreach($schedule as $row){
         $reservation = Reservation::where('event_id',$row->event_id)->count();
         $row->count  = $reservation;
      }

      return $schedule;
    }

    // ★【説明会へ参加】初回遷移
    public function show($id)
    {
        // GETで取得したスクールidを付加してビューに返却
        $data['submit_school_id'] = $id;
        $school = School::where('id', $id)->first();
        $data['school_name'] = $school->school_name;
        $data['status'] = $school->status;
        return view('event.setting')->with('data',$data);
    }

    // ★【説明会へ参加】別導線 20171010追加
    public function getEntry()
    {
        //スクール一覧を取得
        $schools = School::where('status', 'public')->orderBy('school_name','asc')->get();
        return view('event.setting2')
             ->with('schools',$schools);
    }

    //アンケート回答画面
    public function getReply($hash_id)
    {
      $reservation = Reservation::where('hash_id',$hash_id)
                                ->with('reservation_meta')
                                ->first();
      //顧客かチェック
      if(!$reservation){
        return response()->view('errors.404');
      }

      //回答済？
      if($reservation->reservation_meta){
        return response()->view('reply.duplicated');
      }

      return view('reply.index')->with('reservation', $reservation);
    }


    //アンケート回答を保存
    public function postReply(Request $request)
    {
      $req = $request->all();

      //必須チェック
      $validator = $this->validatorReply($request->all());
      $data = $request->all();

      if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
      }

      $reservation = Reservation::where('hash_id',$req['hash_id'])
                                ->with('reservation_meta')
                                ->first();

      //顧客かチェック
      if(!$reservation){
        return response()->view('errors.404');
      }

      $reservationMeta = ReservationMeta::firstOrNew(['id' =>$reservation->id]);

      $req['id'] = $reservation->id;
      $req['send_flg'] = '';

      $reservationMeta->fill($req)->save();

      return view('reply.complete');
    }

}
