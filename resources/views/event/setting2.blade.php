@inject('ConvertToWareki', 'App\Http\Library\ConvertToWareki')
@extends('layouts.layout')

@section('meta')
<title>説明会へのご参加 | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="英語,学童,説明会,体験,スクール" />
<meta name="author" content="KidsUP" />

<style>
/* FullCalendar用にカスタム start*/
  .fc-past ,.fc-past.fc-content {
    background-color: #c9c3c3;
    pointer-events: none;
  }
  td .fc-content {
    position: absolute;
    width: 100%;
    /* -webkit-box-align; height:70px; top:20px; */
  }
  td .fc-content .fc-title {
    position: relative;
    top: 30%;
  }
  .icon-caret-left{
    font-size:24px;
  }
  .icon-caret-right{
    font-size:24px;
  }
  /* FullCalendar用にカスタム end*/

  /*説明会日程 start*/
   table.time-zone {
     font-size: 14px;
   }
  /*説明会日程 end*/
  .checkbox_inner{
    width: 140px;
    display:inline-block;
  }
  .content_bar button {
    display: none;
  }
.tabs {
  margin-top: 50px;
  background-color: #fff;
  width: 50%;
  margin: 0 auto;
  font-family: '新丸ゴ DB', Arial, sans-serif;
}

.tab_item {
  width: calc(100%/3);
  height: 50px;
  border-bottom: 3px solid #ef8200;
  background-color: #d9d9d9;
  line-height: 50px;
  font-size: 16px;
  text-align: center;
  color: ##6a6a6a;
  display: block;
  float: left;
  text-align: center;
  font-weight: bold;
  transition: all 0.2s ease;
}
.tab_item:hover {
  opacity: 0.75;
}

input[name="tab_item"] {
  display: none;
}

.tab_content {
  display: none;
  padding: 10px;
  clear: both;
  overflow: hidden;
}


#all:checked ~ #all_content,
#area:checked ~ #area_content,
#design:checked ~ #design_content {
  display: block;
}

.tabs input:checked + .tab_item {
  background-color: #ef8200;
  color: #fff;
}
.search_result {
  margin: 20px auto;
  width: 50%;
}
.result_school {
  color: #6a6a6a;
  font-family: '新丸ゴ DB', Arial, sans-serif;
  font-size: 1em;
  padding: 7px;
  flex-wrap: wrap;
  justify-content: center;
}
.result_school ul {
  list-style: none;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  padding:0;
  background: #d1d1d1;
  padding:15px;
}
.result_school li{
  opacity: 1;
}
.result_school li.is-hidden{
  opacity: 0;
  height: 0;
  margin: 0;
}
.list-btn.is-btn-hidden{
  display:none;
}
.list-btn button {
    background-color: #ef8200;
    color:#FFF;
    border: none;
    cursor: pointer;
    outline: none;
    padding: 0;
    height: 32px;
    line-height: 32px;
    width: 120px;
    border-radius: 3px;
}
.result_school li label {
  padding: 0 5px;
  padding: 0 23px;
  position:relative;
}
.result_school ul li input {
  position: absolute;
  display: block;
  margin: 6px;
}
.list-btn{
  display: none;
}
.tab_content_description button {
  color: #FFF;
  background: #ef8200;
  border: none;
  border-radius: 3px;
  width: 100px;
  height: 40px;
  font-size: 1em;
  margin: 5px;
}
#left {
  float: left;
  display: none;
}
#right {
  float: right;
}
.preparation {
  display: none;
}
.no_check{
  font-family: '新丸ゴ DB', Arial, sans-serif;
  color: #6a6a6a;
}
.spinner {
 width: 32px;
 height: 32px;
 margin: 10px auto;
 border: 4px #ddd solid;
 border-top: 4px #2e93e6 solid;
 border-radius: 50%;
 animation: sp-anime 1.0s infinite linear;
 position: absolute;
 top:50%;
 right: 0px;
 left: 0px;
 bottom: 0px;
}
@keyframes sp-anime {
 100% {
   transform: rotate(360deg);
 }
}
.loading_modal{
  position: fixed;
  background: rgba(223,223,223,0.6);
  width: 100%;
  height: 100%;
  top:0px;
  display: none;
  z-index: 999;
}
.inquiry_link{
  font-family: '新丸ゴ DB', Arial, sans-serif;
}
 @media (max-width: 767px){
   .tabs {
     width: 90%;
   }
   .search_result {
     width: 90%;
   }
 }
