@extends('layouts.layout')

@section('meta')
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。">
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール">
<title>学童保育型英会話スクール - KidsUP（キッズアップ）</title>
@endsection

@section('intro')
<!-- Section: intro -->
  <section id="intro" class="intro">

  <div class="slogan">
    <a href="/"><img src="/img/logo2.png" alt="" /></a>
  </div>
  <div class="page-scroll">
    <a href="#about">
      <i class="fa fa-angle-down fa-5x animated"></i>
    </a>
  </div>
  <div class="wow fadeInLeftBig cloud-info" data-wow-delay="0.3s">
      <img src="/img/info_open.png" alt="">
  </div>
  </section>
<!-- /Section: intro -->
@endsection

@section('content')

<!-- Section: about -->
  <section id="about" class="home-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">

          <div class="section-heading text-center">
          <div class="wow bounceInDown" data-wow-delay="0.2s">
            <h2><img src="/img/h_title_01.png"></h2>
          </div>
          <p class="sub__title wow bounceInUp" data-wow-delay="0.3s">学童保育型英会話スクール・幼児クラス</p>
          </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <img src="/img/img1.jpg" class="img-responsive img-rounded" alt="" />
      </div>
      <div class="col-md-6">
        <p>
          Kids UPは学童保育（小1～小6）、プリスクール（3歳～６歳）を中心に、長時間、完全な英語環境を提供します。<br />
          3時間半～7時間、まさに留学をしているかの様な環境の中、最新のプログラムを使用して「楽しく」「効果的」にお子様の英語力・知的好奇心を徹底的に伸ばします。<br />
          英語学習に関しては初心者、経験者を問わず、脳科学的に「臨界期」に属するこの年齢の子ども達の吸収力には目を見張るものが有ります。<br />
          ただ英語で遊んでいるだけでは、その能力を最大限に引き出すことはできません。<br />
          <br />
          学術的裏付けのあるプログラム、そして、子ども達を引き付けるスキルを持つスタッフがいることが重要なのです。<br />
          是非、Kids UPの合同説明会・無料体験会で最先端のCLIL教育を体感してください。<br />
          ※帰国子女・インターナショナルスクール出身レベルのお子様に対応する「スペシャリスト・コース」もございます。
        </p>

        <button class="btn btn-skin btn-lg btn-scroll" data-toggle="modal" data-target="#infoModal">
            詳しくはこちら
        </button>
      </div>
    </div>
  </div>
</section>
<!-- /Section: about -->

<!-- Section: separator -->
  <section id="separator" class="home-section parallax text-center" data-stellar-background-ratio="0.5">

  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="align-center txt-shadow">
            <div class="icon">
              <img src="/img/icon_course01.png" alt="">
            </div>
          <h3 class="color-orange">幼児コース</h3>
          <p>
            10:00〜13:30 ３歳〜年長対象<br />
            15:00〜18:30 年少〜年長対象
          </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="align-center txt-shadow">
            <div class="icon">
              <img src="/img/icon_course02.png" alt="">
            </div>
          <h3 class="color-orange">小学生コース（学童コース）</h3>
          <p>
            13:30〜18:30<br />
            小学校１年生〜６年生対象コース<br />
            ※20:30まで延長あり
          </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="align-center txt-shadow">
            <div class="icon">
              <img src="/img/icon_course03.png" alt="">
            </div>
          <h3 class="color-orange">スペシャリストコース</h3>
          <p>
            18:45〜20:15<br />
            小学校４年生〜６年生対象コース
          </p>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- /Section: separator -->


<!-- Section: gallery -->
  <section id="gallery" class="home-section text-center bg-gray">

    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="wow bounceInDown" data-wow-delay="0.4s">
        <div class="section-heading">
          <h2>FAQ</h2>
          <p>まだまだはじまったばかり、お客様の不安やご質問にお答えします。</p>
        </div>
        </div>
      </div>
    </div>
    </div>

  <div class="container">
    <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12" >
        <div class="wow bounceInUp" data-wow-delay="0.4s">
                  <div id="owl-works" class="owl-carousel">
                      <div class="item"><a href="/img/gallery/a1.gif" title="Q1.無料体験、見学はできますか？" data-lightbox-gallery="gallery1"><img src="img/gallery/q1.gif" class="img-responsive" alt="img"></a></div>
                      <div class="item"><a href="/img/gallery/a2.gif" title="Q2.授業はすべて英語で行うの？" data-lightbox-gallery="gallery1"><img src="img/gallery/q2.gif" class="img-responsive " alt="img"></a></div>
                      <div class="item"><a href="/img/gallery/a3.gif" title="Q3.送迎サービスはありますか？" data-lightbox-gallery="gallery1"><img src="img/gallery/q3.gif" class="img-responsive " alt="img"></a></div>
                      <div class="item"><a href="/img/gallery/a4.gif" title="Q4.何時まで預かっていただけますか？" data-lightbox-gallery="gallery1"><img src="img/gallery/q4.gif" class="img-responsive " alt="img"></a></div>
                      <div class="item"><a href="/img/gallery/a5.gif" title="Q5.普段どんな授業を行うの？" data-lightbox-gallery="gallery1"><img src="img/gallery/q5.gif" class="img-responsive " alt="img"></a></div>
                      <div class="item"><a href="/img/gallery/a6.gif" title="Q6.入会はいつでも可能ですか？" data-lightbox-gallery="gallery1"><img src="img/gallery/q6.gif" class="img-responsive " alt="img"></a></div>
                      <div class="item"><a href="/img/gallery/a7.gif" title="Q7.本当に英語は身につくの？" data-lightbox-gallery="gallery1"><img src="img/gallery/q7.gif" class="img-responsive " alt="img"></a></div>
                      <!-- <div class="item"><a href="/img/gallery/a8.gif" title="Q8.普段、どんな授業を行うの？" data-lightbox-gallery="gallery1"><img src="img/gallery/q8.gif" class="img-responsive " alt="img"></a></div> -->
                  </div>
        </div>
              </div>
          </div>
  </div>
