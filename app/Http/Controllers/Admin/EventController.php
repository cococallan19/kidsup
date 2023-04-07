<?php

namespace App\Http\Controllers\Admin;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\EventSchedule;
use App\School;
use App\Reservation;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class EventController extends Controller
{
  public function getIndex($id)
  {
    //予約一覧
    $reservation = Reservation::where('event_id', $id)->get();;

    //説明会情報
    $event       = DB::table('event_schedule')
                     ->where('event_id', $id)
                     ->join('schools', 'event_schedule.school_id', '=', 'schools.id')
                     ->select('event_schedule.*', 'schools.school_name')
                     ->get();
    // 教室一覧
    $schools = School::where('status', 'public')->get();

    return view('admin.event.index')->with('reservation', $reservation)->with('event', $event)->with('schools' , $schools);
  }

  public function postIndex(Request $request,$id)
  {
    $validator = $this->validator($request->all());
    if ($validator->fails()) {
          $this->throwValidationException(
              $request, $validator
          );
    }
      $req = $request->all();
      $this->createEvent($req);

    \Session::flash('flash_message', '説明会スケジュールを変更しました。');
    return redirect('event/index/'.$id);
  }

  public function getCreate()
  {
    $schools = School::where('status', 'public')->get();
    return view('admin.event.create')->with('schools' , $schools);
  }
  public function getTime($id)
  {
    $datetime = '00000';
    return $this->checkDatetimeFormat($datetime);
  }
  public function postTime(Request $request , $order)
  {
    if($order == 'add') {
      $value = $request->all();
    }
    if($this->checkDatetimeFormat($value['value'])){
      $value['decision'] = true;
      return $value;
    } else {
      $value['decision'] = false;
      return $value;
    }
  }
  private function checkDatetimeFormat($datetime){
    if (preg_match('/^\d{2}\:\d{2}$/', $datetime)) {
      return true;
    }else{
      return false;
    }
  }

  protected function validator(array $data)
     {
         return Validator::make($data, [
             'relational_school' => 'required',
             'event_date' => 'required',
             'time' => 'required',
             'school' => 'required',
             'release_date' => 'required',
             'status' => 'required',
             'capacity' => 'required',
         ]);
     }

  //★説明会スケジュール登録
  public function postCreate(Request $request){
    //必須チェック
    $validator = $this->validator($request->all());

    if ($validator->fails()) {
          $this->throwValidationException(
              $request, $validator
          );
    }
    //イベント作成処理
    $req = $request->all();
    $this->createEvent($req);
    \Session::flash('flash_message', '説明会スケジュールを登録しました。');  // 追加
    return redirect('/event/create');
  }

  private function createEvent($req)
  {
    $date = new Carbon($req['event_date']);
    $event = EventSchedule::firstOrNew(['date' =>$date->toDateString(), 'time' =>$req['time'], 'school_id' =>$req['school']]);

    //対象スクールを#区切りの文字列データに整形
    $relational_school = implode('#,#', $req['relational_school']);
    $relational_school = '#'.$relational_school.'#';

    //event_scheduleテーブルにデータを登録
    $event->date              = $date->toDateString();
    $event->time              = $req['time'];
    $event->school_id         = $req['school'];
    $event->release_date      = $req['release_date'];
    $event->status            = $req['status'];
    $event->relational_school = $relational_school; //@string: #school_id#, ... ,#school_id#
    $event->capacity            = $req['capacity'];
    $event->restrict            = $req['restrict'];
    $event->taiken            = $req['taiken'];
    $event->save();

    return $event;
  }


  //★カレンダーに表示する説明会スケジュールを取得
  public function eventSearch(Request $request){

    $req = $request->all();
    $start_date = $req['start_date'];
    $end_date   = $req['end_date'];

    //説明会スケジュール、スクール名称、予約件数を取得
    $eventSchedule = DB::table('event_schedule')
                     ->whereBetween('event_schedule.date' , [$start_date , $end_date])
                     ->join('schools', 'event_schedule.school_id', '=', 'schools.id')
                     ->leftJoin(DB::raw('(select reservation.event_id, count(reservation.event_id) as reservation_cnt '
                                        .'from reservation '
                                        .'group by reservation.event_id'
                                        .') as CNT'), 'event_schedule.event_id', '=', 'CNT.event_id')
                     ->select('event_schedule.*', 'schools.school_name', DB::raw('IfNull(CNT.reservation_cnt,0) as reservation_cnt') )
                     ->get();

    //説明会スケジュール を配列に整形
    $eventArray = array();
    for ($i=0; $i < count($eventSchedule); $i++) {

      $cssClass = $this->addCssClass($eventSchedule[$i]); //説明会の色を変更
      $event = array(
        'id'    => $eventSchedule[$i]->event_id ,
        'title' => $eventSchedule[$i]->time .' ' .$eventSchedule[$i]->school_name .'[' .$eventSchedule[$i]->reservation_cnt .' / '.$eventSchedule[$i]->capacity.']', //例)11:00 蒲田駅前[5]
        'start' => $eventSchedule[$i]->date,                                       //例)2017-03-15
        'end'   => $eventSchedule[$i]->date,                                       //例)2017-03-15
        'url'   => 'index/'.$eventSchedule[$i]->event_id,   //TODO urlにイベントIDを与え、getで詳細画面へ船員
        'className' => $cssClass //アイコン装飾用
      );
      $eventArray[$i] = $event;
    }
    return json_encode($eventArray);
  }

  private function addCssClass($obj){
    $cssClass = '';
    if (0 < $obj->reservation_cnt){
      $cssClass .= ' event_reserved'; //予約が1件以上
    }else{
      $cssClass .= ' event_reserved_none'; //予約が0件
    }

    if ($obj->status == 'close'){
      $cssClass .= ' event_closed'; //非公開
    }
    return $cssClass;
  }


}