/*20230120 */
.entry-note{
  display: grid;
  place-items: center;
  font-weight: bold;
  font-size:22px;
  color:red;
}

.sp-only{
  display:none;
}

@media (max-width: 767px){
  .entry-note{
    display: grid;
    place-items: center;
    font-weight: bold;
    font-size:12px;
    color:red;
  }
  .pc-only{
    display:none;
  }
}
</style>
<!-- TODO  -->
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
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

<div class="col-md-8 kids-section-heading-img old_kids-section-heading text-center">
  <p class="kids-sub">
    <br /><br />
    <b style="padding:10px; border:3px solid #ef8200; font-size:1.2em; color:#ef8200;"><i class="far fa-calendar-alt"></i> 説明会・スクール体験を受付中です！</b>
    <br /><br />
    ご希望の日程・会場を選択してご応募ください<br><br>
    個別面談、個別体験レッスンも可能です！<br>
    お気軽にお申込み下さい<br><br>
    お申込は<a href="/inquiry"><b>こちら</b></a>
  </p>
  <br />
  <div class="tabs">
  <input id="all" type="radio" name="tab_item" checked>
  <label class="tab_item" for="all">フリーワード</label>
  <input id="area" type="radio" name="tab_item">
  <label class="tab_item" for="area">地域で探す</label>
  <div class="tab_content" id="all_content">
    <div class="tab_content_description">
      {!! Form::text('search_free', old('search_free'), ['onchange'=>'searchValue(this)','class' => 'form-control', 'id' => 'free' ,'placeholder' => '例）スクール名・〇〇線・〇〇市区町村']) !!}
      <button type="submit" class="search_button" id="kensaku">検索</button>
    </div>
  </div>
  <div class="tab_content" id="area_content">
    <div class="tab_content_description">
      <select id="select-pref" name="select-pref"><option value="">都道府県を選択してください</option></select>
      <select id="select-city"　name="select-city"><option value="">市区町村を選択してください</option></select>
    </div>
  </div>
</div>
<div class = "loading_modal">
  <div class="spinner"></div>
</div>
<div class="inquiry_link">日程が合わない場合は<a href ="/inquiry">こちら</a></div>
<div class="search_result">
  <div class ="result_school"></div>
</div>
<div class = "preparation">
  <p style="display:inline-block; padding:10px; border:3px dotted #80B4CF;"><i style="color:#80B4CF;" class="far fa-comment-dots"></i> <b style="color:#80B4CF;">ただいま説明会を準備中です。</b></p>
  <br />
  <p style="text-align:center;"><i style="color:#ef8200;" class="far fa-hand-point-right"></i> <b>個別相談会</b>も実施しております<br />
     <small style="font-size:0.8em;">ご希望のお客様は <a href="/inquiry"><b><u>お問合せフォーム</u></b></a> より<br />ご相談・お申込みをお願いいたします</small></p>
   <br />
</div>
</div>

