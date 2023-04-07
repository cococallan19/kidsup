@inject('ConvertToWareki', 'App\Http\Library\ConvertToWareki')
@extends('layouts.layout')

@section('meta')
<title>KidsUP{{$data['school_name']}} | 説明会へのご参加 | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
@if($data['status']=='close')
  <meta name="robots" content="noindex">
@endif

<style>
/* FullCalendar用にカスタム start*/

  .fc-past ,.fc-past.fc-content {
    background-color: #c9c3c3;
    pointer-events: none;
  }

  /* FullCalendar用にカスタム end*/
  .checkbox_inner{
    width: 140px;
    display:inline-block;
  }
  .content_bar button {
    display: none;
  }
</style>
<!-- TODO  -->
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<link rel="stylesheet" href="/css/style.css">
<link href="/admin/css/jquery.tagit.css" rel="stylesheet" type="text/css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="/admin/plugins/iCheck/all.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/admin/plugins/datepicker/datepicker3.css">
<!-- FullCalendar style -->
<link rel="stylesheet" href="/admin/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="/admin/plugins/fullcalendar/fullcalendar.print.css" media="print">


@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/bg_4.jpg) top left; background-size: cover;" >
  <div class="kids-overlay"></div>
  <div class="kids-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-12 kids-section-heading-img text-center">
          <h2 class="kids-lead" style="top:150px;"><img src="/images/title_session_w.png" alt="タイトル：説明会の参加"></h2>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- END .header -->
@endsection

@section('content')