</section>
<!-- /Section: services -->

<!-- Section: shop -->
<section id="shop" class="home-section text-center">
  <div class="heading-contact">
    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-offset-2">

        <div class="section-heading">
        <div class="wow bounceInDown" data-wow-delay="0.4s">
        <h2>SCHOOL</h2>
        </div>
        <p class="wow lightSpeedIn" data-wow-delay="0.3s">５月、６月にそれぞれ開校予定です。</p>
        </div>

      </div>
    </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-2">
        <div class="align-center txt-shadow">
          <div class="icon">
            <img src="/img/map_shop01.gif" alt="" class="img-responsive">
          </div>
        <h3 class="color-orange">【5月14日開校】KidsUP田園調布雪谷校</h3>
        <p>
          東京都大田区田園調布1-5-2 大谷ビル[<a href="https://goo.gl/OOVxcK">地図</a>]
        </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="align-center txt-shadow">
          <div class="icon">
            <img src="/img/map_shop02.gif" alt="" class="img-responsive">
          </div>
        <h3 class="color-orange">【6月4日開校予定】KidsUP蒲田校</h3>
        <p>
          東京都大田区蒲田5-46-1 秋元ビル[<a href="https://goo.gl/PRGyoY">地図</a>]
        </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section: shop -->


<!-- Section: contact -->
  <section id="contact" class="home-section text-center">
  <div class="heading-contact">
    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-offset-2">

        <div class="section-heading">
        <div class="wow bounceInDown" data-wow-delay="0.4s">
        <h2>お問い合わせはこちら</h2>
        </div>
        <p class="wow lightSpeedIn" data-wow-delay="0.3s">見学についてのお問い合わせ、採用に関するお問い合わせはこちらからご連絡ください。</p>
        </div>

      </div>
    </div>
    </div>
  </div>
  <div class="container">

  <div class="row">
      <div class="col-lg-8 col-md-offset-2">
          <div class="form-wrapper marginbot-50">
              {!! Form::open(['id' => 'contact-form']) !!}
              <div class="row">

                      <div class="form-group">
                        {!! Form::label('name', 'お名前') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'お名前', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('number', '電話番号') !!}
                        {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => '電話番号', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','id' => 'email', 'placeholder' => 'Email', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                          <label for="subject">
                              お問い合わせ内容</label>

                          <select id="subject" name="subject" class="form-control" required="required">
                              <option value="na" selected="">お問い合わせ内容を選択してください</option>
                              <option value="service">見学についてお問い合わせ</option>
                              <option value="recruitment">採用についてお問い合わせ</option>
                              <option value="ir">取材に関するお問い合わせ</option>
                          </select>
                      </div>


                      <div class="form-group">

                          {!! Form::label('name', '内容') !!}
                          {!! Form::textarea('body', null ,array('rows'=>'9','cols' => '25','class'=>'form-control','id' => 'message','placeholder'=>'お問い合わせ内容を入力してください','required' => 'required')) !!}
                      </div>


                      <button type="submit" class="btn btn-skin btn-block" id="btnContactUs">
                          送信する</button>

              </div>
              {!! Form::close() !!}

          </div>
    <div class="number__area text-center">
        <p class="lead"><i class="fa fa-phone"></i> お電話でのお問い合わせ <br />
        <strong>0120-378-056</strong><br />
        <span class="mini">※KidsUP開校準備室</span>
        </p>
    </div>
      </div>
      <div class="fb-like" data-href="http://kids-up.jp" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
  </div>

  </div>
</section>
<!-- /Section: contact -->
<div id="infoModal" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">年齢と語学の習得曲線</h4>
          </div>
          <div class="modal-body">
              <img src="/img/img_graph01.png" class="img-responsive">
              <p class="text-black">「臨界期」と言われる時期でなければ、身につけることのできない様々な能力が存在します。
                その後は「学習」により身につけるステージへと変化していきます。</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
          </div>
      </div>
  </div>
</div>

@endsection
