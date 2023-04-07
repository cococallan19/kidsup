@extends('layouts.layout')

@section('meta')
<title>Kids UP モデルについて | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
<script>
fbq('track', 'CompleteModel');
</script>
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/bg_6.jpg) top left; background-size: cover;" >
  <div class="kids-overlay"></div>
  <div class="kids-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 kids-section-heading old_kids-section-heading text-center">
          <h2 class="kids-lead"><img src="/images/title_model_w.png" class="img-responsive" alt="タイトル：Kids UP モデルについて"></h2>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- END .header -->
@endsection


@section('content')
{{-- ▼ここから --}}

<div id="kids-model"  data-section="form">
  <div class="container">
    <div class="row">
    </div>
  </div>

  <div class="model-entry-form-complete">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 kids-section-heading old_kids-section-heading text-center">
          <h2 class="kids-lead"><img src="/images/title_model_entry_form.png" class="img-responsive" alt="タイトル：エントリーフォーム"></h2>
        </div>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
          <p class="kids-sub">
            ご入力いただいた内容が正しく送信されました。<br />
            選考後、担当者よりあらためてご連絡いたしますので、今しばらくお待ちください。<br />
          </p>
          <h3>モデルエントリーが完了しました</h3>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <a href="/" class="btn btn-complete btn-md" id="btnContactUs">
              TOPページへ戻る</a>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- ▲ここまで --}}
@endsection
