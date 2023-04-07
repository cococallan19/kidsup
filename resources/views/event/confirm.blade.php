@extends('layouts.layout')

@section('meta')
<title>説明会への予約確認 | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
@include('layouts.social')
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/bg_5.jpg) top left; background-size: cover;" >
  <!-- <div class="kids-overlay"></div> -->
  <div class="kids-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-12 kids-section-heading-img old_kids-section-heading text-center">
          <h2 class="kids-lead" style="top:150px;"><img src="/images/title_session_w.png" alt="タイトル：説明会の参加"></h2>
        </div>
      </div>

    </div>



  </div>
</header>
<!-- END .header -->
@endsection

@section('content')


<div id="kids-form"  data-section="form">
  <div class="container">
    <div class="row">
      <div class="col-md-12 kids-section-heading-img old_kids-section-heading text-center">

            <h3>説明会への予約確認</h3>
      </div>
      {!! Form::open(['id' => 'contact-form' , 'url' => '/event/complete']) !!}
      <div class="col-lg-8 col-md-offset-2">
        <table class="table kids-session">
          <thead>
            <tr><th>通学をご検討中のスクール</th><th>説明会場</th><th>参加日程</th></tr>
          </thead>
          <tbody>
            <tr><td>KidsUP{{$data['school_name']}}校</td><td>{{$data['school_name_disp_hidden']}}</td><td>{{$data['time_disp_hidden']}}</td></tr>
          </tbody>
        </table>
          <div class="form-wrapper marginbot-50">

              <div class="row">
                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-required">必須</span>{!! Form::label('name', '保護者のお名前') !!}
                        </div>
                        <div class="col-lg-8">
                        {{$data['name']}}
                        {{ Form::hidden('name', $data['name']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-required">必須</span>{!! Form::label('number', '電話番号') !!}
                        </div>
                        <div class="col-lg-8">
                          {{$data['number']}}
                          {{ Form::hidden('number', $data['number']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-required">必須</span>{!! Form::label('email', 'Email') !!}
                        </div>
                        <div class="col-lg-8">
                          {{$data['email']}}
                          {{ Form::hidden('email', $data['email']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-required">必須</span>{!! Form::label('name', 'お子様のお名前') !!}
                        </div>
                        <div class="col-lg-8">
                        {{$data['name_child']}}
                        {{ Form::hidden('name_child', $data['name_child']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-required">必須</span>{!! Form::label('name', 'お子様の生年月日') !!}
                        </div>
                        <div class="col-lg-8">
                        {{$data['year']}}年{{$data['month']}}月{{$data['day']}}日
                        {{ Form::hidden('birth', $data['year'].'-'.$data['month'].'-'.$data['day']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-required">必須</span>{!! Form::label('kinder_attend', '保育園・幼稚園名と在園状況') !!}
                        </div>
                        <div class="col-lg-8">
                        {{$data['kinder_attend']}}
                        {{ Form::hidden('kinder_attend', $data['kinder_attend']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-required">必須</span>{!! Form::label('primary_attend', '小学校名と在学状況') !!}
                        </div>
                        <div class="col-lg-8">
                        {{$data['primary_attend']}}
                        {{ Form::hidden('primary_attend', $data['primary_attend']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-premium">任意</span>{!! Form::label('start_season', 'ご希望の利用開始時期') !!}
                        </div>
                        <div class="col-lg-8">
                        {{$data['start_season']}}
                        {{ Form::hidden('start_season', $data['start_season']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-premium">任意</span>{!! Form::label('trigger', '申し込みのきっかけ') !!}
                        </div>
                        <div class="col-lg-8">
                        {{$data['trigger']}}
                        {{ Form::hidden('trigger', $data['trigger']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-premium">任意</span>{!! Form::label('name', '本文') !!}
                        </div>
                        <div class="col-lg-8">
                          {{$data['body']}}
                          {{ Form::hidden('body', $data['body']) }}
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <button type="submit" name="action" class="btn btn-info btn-md" id="btnBack" value="back">
                            戻る</button>
                      </div>
                      <div class="col-lg-6">
                      <button type="submit" name="action" class="btn btn-primary btn-md submit_button" id="btnContactUs" value="post">
                          送信する</button>
                      </div>

              </div>

              {{ Form::hidden('submit_school_id', $data['submit_school_id']) }}
              {{ Form::hidden('submit_event_id', $data['submit_event_id']) }}
              {{Form::hidden('school_name_disp_hidden', $data['school_name_disp_hidden'], ['id' => 'school_name_disp_hidden'])}}
              {{Form::hidden('time_disp_hidden', $data['time_disp_hidden'] , ['id' => 'time_disp_hidden'])}}
              {{Form::hidden('event_date_hidden', $data['event_date_hidden'] , ['id' => 'event_date_hidden'])}}
              {{Form::hidden('referer', $data['referer'])}}

          </div>

      </div>
      {!! Form::close() !!}

        </div>
     </div>
</div>

<style>
.content_bar button {
  display: none;
}
</style>




@endsection
