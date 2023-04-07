@extends('layouts.layout')

@section('meta')
<title>お問い合わせが完了しました | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
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
      <div class="col-md-12 kids-section-heading　old_kids-section-heading text-center">
        <h3>お問い合わせが完了しました</h3>
            <p class="kids-sub">
              ご入力いただいた内容が正しく送信されました。<br />
              担当者よりあらためてご連絡いたしますので、今しばらくお待ちください。<br />
              引き続きKidsUPをよろしくお願いします。<br />

            </p>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <a href="/" class="btn btn-primary btn-md" id="btnContactUs">
            TOPページへ戻る</a>
      </div>


        </div>
     </div>
</div>






@endsection