<div id="kids-form" class="event-setting" data-section="form" style="padding-top: 0px;">
  <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}"> <!-- トークンをセット -->
  <div class="container">
    <div class="row">

      <!-- モーダルウィンドウ(長期休み用) 
      <div class="modal fade" id="modal-content-holiday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="background:rgba(0,0,0,0.3);">
        <div class="modal-dialog" role="document" style="top:40vh;">
          <div class="modal-content">
            <div class="modal-header">
              <h5>KidsUPからのお知らせ</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="modal-body-holiday">
              <p>12月29日～1月3日までスクールは冬季休業となります。<br>恐れ入りますが、スクールからの返信が1月4日以降となりますことをご了承下さい。</p>
            </div>
          </div>
        </div>
      </div>
       /モーダルウィンドウ(長期休み用) -->


      <div class="col-lg-8 col-md-offset-2 setting-calendar-area">

          <!-- STEP1 -->
          <div id="top_tyui" class="text-center col-md-12 col-xs-12 entry-note pc-only">※翌月カレンダーは右端の矢印「▸」を押してご覧ください。</div>
          <div id="step1" class="current-navi vertical-effect col-md-12 col-xs-12" style="display:flex;">
            <li class="">STEP1：<br>ご希望日を選択</li><div class="text-center col-md-10 col-xs-10 entry-note pc-only">※翌月カレンダーは右端の矢印「▸」を押してご覧ください。</div>
          </div>
          <div id="top_tyui2" class="text-center col-md-12 col-xs-12 entry-note sp-only">※翌月カレンダーは右端の矢印「▸」を押してご覧ください。</div>
      @if(strtotime(date('Y-m-d H:i')) < strtotime('2019-03-22 0:00'))
      <div id="kids-event-2" class="col-md-4 col-xs-6 text-center col-md-push-4 col-xs-push-2 fluffy1">
        <a href="/event/setting/13" class="kids-comments">
          <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 kids-text animate-object features-2-animate-5 kids-babble fadeInLeft animated">
            <span class="kids-icon"><i class="icon-bulb"></i></span>
            <p>お台場スクールの【幼児コース】<br>専用説明会はこちら</p>
          </div>
        </a>
      </div>
      @endif
          @if(!empty($errors->first('submit_event_id')))<span class="help-block">{{$errors->first('submit_event_id')}}</span>@endif

          <!-- fullCalendarをコピー-->
          <div class="form-group">
            <div id="calendar" class="kids-calendar-event"></div>
          </div>

        {!! Form::open(['id' => 'contact-form' , 'url' => '/event/confirm']) !!}
        <div class="text-center col-md-12 col-xs-12 entry-note" style="margin-bottom:15px">※翌月カレンダーは上部右側の矢印「▸」を押してご覧ください。</div>
        <div id="" class="col-lg-8 col-md-offset-2" style="padding-bottom: 32px;">
          <div class="col-md-8 col-md-offset-1 nav">
            <ul class="col-md-6 col-xs-6 nav-item">
              <a href="#tab1" class="nav-link bg-primary" data-toggle="tab">
                <img class="lazy img-responsive nav-image" data-original="/images/title_parents.png" alt="保護者様" style="display: block;">
              </a>
            </ul>
            <ul class="col-md-6 col-xs-6 nav-item">
              <a href="#tab2" class="nav-link bg-primary" data-toggle="tab">
                <img class="lazy img-responsive nav-image" data-original="/images/title_kids.png" alt="お子様" style="display: block; opacity: 0.3;">
              </a>
            </ul>
          </div>
          <div class="tab-content">
            <div id="tab1" class="tab-pane active">
              <img class="lazy img-responsive" data-original="/images/schedule_parents.png?2110" alt="説明会スケジュール" style="display: block;">
            </div>
            <div id="tab2" class="tab-pane">
              <img class="lazy img-responsive" data-original="/images/schedule_kids.png" alt="説明会スケジュール" style="display: block;">
            </div>
          </div>
        </div>

          <!-- STEP2 -->
          <div id="step2" class="col-md-8 current-navi vertical-effect time-zone-wrapper" style="display:none;">
            <li class="">STEP2：<br>会場・時刻を選択</li>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 time-zone-content" style="margin-bottom:2.4em; padding-top: 0px;">
            <div class="loader"></div>
            <div class="time-zone-wrapper">
              <table class="time-zone" style="margin-top:0px;">
                <thead>
                  <tr>
                    <th>会場</th>
                    <th>開始</th>
                    <th>予約</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              <!-- TODO
                  span属性のcss
                  文字列のlengthによりレイアウトが崩れないこと
                  画面幅が変わった場合の動作
                -->
              </table>
            </div>
          </div>
          <div class="form-wrapper marginbot-50" style="display:none;">
            <!-- STEP3 -->
            <div id="step3" class="row col-md-8 current-navi vertical-effect time-zone-wrapper" style="padding-left:0px; display:none;">
              <li class="">STEP3：<br>お客様情報を登録</li>
            </div>

            <div class="row">
              <div class="form-group @if(!empty($errors->first('name'))) has-error @endif">
                <span class="label label-required">必須</span>{!! Form::label('name', '保護者のお名前') !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '保護者のお名前を入力してください', 'required' => 'required']) !!}
                @if(!empty($errors->first('name')))<span class="help-block">{{$errors->first('name')}}</span>@endif
              </div>
              <div class="form-group @if(!empty($errors->first('number'))) has-error @endif">
                <span class="label label-required">必須</span>{!! Form::label('number', '電話番号') !!}
                <input type="tel" name="number" class="form-control" size="11" maxlength="11" placeholder="電話番号を入力してください(ハイフン無し)" required="required" value="{{old('number')}}">
                @if(!empty($errors->first('number')))<span class="help-block">{{$errors->first('number')}}</span>@endif
              </div>
              <div class="form-group @if(!empty($errors->first('email'))) has-error @endif">
                <span class="label label-required">必須</span>{!! Form::label('email', 'Email') !!}
                <input type="email" id="email" name="email" class="form-control" placeholder="メールアドレスを入力してください" value="{{old('email') }}" required="required">
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
              <div class="form-group @if(!empty($errors->first('primary_attend'))) has-error @endif">
                <span class="label label-required">必須</span>{!! Form::label('primary_attend', '小学校名と在学状況') !!}
                  {!! Form::text('primary_attend', old('primary_attend'), ['class' => 'form-control', 'placeholder' => '例)  ○○小学校に来年4月から', 'required' => 'required']) !!}
                  @if(!empty($errors->first('primary_attend')))<span class="help-block">小学校名と在学状況は必須です</span>@endif
              </div>
              <div class="form-group @if(!empty($errors->first('email'))) has-error @endif">
                <span class="label label-required">必須</span>{!! Form::label('school', '通学をご検討中のスクール') !!}
                <?php
                  $array = array('' => '選択してください');
                  $select = [
                              null => $array
                            ];

                  foreach($schools as $row){
                    if(!isset($select[$row->pref]) ){
                      $select[$row->pref]  = array($row->id => 'KidsUP'.$row->school_name.'校');
                    }else{
                      $select[$row->pref] += array($row->id => 'KidsUP'.$row->school_name.'校');
                    }
                  }
                  $select += array('まだ決まっていない' => 'まだ決まっていない');
                ?>
                {!! Form::select('submit_school_id', $select, old('submit_school_id') , ['class' => 'form-control' , 'required' => 'required']) !!}
                @if(!empty($errors->first('submit_school_id')))<span class="help-block">{{$errors->first('submit_school_id')}}</span>@endif
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
                  内容の確認へ
              </button>

            </div>
            {{Form::hidden('submit_event_id', old('submit_event_id') , ['id' => 'submit_event_id'])}}
            {{Form::hidden('school_name_disp_hidden', old('school_name_disp') , ['id' => 'school_name_disp_hidden'])}}
            {{Form::hidden('time_disp_hidden', old('time_disp_hidden'), ['id' => 'time_disp_hidden'])}}
            {{Form::hidden('event_date_hidden', old('event_date_hidden') , ['id' => 'event_date_hidden'])}}
            <input type="hidden" name="schoolText" id="school_text">
            <input type="hidden" name="schoolArea" id="school_area">

          </div>

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<!-- Event Calendar jQuery-->
<script src="/js/event-calendar.js"></script>
<script>
var loadEventFlg = false;
var eventExists = null;

