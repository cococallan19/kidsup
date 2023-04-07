<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Reservation;
use App\ReservationMeta;
use App\Inquiry;
use App\School;

class ApiController extends Controller
{
    //説明会予約・問合せ情報を返す
    public function getCustomerData(Request $request) {

      try{
        //リクエスト
        $req = $request->all();

        //キーで認証チェック
        if($req['accessKey'] !== env('API_KEY')){
          return $this->response(400);
        }

        //スプレッドシートで指定したスクール名の前方一致で、対象のスクールIDを取得
        $school = School::where('school_name', 'like', $req['schoolName'].'%')->get();
        $schoolIdArr = [];
        foreach($school as $row){
          $schoolIdArr[] = $row->id;
        }

        //「まだ決まっていない」の特例
        if(!$school || $req['schoolName'] == 'まだ決まっていない'){
          $schoolIdArr[] = 9999;
        }

        //連携データ取得:説明会予約
        $reservation = Reservation::whereIn('school_id', $schoolIdArr)
                                  ->whereNull('send_flg')
                                  ->with('event_schedule')
                                  ->get();

        //連携データ取得：問合せ
        $inquiry = Inquiry::whereIn('school_id', $schoolIdArr)
                                  ->whereNull('send_flg')
                                  ->get();

        //データを加工:説明会と問合せをマージ
        $response = array();
        $no = 0;
        foreach($reservation as $row){
          $row->category = 'R';
          //20200616:【幼児コースご希望の方はこちら】対応
          if(strpos($row->school_name, '【') ){
            $row->body = $row->school_name.'への問合せ ※システムにより追加'.PHP_EOL.'----------'.PHP_EOL.$row->body;
          }
          $response[$no] = $row;
          $no++;
        }

        foreach($inquiry as $row){
          $row->category = 'I';
          //20200616:【幼児コースご希望の方はこちら】対応
          if(strpos($row->school_name, '【') ){
            $row->body = $row->school_name.'への問合せ ※システムにより追加'.PHP_EOL.'----------'.PHP_EOL.$row->body;
          }
          $response[$no] = $row;
          $no++;
        }

        //送り返す
        return $this->response(200, null, $response, ["counts" => count($response)]);
      } catch(\Exception $e) {
        return $this->response(500, $e->getMessage());
      }
    }


    //付加情報（アンケート回答）を返す
    public function getReservationMeta(Request $request) {

      //リクエスト
      $req = $request->all();

      //キーで認証チェック
      if($req['accessKey'] !== env('API_KEY')){
        return $this->response(400);
      }

      //どこのスクールからのアクセスか？
      $school = School::where('school_name', $req['schoolName'])->first();

      //「まだ決まっていない」の特例
      if(!$school || $req['schoolName'] == 'まだ決まっていない'){
        $schoolId = 9999;
      }else{
        $schoolId = $school->id;
      }

      //連携データ取得:説明会予約
      $reservation = Reservation::where('school_id', $schoolId)
                                ->with('event_schedule')
                                ->get();

      //連携フラグが無いデータを取得
      $response = array();
      $no = 0;

      foreach($reservation as $row){
        if($row->reservation_meta){
          if(!$row->reservation_meta->send_flg){
            $response[$no] = $row;
            $no++;
          }
        }
      }
      //送り返す
      return $this->response(200, null, $response, ["counts" => count($response)]);

    }


    //スクール名称一覧を返す
    public function getSchool() {
      $schools = School::where('status', 'public')->where('school_name', 'not like', '%【%')->orderBy('published_at','desc')->get(['school_name', 'email']);
      return $this->response(200, null, $schools);
    }


    //説明会予約・問合せ情報に転送フラグを立てる
    public function updateFlg(Request $request) {
      try{

        //リクエスト
        $req = $request->all();//TODO:try catchつける

        //キーで認証チェック
        if($req['accessKey'] !== env('API_KEY')){
          return $this->response(400);
        }

        //reservation, inquiryに連携フラグを立てる
        $update = json_decode($req['update'], true); //JSON形式なので、配列に変換する
        $r_success  = 0;
        $i_success  = 0;

        for($i=0; $i<count($update); $i++){
          if($update[$i]['category'] == 'R'){
            $reservation = Reservation::find($update[$i]['id']);
            $reservation->send_flg = 1;
            $reservation->save();
            $update[$i]['target'] = $reservation->name_child;
            $update[$i]['category'] = '説明会';
            $r_success++;
          }elseif($update[$i]['category'] == 'I'){
            $inquiry = Inquiry::find($update[$i]['id']);
            $inquiry->send_flg = 1;
            $inquiry->save();
            $update[$i]['target'] = $inquiry->name_child;
            $update[$i]['category'] = '問合せ';
            $i_success++;
          }
        }

        return $this->response(
              200
            , null
            , 'ok'
            ,[
                "process"=>'HPデータ連携'
              , "total" => count($update)
              , "r_success"=>$r_success
              , "i_success"=>$i_success
              , "detail"=>$update
             ]
        );
      } catch(\Exception $e) {
        return $this->response(500, $e->getMessage());
      }

    }


    //reservation_metaに転送フラグを立てる
    public function updateFlgSub(Request $request) {
      try{
        //リクエスト
        $req = $request->all();//TODO:try catchつける

        //キーで認証チェック
        if($req['accessKey'] !== env('API_KEY')){
          return $this->response(400);
        }

        //reservation, inquiryに連携フラグを立てる
        $update = json_decode($req['update'], true); //JSON形式なので、配列に変換する
        $success  = 0;

        for($i=0; $i<count($update); $i++){
          $reservation     = Reservation::find($update[$i]['id']);
          $reservationMeta = ReservationMeta::find($update[$i]['id']);
          $reservationMeta->send_flg = 1;
          $reservationMeta->save();
          $update[$i]['target'] = $reservation->name_child;
          $update[$i]['category'] = '付加情報';
          $success++;
        }

        return $this->response(
              200
            , null
            , 'ok'
            ,[
                "process"=>'HPデータ連携(付加情報)'
              , "total" => count($update)
              , "success"=>$success
              , "detail"=>$update
             ]
        );
      } catch(\Exception $e) {
        return $this->response(500, $e->getMessage());
      }
    }


    // APIのレスポンス
    // ===================
    // JSONをレスポンスする際に、リクエストが成功しましたか（？）、リクエストが失敗した理由などレスポンスのメタデータを付けます。
    private function response($statusCode, $message = null, $results = null, $metadata = null) {
      $internalErrorFlag = false;
      switch ($statusCode) {
        case 200:
        // 正常処理しました
          if(is_null($message)){
            $message = "ok";
          }
          break;

        case 400:
        // 正しくないAPIリクエストです
          if(is_null($message)){
            $message = "bad request";
          }
          break;

        default:
          $internalErrorFlag = true;
          break;
      }

      if($internalErrorFlag){
        if(is_null($message)){
          $message = "Unknown statusCode ".$statusCode. ". Errors occured in ApiController@response method.";
        }
        $statusCode = 500;
      }


      $response = [
        "statusCode" => $statusCode,
        "message" => $message,
        "results" => $results,
      ];
      if(!is_null($metadata)){
        foreach ($metadata as $key => $value) {
          $response[$key] = $value;
        }
      }
      return response()->json($response, $statusCode, array('Access-Control-Allow-Origin' => '*'));
    }

}
