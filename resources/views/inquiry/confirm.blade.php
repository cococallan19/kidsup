@extends('layouts.layout')

@section('meta')
<title>お問い合わせ内容の確認 | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
@include('layouts.social')
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/bg_5.jpg) top center; background-size: cover;" >
  <!-- <div class="kids-overlay"></div> -->
  <div class="kids-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-12 kids-section-heading old_kids-section-heading text-center">
          <h2 class="kids-lead" style="top:150px;"><img src="/images/title_inquiry_w.png" alt="タイトル：お問い合わせ"></h2>
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
      <div class="col-md-12 kids-section-heading old_kids-section-heading text-center">

            <p class="kids-sub">
              お問い合わせ内容をご確認下さい。
            </p>
            <h3>お問い合わせ内容の確認</h3>
      </div>
      <div class="col-lg-8 col-md-offset-2">
          <div class="form-wrapper marginbot-50">
              {!! Form::open(['id' => 'contact-form' , 'url' => '/inquiry/complete']) !!}
              <div class="row">
                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-required">必須</span>{!! Form::label('school', 'お問い合わせ先') !!}
                        </div>
                        <div class="col-lg-8">
                        {{$data['school']}}
                        {{ Form::hidden('school', $data['school']) }}
                        </div>
                      </div>
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
                          <span class="label label-required">必須</span>{!! Form::label('tel', '電話番号') !!}
                        </div>
                        <div class="col-lg-8">
                          {{$data['tel']}}
                          {{ Form::hidden('tel', $data['tel']) }}
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
                          <span class="label label-premium">任意</span>{!! Form::label('attend', '幼稚園・学校名') !!}
                        </div>
                        <div class="col-lg-8">
                        {{$data['attend']}}
                        {{ Form::hidden('attend', $data['attend']) }}
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-lg-4">
                          <span class="label label-required">必須</span>{!! Form::label('name', '本文') !!}
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
              {!! Form::close() !!}

          </div>

      </div>


        </div>
     </div>
</div>






@endsection