// カレンダー設定
$(function () {
  $('#top_tyui').hide();
  reload();

  //2019年夏休みの長期休暇のお知らせモーダル
  var now = new Date();
  var holiday_start = new Date('2023/01/01 00:00:00');
  var holiday_end   = new Date('2023/01/29 23:59:59');
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
      var sendObj = {'url':'/event/search','submit_school_id':$(".result_school input[type='checkbox']:checked").map(function(){return $(this).val();}).get()}
      var getEventdata = getSchedule(start.toISOString(),end.toISOString() ,sendObj);
      //Ajax戻り値を非同期のままで取得 @result:JSON
      getEventdata.done(function(result) {
        // #168 説明会が無い時、説明会がある月まで移動する
        if(!loadEventFlg && result.length == 0 && eventExists !== false){
          //今後、説明会が存在するか確認
          if(eventExists == null){
            var count = getSchedule(start.toISOString(),end.toISOString() ,{'url':'/event/searchExists','submit_school_id':$(".result_school input[type='checkbox']:checked").map(function(){return $(this).val();}).get()});
            count.done(function(result) {
              if(result == 0){
                eventExists   = false;
                loadEventFlg = true;
                $('.preparation').css({'display':'block'});             //blockでした
                $('.setting-calendar-area').css('display','none');
                $('.loading_modal').css({'display':'none'});
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
          $('.loading_modal').css({'display':'none'});
          if($('.result_school input:checkbox').is(':checked')){
            $('html,body').animate({scrollTop:$('.fc-view-container').offset().top- $('#kids-menu').height()});
          }
        }
      });
    },
    //イベントクリック時のアクション
    eventClick: function(calEvent, jsEvent, view) {
        $('.time-zone-wrapper').hide();
        $('.time-zone-content .loader').fadeIn(500);
        var sendObj = {'url':'/event/getSchedule','submit_school_id':$(".result_school input[type='checkbox']:checked").map(function(){return $(this).val();}).get()};
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
    if(result[i].count >= result[i].capacity){
      status = '満席'
      className  = 'select-disabled';
    }
    resultHtml += '<tr';
    resultHtml += ' class="';
    resultHtml += className;
    resultHtml += '"><td>';
    resultHtml +=  result[i].school_name;
    resultHtml += '</a></td><td>';
    resultHtml +=  result[i].time;
    resultHtml += '</a></td>';
    resultHtml += '</a></td><td>';
    if(status == '満席'){
      resultHtml += '満席';
    }else{
      if(result[i].taiken == 'off'){
        resultHtml += '<span class="btn btn-info btn-md" style="padding-top:5px; padding-bottom:5px; padding-left:15px; padding-right:15px; background:#ef8200; color:#fff;">予約(体験無)<i class="icon-arrow-circle-right"></i></span>';
      }else{
        resultHtml += '<span class="btn btn-info btn-md" style="padding-top:5px; padding-bottom:5px; padding-left:15px; padding-right:15px; background:#ef8200; color:#fff;">予約<i class="icon-arrow-circle-right"></i></span>';
      }
    }
    resultHtml += '</a></td>';
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
  $('#top_tyui').show();
  $('#step1').hide();
  $('#top_tyui2').hide();
  $('.time-zone-content').fadeIn(500 , function(){
    $('.time-zone-content .loader').hide();
    $('.time-zone-wrapper').fadeIn(500);
    $('html,body').animate({scrollTop:$('.time-zone').offset().top - $(window).height()*1/3 - $('#kids-menu').height()}); //画面スクロール
  });

}

//カレンダーにイベントスケジュールをセット
function setEventSchedule(result) {
  var events = result;
  $('#calendar').fullCalendar('removeEvents');
  $('#calendar').fullCalendar('addEventSource', events );
  loadEventFlg = true;
}
//スクール名クリックでカレンダーまでスクロール
$(document).on('change', '[name="schoolCheck"]', function(){
  $('.loading_modal').css({'display':'block'});
  loadEventFlg = false;
  eventExists = null;
  $('.preparation').css({'display':'none'});
  $('.setting-calendar-area').css('display','block')
  var monthGet = new Date().getMonth();
  var monthDisplay = $('#calendar').fullCalendar('getDate')['_d'].getMonth();
  if(monthGet == monthDisplay){
    checkResult();
  }else{
    $('#calendar').fullCalendar('today');
  }
  var checked =$('.result_school input:checked').length;
  if(checked == 0){
    var falseHTML ='<div class="no_check">チェックを入れてください</div>'
    $('.search_result').append(falseHTML);
  }else{
    $('.no_check').remove();
  }
});

//説明会の会場、時刻を選択したとき
$(document).on('click', '.time-zone td .btn', function(){

  //満席ならば終了
  if($(this).parents().hasClass('select-disabled')){
    return;
  }

  if(!$(this).parents().hasClass('active')){
    if($('table.time-zone tr').hasClass('active')) {
      $('table.time-zone tr').removeClass('active');
      $('table.time-zone tr').removeClass('disable-effect');
      $('.time-zone-wrapper .btn').html('予約<i class="icon-arrow-circle-right"></i>');
    }
    $($(this).parents()[1]).addClass('active'); //ハイライトつける
    $(this).html('選択中<i class="icon-arrow-circle-right"></i>');
    $(this).parents('tr').siblings().toggleClass('disable-effect');  //他の時刻をグレーに

    $('.marginbot-50').addClass('appear-effect-no-wait');
    $('.time-zone-content').css('z-index','1000'); //会場、時刻を再入力できるように
    $('.fc-toolbar button[type="button"]').css('z-index','1000');
    $('.marginbot-50').delay(100).queue(function() {
      $(this).css('display', 'block');
        $('html,body').animate({scrollTop:$('[name="name"]').offset().top - $(window).height()*1/3 - $('#kids-menu').height()}); //画面スクロール
    });
//    $('.marginbot-50').addClass('appear-effect-no-wait');
//    $('.disappear-effect').delay(800).queue(function() {
//      $(this).css('display','none');
//    });
  }

  var submit_event_id = $(this).parents()[1].children[3].value;  //選択した説明会のevent_id
  var school_name_disp = "KidsUP" + $(this).parents()[1].children[4].value; //選択したスクール名
  var date_disp = $(this).parents()[1].children[5].value; //選択した日付
  var time_disp = $(this).parents()[1].children[6].value; //選択した時間
  var date_hidden = $(this).parents()[1].children[7].value; //選択した日付

  $('#time_disp').html(date_disp + ' ' + time_disp); //選択した日付、時刻をセット
  $('#submit_event_id').val(submit_event_id);
  $('#school_name_disp_hidden').val(school_name_disp);
  $('#time_disp_hidden').val(date_disp + ' ' + time_disp);
  $('#event_date_hidden').val(date_hidden);

  $('#step2').hide();

  var adjust = -200;
  $('.result-content').delay(100).fadeIn(1000, function() {
    var position = $('.result-content').offset().top + adjust;
    $('html, body').animate({
      scrollTop: position
    }, 500);
    return false;
  });

  //個人情報入力フォームを表示


  //日程のHTMLテキストをセッションに格納 ※戻る対策
  sessionStorage.setItem('time-zone-tbody', $('.time-zone tbody').html());

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

    $('.time-zone tbody').append(sessionStorage.getItem('time-zone-tbody')); //選択済みの説明会情報をセット
    $('.kids-arrow').hide();
    $('.time-zone-content').fadeIn(500 , function(){
      $('.time-zone-content .loader').hide();
      $('.time-zone-wrapper').fadeIn(500);
    });
    $('.marginbot-50').css('display', 'block');

  }

}

  //クリックしていない画像を薄く
  $('.nav-image').on('click', function() {
    $('.nav-image').css('opacity','0.3');
    $(this).css('opacity','1');
  });

//json取得
var jsonSchoolget = function() {
  $.ajax( {
      url: '/v1/getschooljson',
      type: 'GET',
      dataType : 'text',
      success: function(data) {
        schoolTxtData = data;
        $('#school_text').val(schoolTxtData);
      },
      error: function( data ) {
        console.log('通信エラー');
      }
  });
}
var jsonAreaget = function() {
  $.ajax( {
      url: '/v1/getprefcity',
      type: 'GET',
      dataType : 'text',
      success: function(data) {
        schoolAreaData = data;
        $('#school_area').val(schoolAreaData);
      },
      error: function( data ) {
        console.log('通信エラー');
      }
  }).done(function(){
      var areaJson = JSON.parse($('#school_area').val());
      for (var key in areaJson) {
        $('#select-pref').append('<option value="'+key+'">'+key+'</option>');
      }
      $('#select-pref').on('change', function() {
        $('#select-city option:nth-child(n+2)').remove(); // ※1 市区町村フォームクリア
        var select_pref = $('#select-pref option:selected').val();
        for(var i=0; i<areaJson[select_pref].length; i++) {
              $('#select-city').append('<option value="'+areaJson[select_pref][i]+'">'+areaJson[select_pref][i]+'</option>');
            }
      });
  });
}
$(function(){
  var getJsonFunc = $(function(){
    jsonSchoolget();
    jsonAreaget();
  });
});

//都道府県選択後スクール表示
$('#select-pref').change(function() {
  var schoolJson = JSON.parse($('#school_text').val());
  $('.preparation').css({'display':'none'});
  $('.result_school ul').remove();
  $('.search_result .list-btn').remove();
  $('.no_check').remove();
  $('.setting-calendar-area').css('display','block');
  schoolJsonLen = schoolJson.length;
  var schoolHTML = '<ul>';
  var schoolCount = 0;
  for(var i=0; i<schoolJsonLen; i++){
    var schoolId = schoolJson[i].school_id;
    var schoolAddr = schoolJson[i].addr01;
    var schoolName = schoolJson[i].school_name;
    if(schoolAddr.indexOf($('#select-pref option:selected').text())> -1){
      schoolCount = schoolCount+1;
      schoolHTML += '<li><input type="checkbox" id="result'+ schoolId + '" name="schoolCheck" value='+ schoolId + ' />'
      schoolHTML += '<label for="result'+ schoolId + '"/ > '+ schoolName + '</label>';
      schoolHTML += '<input type="hidden" value="'+ schoolId + '"></li>';
    }
  }
  schoolHTML += '</ul>';
  $('.result_school').append(schoolHTML);
  if(schoolCount <= 1){
    $('.result_school input:checkbox').prop('checked', true);
    $('.loading_modal').css({'display':'block'});
    loadEventFlg = false;
    eventExists = null;
    $('.preparation').css({'display':'none'});
    $('.setting-calendar-area').css('display','block')
    var monthGet = new Date().getMonth();
    var monthDisplay = $('#calendar').fullCalendar('getDate')['_d'].getMonth();
    if(monthGet == monthDisplay){
      checkResult();
    }else{
      $('#calendar').fullCalendar('today');
    }
  }
  if (schoolCount >= 10){
    manySchool();
  }
});
//市区町村選択後スクールを表示
$('#select-city').change(function() {
  var schoolJson = JSON.parse($('#school_text').val());
  $('.preparation').css({'display':'none'});
  $('.result_school ul').remove();
  $('.search_result .list-btn').remove();
  $('.setting-calendar-area').css('display','block');
  $('.no_check').remove();
	schoolJsonLen = schoolJson.length;
  var schoolHTML = '<ul>';
  var schoolCount = 0;
	for(var i=0; i<schoolJsonLen; i++){
    var schoolId = schoolJson[i].school_id;
		var schoolAddr = schoolJson[i].addr01;
		var schoolName = schoolJson[i].school_name;
    if(schoolAddr.indexOf($('#select-city option:selected').text())> -1){
      schoolCount = schoolCount+1;
      schoolHTML += '<li><input type="checkbox" id="result'+ schoolId + '" name="schoolCheck" value='+ schoolId + ' />'
      schoolHTML += '<label for="result'+ schoolId + '"/ > '+ schoolName + '</label>';
      schoolHTML += '<input type="hidden" value="'+ schoolId + '"></li>';
    }
  }
  schoolHTML += '</ul>';
  $('.result_school').append(schoolHTML);
  if(schoolCount <= 1){
    $('.result_school input:checkbox').prop('checked', true);
    $('.loading_modal').css({'display':'block'});
    loadEventFlg = false;
    eventExists = null;
    $('.preparation').css({'display':'none'});
    $('.setting-calendar-area').css('display','block')
    var monthGet = new Date().getMonth();
    var monthDisplay = $('#calendar').fullCalendar('getDate')['_d'].getMonth();
    if(monthGet == monthDisplay){
      checkResult();
    }else{
      $('#calendar').fullCalendar('today');
    }
  }
  if (schoolCount >= 10){
    manySchool();
  }
});
//検索ボタンクリック後テキスト部分一致検索
$('#kensaku').on('click', function() {
  var schoolJson = JSON.parse($('#school_text').val());
  $('.result_school ul').remove();
  $('.setting-calendar-area').css('display','block')
  $('.search_result .list-btn').remove();
  $('.no_check').remove();
  $('.preparation').css({'display':'none'});
  schoolJsonLen = schoolJson.length;
  var schoolHTML = '<ul>';
  var schoolCount = 0;
  for(var i=0; i<schoolJsonLen; i++){
    var schoolId = schoolJson[i].school_id;
    var schoolAddr = schoolJson[i].addr01;
    var schoolName = schoolJson[i].school_name;
    var freeWord = schoolJson[i].freeword;
    if(freeWord.indexOf($('#free').val())> -1){
      schoolCount = schoolCount+1;
      schoolHTML += '<li><input type="checkbox" id="result'+ schoolId + '" name="schoolCheck" value='+ schoolId + ' />'
      schoolHTML += '<label for="result'+ schoolId + '"/ > '+ schoolName + '</label>';
      schoolHTML += '<input type="hidden" value='+schoolId+'></li>';
    }
  }
  if(schoolCount <= 0){
    $('.result_school ul').remove();
    schoolHTML +='<li>検索結果が見つかりません</li>';
  }
  schoolHTML += '</ul>';
  $('.result_school').append(schoolHTML);
  if(schoolCount == 1){
    $('.result_school input:checkbox').prop('checked', true);
    $('.loading_modal').css({'display':'block'});
    loadEventFlg = false;
    eventExists = null;
    $('.preparation').css({'display':'none'});
    $('.setting-calendar-area').css('display','block')
    var monthGet = new Date().getMonth();
    var monthDisplay = $('#calendar').fullCalendar('getDate')['_d'].getMonth();
    if(monthGet == monthDisplay){
      checkResult();
    }else{
      $('#calendar').fullCalendar('today');
    }
  }
  if (schoolCount >= 10){
    manySchool();
  }
});
//入力のみで結果表示
function searchValue($this) {
  var schoolJson = JSON.parse($('#school_text').val());
  $('.setting-calendar-area').css('display','block')
  $('.result_school ul').remove();
  $('.search_result .list-btn').remove();
  $('.no_check').remove();
  $('.preparation').css({'display':'none'});
  schoolJsonLen = schoolJson.length;
  var schoolHTML = '<ul>';
  var schoolCount = 0;
  for(var i=0; i<schoolJsonLen; i++){
    var schoolId = schoolJson[i].school_id;
    var schoolAddr = schoolJson[i].addr01;
    var schoolName = schoolJson[i].school_name;
    var freeWord = schoolJson[i].freeword;
    if(freeWord.indexOf($('#free').val())> -1){
      schoolCount = schoolCount+1;
      schoolHTML += '<li><input type="checkbox" id="result'+ schoolId + '" name="schoolCheck" value='+ schoolId + ' />'
      schoolHTML += '<label for="result'+ schoolId + '"/ > '+ schoolName + '</label>';
      schoolHTML += '<input type="hidden" value='+schoolId+'></li>';
    }
  }
  if(schoolCount <= 0){
    $('.result_school ul').remove();
    schoolHTML +='<li>検索結果が見つかりません</li>';
  }
  schoolHTML += '</ul>';
  $('.result_school').append(schoolHTML);
  if(schoolCount == 1){
    $('.result_school input:checkbox').prop('checked', true);
    $('.loading_modal').css({'display':'block'});
    loadEventFlg = false;
    eventExists = null;
    $('.preparation').css({'display':'none'});
    $('.setting-calendar-area').css('display','block')
    var monthGet = new Date().getMonth();
    var monthDisplay = $('#calendar').fullCalendar('getDate')['_d'].getMonth();
    if(monthGet == monthDisplay){
      checkResult();
    }else{
      $('#calendar').fullCalendar('today');
    }
  }
  if (schoolCount >= 10){
    manySchool();
  }
}
//検索結果をチェック後、スクール表示と
function checkResult (){
  $('.setting-calendar-area').css('display','block')
  var checkedSchool = $(".result_school input[type='checkbox']:checked").map(function(){return $(this).val();}).get();
  var checkedSchoolLen = checkedSchool.length;
  var IdSend = checkedSchool.map(Number);
  var sendObj = {'url':'/event/search','submit_school_id':IdSend}
  function formatDate(dt) {
    var y = dt.getFullYear();
    var m = ('00' + (dt.getMonth()+1)).slice(-2);
    var d = ('00' + dt.getDate()).slice(-2);
    return (y + '-' + m + '-' + d);
  }
  var date = new Date();
  var dateStart = new Date(date.getFullYear(), date.getMonth(), 1);
  var dateEnd = new Date(date.getFullYear(), date.getMonth() + 1, 0);
  var getEventdata = getSchedule(formatDate(dateStart),formatDate(dateEnd) ,sendObj);
//Ajax戻り値を非同期のままで取得
  getEventdata.done(function(result) {
    var resultLen = result.length;
    if (resultLen == 0){
      $('.fc-next-button').click(); //1か月進める
    }else{
      setEventSchedule(result);
      $('.loading_modal').css({'display':'none'});
      $('html,body').animate({scrollTop:$('.fc-view-container').offset().top- $('#kids-menu').height()});
    }
  })
};
//検索結果が10個以上の時
function manySchool(){
  btnHTML = '  <div class="list-btn"><button>もっと見る</button></div>';
  $('.search_result').append(btnHTML);
  $('.list-btn').css({'display':'block'});
  var moreNum = 10;
  $('.result_school li:nth-child(n + ' + (moreNum + 1) + ')').addClass('is-hidden');
  $('.list-btn').on('click', function() {
    $('.result_school li.is-hidden').slice(0, moreNum).removeClass('is-hidden');
    if ($('.result_school li.is-hidden').length == 0) {
      $('.list-btn').fadeOut();
    }
  });
  $(function() {
    var list = $(".result_school li").length;
    if (list < moreNum) {
      $('.list-btn').addClass('is-btn-hidden');
    }
  });
};

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
