@extends('layouts.layout')

@section('meta')
<title>資料請求 | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/bg_8.jpg) top left; background-size: cover;" >
  <div class="kids-overlay"></div>
  <div class="kids-intro">
    <div class="container">
      <div class="row">



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
      <div class="col-md-12 kids-section-heading text-center">

            <h2 class="kids-lead"><img src="/images/title_request.png" alt="タイトル：資料請求"></h2>
            <p class="kids-sub">
              当スクールの資料ご請求に関しては、以下のフォームに入力の上、送信ください。<br />
              後日、パンフレットを無料でお届けいたします。<br />
              また、担当営業よりご連絡させていただく場合もございますので予めご了承くださいませ。<br />
            </p>

      </div>
      <div class="col-lg-8 col-md-offset-2">
          <div class="form-wrapper marginbot-50">
              {!! Form::open(['id' => 'contact-form']) !!}
              <div class="row">

                      <div class="form-group">
                        <span class="label label-required">必須</span>{!! Form::label('name', 'お名前') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'お名前', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        <span class="label label-premium">任意</span>{!! Form::label('number', '電話番号') !!}
                        {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => '電話番号']) !!}
                      </div>
                      <div class="form-group">
                        <div class="form-box box3">
                        <span class="label label-required">必須</span>{!! Form::label('zip', '郵便番号') !!}<span class="small">（ハイフンなし）</span>
                        {!! Form::text('zip', null, ['class' => 'form-control', 'placeholder' => '郵便番号','maxlength' => '7' , 'required' => 'required']) !!}
                        </div>
                        <div class="form-box box7">
                          <span class="label label-required">必須</span>{!! Form::label('address', '住所') !!}
                          {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => '住所', 'required' => 'required']) !!}
                        </div>

                      </div>
                      <div class="form-group">
                        <span class="label label-required">必須</span>{!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','id' => 'email', 'placeholder' => 'Email', 'required' => 'required']) !!}
                      </div>



                      <div class="form-group">

                          <span class="label label-required">必須</span>{!! Form::label('name', '内容') !!}
                          {!! Form::textarea('body', null ,array('rows'=>'9','cols' => '25','class'=>'form-control','id' => 'message','placeholder'=>'お問い合わせ内容を入力してください','required' => 'required')) !!}
                      </div>


                      <button type="submit" class="btn btn-primary btn-md" id="btnContactUs">
                          送信する</button>

              </div>
              {!! Form::close() !!}

          </div>

      </div>


        </div>
     </div>
</div>






@endsection
