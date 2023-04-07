@extends('layouts.layout')

@section('meta')
<title>求人について | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
@include('layouts.social')
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/bg_7.jpg) top left; background-size: cover;" >
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


<div id="kids-recruit"  data-section="form">
  <div class="container">
    <div class="row">
      <div class="col-md-12 kids-section-heading text-center">

            <h2 class="kids-lead"><img src="/images/title_recruitment.png" class="img-responsive" alt="タイトル：求人について"></h2>
            <p class="kids-sub">
              KidsUP（キッズアップ）では事業拡大につき、スタートメンバーとして、事業とともにご自身も成長したい方を募集いたします。<br />
              英語で行う学童保育の新規事業に参画したいという熱い思いを持った皆さんからのご応募を、心よりお待ちしております。
            </p>

      </div>
      <div class="col-lg-8 col-md-offset-2">
        <ul id="recruit-menu">
          <li>スクールマネージャー</li>
          <li>ネイティブティーチャー</li>
          <li>バイリンガルスタッフ</li>
        </ul>
      </div>
      <div class="col-lg-8 col-md-offset-2">
        <ul class="kids-list-recruit">
          <li>年収：<strong>契約内容に応じて</strong></li>
          <li>雇用形態：<strong>業務委託、契約社員、アルバイト</strong></li>
          <li>採用予定人数：<strong>一定数</strong></li>
        </ul>
        <table class="table">
          <tr><th>勤務地</th><td>
            田園調布、蒲田に2校開校予定<br />
            その後も続々と開校を計画中！<br />
            2021年には東京神奈川を中心に70校を開校予定です。<br />
          <br />
          <h4>【詳細・交通】</h4>
          <p>東京・神奈川近郊に続々開校を予定しております。</p>
          </td></tr>
          <tr><th>仕事内容</th><td>
            <ul>
              <li>新事業・新規スクールのスタートメンバー</li>
              <li>万全の研修・教育制度</li>
            </ul>

            <br />
            2016年春にスタートする『英語で行う学童保育』をテーマとした新しい形の英会話スクールの英語スタッフとしてご活躍下さい！
          </td></tr>
          <tr><th>応募資格</th><td>
            <h4>【必須要件】</h4>
            <ul>
              <li>高卒以上</li>
            </ul>
            <h4>【優遇されるスキル・経験】</h4>
            <ul>
              <li>英語講師としての実務未経験・第二新卒・UIターン全て歓迎</li>
              <li>経験者の方は優遇します</li>
            </ul>
            <h4>【選考のポイント】</h4>
            <ul>
              <li>子どもが好き、コミュニケーション能力に自信がある方</li>
              <li>明るく元気に仕事に取り組める、ものごとをポジティブに考えられる</li>
            </ul>
          </td></tr>
        </table>

      </div>
      <div class="col-md-4 col-md-offset-4 text-center">
        <a href="/inquiry" class="btn btn-primary btn-md">エントリーはこちら <i class="icon-arrow-circle-right"></i></a>
      </div>



        </div>
     </div>
</div>

  @include('parts.inqury')








@endsection
