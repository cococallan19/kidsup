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

<header id="kids-hero" class="lower-pages news-detail" data-section="home" role="banner">

  <div class="kids-overlay"></div>
  <div class="kids-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 kids-section-heading old_kids-section-heading text-center">
          <h2 class="kids-lead"><img src="/images/title_news_w.png" class="img-responsive" alt="タイトル：お知らせ"></h2>
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
              お探しのページは見つかりませんでした
              <br>
            </p>
      </div>
    </div>
  </div>
</div>


@endsection