<div id="kids-form" class="event-setting" data-section="form">
  <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}"> <!-- トークンをセット -->
  <div class="container">
    <div class="row">
      <!-- モーダルウィンドウ -->
      <div class="modal fade" id="modal-content" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="background:rgba(0,0,0,0.3);">
        <div class="modal-dialog" role="document" style="top:40vh;">
          <div class="modal-content">
            <div class="modal-header">
              <h5>KidsUP{{$data['school_name']}}校からのお知らせ</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="modal-body">
            </div>
          </div>
        </div>
      </div>
      <!-- /モーダルウィンドウ -->
      <!-- モーダルウィンドウ(長期休み用) 
      <div class="modal fade" id="modal-content-holiday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="background:rgba(0,0,0,0.3);">
        <div class="modal-dialog" role="document" style="top:40vh;">
          <div class="modal-content">
            <div class="modal-header">
              <h5>KidsUP{{$data['school_name']}}校からのお知らせ</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="modal-body-holiday">
              <p>12月29日～1月3日までスクールは冬季休業となります。<br>恐れ入りますが、スクールからの返信が1月4日以降となりますことをご了承下さい。</p>
            </div>
          </div>
        </div>
      </div>
       /モーダルウィンドウ(長期休み用) -->

      <div class="col-md-12 kids-section-heading-old text-center">
            <h3>KidsUP{{$data['school_name']}}校への説明会参加</h3>
            <p class="kids-sub">
              説明会の参加は以下のフォームに入力の上、送信ください。<br />
            </p>

      </div>
      <div class="col-lg-8 col-md-offset-2 setting-calendar-area">

          <div class="col-lg-12 col-md-12 col-sm-12 @if(!empty($errors->first('submit_event_id'))) has-error @endif calendar-area">
            <span class="label label-required">必須</span>ご希望日
            <p class="kids-arrow kids-arrow-short"><em>ご希望日を</em>選択してください</p>
            @if(!empty($errors->first('submit_event_id')))<span class="help-block">{{$errors->first('submit_event_id')}}</span>@endif

            <table class="kids-calendar-event">
              <!-- fullCalendarをコピー-->
              <div class="form-group">
                <div id="calendar" class="kids-calendar-event"></div>
              </div>
            </table>



          </div>

        {!! Form::open(['id' => 'contact-form' , 'url' => '/event/confirm']) !!}
          <div class="col-lg-6 col-md-8 col-sm-12 time-zone-content">
            <div class="loader"></div>

            <div class="time-zone-wrapper">
            <span class="label label-required">必須</span>ご希望の時間帯
            <p class="kids-arrow kids-arrow-long">ご希望の時間を選択してください</p>
            <table class="time-zone">
              <thead>
                <tr>
                  <th>説明会場</th>
                  <th>時間帯</th>
                  <th>空席</th>
                  <th>説明会</th>
                </tr>
              </thead>
              <!-- 以降はカレンダークリック後、動的に生成 -->
            </table>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 result-content">
            <p class="kids-arrow kids-arrow-result">内容をご確認ください</p>
            <table class="table kids-session">
              <thead>
                <tr>
                  <th>参加先スクール</th>
                  <th>説明会場</th>
                  <th>参加日程</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 <td>KidsUP{{$data['school_name']}}校</td>
                  <td id="school_name_disp"></td>
                  <td id="time_disp"></td>
                  {{Form::hidden('school_name_disp_hidden', old('school_name_disp') , ['id' => 'school_name_disp_hidden'])}}
                  {{Form::hidden('time_disp_hidden', old('time_disp_hidden'), ['id' => 'time_disp_hidden'])}}
                  {{Form::hidden('event_date_hidden', old('event_date_hidden') , ['id' => 'event_date_hidden'])}}
                </tr>
              </tbody>
            </table>

          </div>

          <div class="form-wrapper marginbot-50">

              <div class="row">
                      <div class="form-group @if(!empty($errors->first('name'))) has-error @endif">
                        <span class="label label-required">必須</span>{!! Form::label('name', '保護者のお名前') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'お名前', 'required' => 'required']) !!}
                        @if(!empty($errors->first('name')))<span class="help-block">{{$errors->first('name')}}</span>@endif<p>※新型コロナウィルス感染拡大防止の為、保護者様のご参加はお一人までとさせていただきます。</p>
                      </div>
                      <div class="form-group @if(!empty($errors->first('number'))) has-error @endif">
                        <span class="label label-required">必須</span>{!! Form::label('number', '電話番号') !!}
                        <input type="tel" name="number" class="form-control" size="11" maxlength="11" placeholder="電話番号を入力してください(ハイフン無し)" required="required" value="{{old('number')}}">
                        @if(!empty($errors->first('number')))<span class="help-block">{{$errors->first('number')}}</span>@endif
                      </div>
                      <div class="form-group @if(!empty($errors->first('email'))) has-error @endif">
                        <span class="label label-required">必須</span>{!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control','id' => 'email', 'placeholder' => 'Email', 'required' => 'required']) !!}
                        @if(!empty($errors->first('email')))<span class="help-block">{{$errors->first('email')}}</span>@endif
                      </div>

                      <div class="form-group">
                        <span class="label label-required">必須</span>{!! Form::label('name_child', 'お子様のお名前') !!}
                        {!! Form::text('name_child', old('name_child'), ['class' => 'form-control', 'placeholder' => 'カタカナでお子様のお名前を入力してください', 'required' => 'required']) !!}
                      </div>

                      <div class="form-group @if(!empty($errors->first('year')) || !empty($errors->first('month')) || !empty($errors->first('day')))  has-error @endif">
                        <span class="label label-required">必須</span>{!! Form::label('birth', 'お子様の生年月日') !!}
                        <div class="form-control">
                          <select id="year" name="year">
                            <option value="">--</option>
                            @for ($year = date('Y')-12; $year <= date('Y')-1 ; $year++)
                            <option value="{{$year}}" @if($year == old('year')) selected @endif>{{$year}}年（{{$ConvertToWareki->convertForSeirekiToWareki($year)}}）</option>
                            @endfor
                          </select>
                          <select id="month" name="month">
                            <option value="">--</option>
                            @for ($month = 1; $month < 13 ; $month++)
                            <option value="{{$month}}" @if($month == old('month')) selected @endif>{{$month}}月</option>
                            @endfor
                          </select>
                          <select id="day" name="day">
                            <option value="">--</option>
                            @for ($day = 1; $day < 32 ; $day++)
                            <option value="{{$day}}" @if($day == old('day')) selected @endif>{{$day}}日</option>
                            @endfor
                          </select>
                        </div>
                        @if(!empty($errors->first('year')) || !empty($errors->first('month')) || !empty($errors->first('day')))<span>生年月日は必須です</span>@endif
                      </div>
                      <div class="form-group @if(!empty($errors->first('kinder_attend'))) has-error @endif">
                        <span class="label label-required">必須</span>{!! Form::label('kinder_attend', '保育園・幼稚園名と在園状況') !!}
                          {!! Form::text('kinder_attend', old('kinder_attend'), ['class' => 'form-control', 'placeholder' => '例) ○○保育園　来年4月から・卒園済', 'required' => 'required']) !!}
                          @if(!empty($errors->first('kinder_attend')))<span class="help-block">保育園・幼稚園名と在園状況は必須です</span>@endif
                      </div>
                      <div class="form-group  @if(!empty($errors->first('primary_attend'))) has-error @endif">
                        <span class="label label-required">必須</span>{!! Form::label('primary_attend', '小学校名と在学状況') !!}
                          {!! Form::text('primary_attend', old('primary_attend'), ['class' => 'form-control', 'placeholder' => '例)  ○○小学校に来年4月から', 'required' => 'required']) !!}
                          @if(!empty($errors->first('primary_attend')))<span class="help-block">小学校名と在学状況は必須です</span>@endif
                      </div>
                      <div class="form-group">
                        <span class="label label-premium">任意</span>{!! Form::label('start_season', 'ご希望の利用開始時期') !!}
                        {!! Form::text('start_season', old('start_season'), ['class' => 'form-control', 'placeholder' => '例）空きがあればすぐにでも・10月から']) !!}
                      </div>
                      <div class="form-group">
                          <span class="label label-premium">任意</span>{!! Form::label('trigger', 'お申し込みのきっかけ') !!}
                          <div class = "checkebox_inqiry">
                            <div class="checkbox_inner">
                              {{Form::radio('trigger', 'チラシ', false, ['class'=>'custom-control-input','id'=>'Flyer'])}}
                              {{Form::label('Flyer' , 'チラシ' )}}
                            </div>
                            <div class="checkbox_inner">
                              {{Form::radio('trigger', '口コミ', false, ['class'=>'custom-control-input','id'=>'review'])}}
                              {{Form::label('review' ,  '口コミ')}}
                            </div>
                            <div class="checkbox_inner">
                              {{Form::radio('trigger', 'ホームページ', false, ['class'=>'custom-control-input','id'=>'homepage'])}}
                              {{Form::label('homepage' , 'ホームページ' )}}
                            </div>
                            <div class="checkbox_inner">
                              {{Form::radio('trigger', '看板', false, ['class'=>'custom-control-input','id'=>'signboard'])}}
                              {{Form::label('signboard' , '看板' )}}
                            </div>
                            <div class="checkbox_inner">
                              {{Form::radio('trigger', '資料', false, ['class'=>'custom-control-input','id'=>'document'])}}
                              {{Form::label('document' ,  '資料' )}}
                            </div>
                            <div class="checkbox_inner">
                              {{Form::radio('trigger', 'その他', false, ['class'=>'custom-control-input','id'=>'others'])}}
                              {{Form::label('others' , 'その他' )}}
                            </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <span class="label label-premium">任意</span>{!! Form::label('body', '説明会で聞きたい内容・ご要望') !!}
                          {!! Form::textarea('body', old('body') ,array('rows'=>'9','cols' => '25','class'=>'form-control','id' => 'message','placeholder'=>'スクール、サービス、お子様について&#13;&#10;気になる点があれば記入ください。&#13;&#10;例）送迎について詳しく聞きたい&#13;&#10;      ２歳の弟も一緒に参加したい')) !!}
                      </div>


                      <button type="submit" class="btn btn-primary btn-md" id="btnContactUs">
                          内容の確認へ</button>

              </div>
              {{Form::hidden('submit_school_id', $data['submit_school_id'], ['id' => 'submit_school_id'])}}
              {{Form::hidden('submit_event_id', '' , ['id' => 'submit_event_id'])}}
          </div>
        {!! Form::close() !!}
      </div>


        </div>
     </div>
</div>
@endsection
<!-- TODO 管理者ビューのスクリプトをコピー  -->
@section('js')
<!-- Event Calendar jQuery-->
<script src="/js/event-calendar.js"></script>
<script>
var loadEventFlg = false;
var eventExists = null;
// カレンダー設定
$(function () {
  reload();

  //2019年夏休みの長期休暇のお知らせモーダル
  var now = new Date();
  var holiday_start = new Date('2023/01/01 00:00:00');
  var holiday_end   = new Date('2023/01/20 23:59:59');
  if( now.getTime() > holiday_start.getTime()
   && now.getTime() < holiday_end.getTime()
  ){
    //$('#modal-content-holiday').modal();//長期休暇のお知らせモーダル
  }

  /* initialize the calendar
   -----------------------------------------------------------------*/
  //Date for the calendar events (dummy data)
  var date = new Date();
  var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();
  $('#calendar').fullCalendar({
    header: {
      left: 'prev',
      center: 'title',
      right: 'next'
    },
    buttonText: {
      today: 'today',
      month: 'month',
      week: 'week',
      day: 'day'
    },
    // ボタンのアイコンを変更 TODO 枠無しの▶ にしたい
    buttonIcons: {
      prev: 'icon-caret-left',      //default:left-single-arrow TODO:icon-caret-leftに変更したい
      next: 'icon-caret-right',     //default:left-single-arrow TODO:icon-caret-rightに変更したい
      // prevYear: 'left-double-arrow',//default
      // nextYear: 'right-double-arrow'//default
    },
    // 曜日略称
    dayNamesShort: ['日', '月', '火', '水', '木', '金', '土'],
    // 最初の曜日
    firstDay: 1, // 1:月曜日
    // タイトルの書式
    titleFormat: {
        month: 'YYYY年MMM月',                             // 2013年9月
//        week: "yyyy年M月d日{ ～ }{[yyyy年]}{[M月]d日}", // 2013年9月7日 ～ 13日
//        day: "yyyy年M月d日'('ddd')'"                  // 2013年9月7日(火)
    },
    // 月略称
    monthNamesShort: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
    selectable: true,
    selectHelper: true,

    // 日付をクリックしたらクラスを付与
    dayClick: function(date, allDay, isEvent, view){
      $(".fc-highlight").removeClass("fc-highlight"); //既に選択済ならば、選択を解除
      $(this).toggleClass('fc-highlight');
      $('[name="event_date"]').val(date.format());
    },

    // 表示期間を切り替えたらイベントスケジュールを取得
    events: (start, end, timezone, callback) => {
      var displaySchool = $('#submit_school_id').map(function(){return $(this).val();}).get();
      var IdSend = displaySchool.map(Number);
      var sendObj = {'url':'/event/search','submit_school_id':IdSend}
      var getEventdata = getSchedule(start.toISOString(),end.toISOString() ,sendObj);
      //Ajax戻り値を非同期のままで取得 @result:JSON
      getEventdata.done(function(result) {
        // #168 説明会が無い時、説明会がある月まで移動する
        if(!loadEventFlg && result.length == 0 && eventExists !== false){
          //今後、説明会が存在するか確認
          if(eventExists == null){
            var count = getSchedule(start.toISOString(),end.toISOString() ,{'url':'/event/searchExists','submit_school_id':$('#submit_school_id').map(function(){return $(this).val();}).get()});
            count.done(function(result) {
              if(result == 0){
                $('.kids-arrow-short').css('display','none');
                eventExists   = false;
                loadEventFlg = true;
                $('#modal-body').html('<p>現在、説明会を準備中です。<br>他校のスケジュールは<a href="/event/entry">こちら</a>です。</p>');
                $('#modal-content').modal();
                return false;
              }else{
                eventExists = true;
                $('.fc-next-button').click(); //1か月進める
              }
            });
          }
          if(eventExists){
            $('.fc-next-button').click(); //1か月進める
          }

        }else{
          callback(setEventSchedule(result));
        }
      });
    },
    //イベントクリック時のアクション
    eventClick: function(calEvent, jsEvent, view) {
        $('.time-zone-wrapper').hide();
        $('.time-zone-content .loader').fadeIn(500);
        var sendObj = {'url':'/event/getSchedule','submit_school_id':$('#submit_school_id').map(function(){return $(this).val();}).get()};
        var selector    = "td[data-date = '" + calEvent.start.toISOString() + "']";

        //説明会選択を初期化
        $('.fc-highlight').removeClass("fc-highlight");
        $('#school_name_disp').html(''); //参加先スクールを初期化
        $('#time_disp').html(''); //選択した時刻を初期化
        $('#submit_event_id').val(''); //リクエストを初期化
        $('.result-content').hide(); //参加先スクールを隠す

        //選択した日付にハイライト
        $(selector).toggleClass('fc-highlight');

        //この日付の説明会スクール、時刻を検索して画面上に表示させる #ajax
        var getEventdata = getSchedule(calEvent.start.toISOString(),calEvent.start.toISOString() ,sendObj);
        getEventdata.done(function(result) {
          setSchedule(result); //会場、時刻を表示
          });

        // change the border color just for fun
        $(this).css('border-color', 'red');
    }
  });
  //選択日付があればハイライト
  var selector    = "td[data-date = '" + $('#event_date_hidden').val() + "']";
  $(selector).toggleClass('fc-highlight');
});
//画面上にイベントをセット
function setSchedule(result) {

  if(!result){
    return;
  }
  //会場、時刻の選択欄を生成
  var resultHtml  = '<tbody>'
  for(var i = 0; i < result.length; i++){
    //空席を判定
    var status = '○';
    var className  = '';
    var taiken = '有';
    if(result[i].count >= result[i].capacity){
      status = '満席'
      className  = 'select-disabled';
    }
    if(result[i].taiken == 'off'){
      taiken = '無';
    }
    resultHtml += '<tr';
    resultHtml += ' class="';
    resultHtml += className;
    resultHtml += '"><td>';
    resultHtml +=  result[i].school_name;
    resultHtml += '</a></td><td>';
    resultHtml +=  result[i].time;
    resultHtml += '</a></td>';
    resultHtml += '<td>';
    resultHtml += status;
    resultHtml += '</td>';
    resultHtml += '<td>';
    resultHtml += taiken;
    resultHtml += '</td>';
    resultHtml += '<input type="hidden" value="'+ result[i].event_id + '">';
    resultHtml += '<input type="hidden" value="'+ result[i].school_name + '">';
    resultHtml += '<input type="hidden" value="'+ result[i].date_format + '">';
    resultHtml += '<input type="hidden" value="'+ result[i].time + '">';
    resultHtml += '<input type="hidden" value="'+ result[i].date + '">';
    resultHtml += '</tr>';
  }
    resultHtml += '</tbody>'

  $('.time-zone tbody').remove();
  $('.time-zone').append(resultHtml);
  $('.kids-arrow-short').hide();
  $('.time-zone-content').fadeIn(500 , function(){
    $('.time-zone-content .loader').hide();
    $('.time-zone-wrapper').fadeIn(500);
    $('html,body').animate({scrollTop:$('.time-zone').offset().top - $(window).height()*1/3 - $('#kids-menu').height()});
  });

}

//カレンダーにイベントスケジュールをセット
function setEventSchedule(result) {
  var events = result;
  $('#calendar').fullCalendar('removeEvents');
  $('#calendar').fullCalendar('addEventSource', events );
  loadEventFlg = true;
}

//説明会の会場、時刻を選択したとき
$(document).on('click', '.time-zone td', function(){

  //満席ならば終了
  if($(this).parent().hasClass('select-disabled')){
    return;
  }

  if(!$(this).parent().hasClass('active')){
    if($('table.time-zone tr').hasClass('active')) {
      $('table.time-zone tr').removeClass('active');
    }
    $(this).parent().addClass('active');
  }

  var submit_event_id = $(this).parent()[0].children[4].value;  //選択した説明会のevent_id
  var school_name_disp = "KidsUP" + $(this).parent()[0].children[5].value; //選択したスクール名
  var date_disp = $(this).parent()[0].children[6].value; //選択した日付
  var time_disp = $(this).parent()[0].children[7].value; //選択した時間
  var date_hidden = $(this).parent()[0].children[8].value; //選択した日付

  $('#school_name_disp').html(school_name_disp); //参加先スクールに選択したスクール名をセット
  $('#time_disp').html(date_disp + ' ' + time_disp); //選択した日付、時刻をセット
  $('#submit_event_id').val(submit_event_id);
  $('#school_name_disp_hidden').val(school_name_disp);
  $('#time_disp_hidden').val(date_disp + ' ' + time_disp);
  $('#event_date_hidden').val(date_hidden);

  $('.kids-arrow-long').hide();

  var adjust = -200;
  $('.result-content').delay(100).fadeIn(1000, function() {
    var position = $('.result-content').offset().top + adjust;
    $('html, body').animate({
      scrollTop: position
    }, 500);
    return false;
  });
});

//リロード時
function reload() {

  //入力済の情報があるならばセット
  if(!$('#school_name_disp_hidden').val()==''){
    $('#school_name_disp').html($('#school_name_disp_hidden').val() );
    $('#time_disp').html($('#time_disp_hidden').val() );

    var adjust = -200;
    $('.result-content').delay(100).fadeIn(1000, function() {
      var position = $('.result-content').offset().top + adjust;
      $('html, body').animate({
        scrollTop: position
      }, 1000);
      return false;
    });

  }

}



</script>
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>-->
<script src="/admin/js/tag-it.min.js" type="text/javascript" charset="utf-8"></script>
<!-- FullCalendar -->
<script src="/admin/plugins/daterangepicker/moment.min.js"></script>
<script src="/admin/plugins/fullcalendar/fullcalendar.js"></script>
@endsection
