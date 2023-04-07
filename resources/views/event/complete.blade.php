@extends('layouts.layout')

@section('meta')
<title>説明会へのご参加を受付ました | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
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


<div id="kids-form"  data-section="form">
  <div class="container">
    <div class="row">
      <div class="col-md-12 kids-section-heading-img old_kids-section-heading text-center">
            <h3>説明会へのご予約が完了しました</h3>

            <p class="kids-sub">
              ご予約ありがとうございます。<br />
              別途、アンケートメールを送付いたしますのでご回答ください。<br />
              ご指定頂いた日時でのお越しをお待ちしております。

            </p>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <a href="/" class="btn btn-primary btn-md" id="btnContactUs">
            TOPページへ戻る</a>
      </div>


        </div>
     </div>
</div>

<style>
.content_bar button {
  display: none;
}
</style>





@endsection
