@inject('ConvertToWareki', 'App\Http\Library\ConvertToWareki')
@extends('layouts.layout')

@section('meta')
<title>お問い合わせ | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
<meta name="robots" content="noindex">
@include('layouts.social')
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/bg_4.jpg) top left; background-size: cover;" >
  <div class="kids-overlay"></div>
  <div class="kids-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-12 kids-section-heading-img text-center">
          <h2 class="kids-lead"><img src="/images/title_session_w.png" alt="タイトル：説明会の参加"></h2>
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
      <div class="col-md-12 kids-section-heading-old text-center" style="margin-bottom:50px;">
            <h3>無料体験参加者アンケート</h3>
      </div>
      <div class="col-lg-8 col-md-offset-2">
          <div class="form-wrapper marginbot-50">
              {!! Form::open(['id' => 'contact-form' , 'url' => '/event/reply']) !!}
              <div class="row">

                <div class="form-group @if(!empty($errors->first('gender'))) has-error @endif">
                  <span class="label label-required">必須</span>{!! Form::label('gender', 'お子様の性別') !!}
                  <div class="form-layout">
                    <select id="gender" name="gender" class="form-control" required="required">
                      <option value="">-</option>
                      <option value="男" @if('男' == old('gender')) selected @endif>男</option>
                      <option value="女" @if('女' == old('gender')) selected @endif>女</option>
                    </select>
                  </div>
                </div>

                <div class="form-group @if(!empty($errors->first('english'))) has-error @endif">
                  <span class="label label-required">必須</span>{!! Form::label('english', '英語経験の有無') !!}
                  <div class="form-layout">
                    <select id="english" name="english" class="form-control" required="required">
                      <option value="">-</option>
                      <option value="有" @if('有' == old('english')) selected @endif>あり</option>
                      <option value="無" @if('有' == old('english')) selected @endif>なし</option>
                    </select>
                  </div>
                </div>

                <div class="form-group form-hidden @if(!empty($errors->first('english_detail'))) has-error @endif">
                  <span class="label label-premium">任意</span>{!! Form::label('english_detail', '英語経験') !!}
                  <div class="form-layout">
                    {!! Form::text('english_detail', old('english_detail'), ['class' => 'form-control', 'placeholder' => '例）4歳から2年3ヵ月']) !!}
                  </div>
                </div>

                <div class="form-group @if(!empty($errors->first('attendance'))) has-error @endif">
                  <span class="label label-premium">任意</span>{!! Form::label('attendance', '在園・在学状況') !!}
                  <div class="form-layout">
                    <select id="attendance" name="attendance" class="form-control">
                      <option value="">-</option>
                      <option value="保育園" @if('保育園' == old('attendance')) selected @endif>保育園に通っている</option>
                      <option value="幼稚園" @if('幼稚園' == old('attendance')) selected @endif>幼稚園に通っている</option>
                      <option value="小学校" @if('小学校' == old('attendance')) selected @endif>小学校に通っている</option>
                      <option value="未就園・未就学" @if('未就園・未就学' == old('attendance')) selected @endif>未就園・未就学</option>
                    </select>
                  </div>
                </div>

                <div class="form-group @if(!empty($errors->first('attendance_detail'))) has-error @endif">
                  <span class="label label-required">必須</span>{!! Form::label('attendance_detail', '在園・在学先') !!}
                  <div class="form-layout">
                    {!! Form::text('attendance_detail', old('attendance_detail'), ['class' => 'form-control', 'placeholder' => '例）●●幼稚園（に来年4月から）', 'required' => 'required']) !!}
                  </div>
                </div>

                <div class="form-group @if(!empty($errors->first('start'))) has-error @endif">
                  <span class="label label-premium">任意</span>{!! Form::label('start', '利用開始を希望する時期') !!}
                  <div class="form-layout">
                    {!! Form::text('start', old('start'), ['class' => 'form-control', 'placeholder' => '例）空きがあればすぐにでも、 10月から']) !!}
                  </div>
                </div>

                <div class="form-group @if(!empty($errors->first('participat_count'))) has-error @endif">
                  <span class="label label-premium">任意</span>{!! Form::label('participat_count', '説明会への参加人数') !!}
                  <div class="form-layout">
                    <select id="participat_count" name="participat_count" class="form-control">
                      <option value="">-</option>
                      <option value="1" @if('1' == old('participat_count')) selected @endif>1</option>
                      <option value="2" @if('2' == old('participat_count')) selected @endif>2</option>
                      <option value="3" @if('3' == old('participat_count')) selected @endif>3</option>
                      <option value="4" @if('4' == old('participat_count')) selected @endif>4</option>
                      <option value="5" @if('5' == old('participat_count')) selected @endif>5</option>
                    </select>
                  </div>
                </div>

                <div class="form-group @if(!empty($errors->first('participat_detail'))) has-error @endif">
                  <span class="label label-premium">任意</span>{!! Form::label('participat_detail', '参加者について') !!}
                  <div class="form-layout">
                    {!! Form::text('participat_detail', old('participat_detail'), ['class' => 'form-control', 'placeholder' => '例）両親で参加、 母親と1歳の弟も参加']) !!}
                  </div>
                </div>

                <div class="form-group @if(!empty($errors->first('route'))) has-error @endif">
                  <span class="label label-required">必須</span>{!! Form::label('route', '申込のきかっけ') !!}
                  <div class="form-layout">
                    <select id="route" name="route" class="form-control" required="required">
                      <option value="">-</option>
                      <option value="チラシ" @if('チラシ' == old('route')) selected @endif>チラシ</option>
                      <option value="口コミ" @if('口コミ' == old('route')) selected @endif>口コミ(紹介)</option>
                      <option value="HP" @if('HP' == old('route')) selected @endif>ホームページ</option>
                      <option value="Web広告" @if('Web広告' == old('route')) selected @endif>Web広告</option>
                      <option value="看板バス" @if('看板バス' == old('route')) selected @endif>看板・バスをみて</option>
                      <option value="手配り資料" @if('手配り資料' == old('route')) selected @endif>手配り資料を受け取って</option>
                      <option value="その他" @if('その他' == old('route')) selected @endif>その他</option>
                    </select>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-md submit_button" id="btnContactUs">
                    アンケートを送信</button>

              </div>
              <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}"> <!-- トークンをセット -->
              <input type="hidden"            name="hash_id" value="{{ $reservation->hash_id }}"> <!-- トークンをセット -->

              {!! Form::close() !!}

          </div>

      </div>

        </div>
     </div>
</div>
@endsection

@section('js')
<script>
  // 英語経験欄の表示 / 非表示
  $(function () {
    showHide();
  });

  $('#english').change(function() {
    showHide();
  });

  function showHide(){
    if($('#english').val() == '有'){
      $('.form-hidden').addClass('show');
    } else {
      $('.form-hidden').removeClass('show');
    }
  }
</script>
@endsection
