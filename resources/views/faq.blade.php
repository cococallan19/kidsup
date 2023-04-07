@extends('layouts.layout')

@section('meta')
<title>よくあるご質問 | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
@include('layouts.social')
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/new2020/FAQ_image.jpg) left 20%; background-size: cover;" >
  <div class="kids-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 kids-section-heading text-center">
          <h2 class="kids-lead">FAQ</h2>
          <h3 class="kids-lead-sub">よくあるご質問</h3>
        </div>
      </div>
    </div>
</header>

<!-- END .header -->
@endsection

@section('content')


<div id="kids-faqs"  data-section="faqs">

  <div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">

    <div class="faq-accordion active to-animate">
      <span class="faq-accordion-icon-toggle active"><i class="icon-arrow-down"></i></span>
      <h3>Q1.無料体験、見学はできますか？</h3>
      <div class="faq-body" style="display: block;">
        <p>無料体験教室や見学会を随時行っております。いつでもお申し込みは可能ですが、お気軽にお問い合わせくださいませ。</p>
      </div>
    </div>
    <div class="faq-accordion to-animate">
      <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
      <h3>Q2.授業はすべて英語で行うの？</h3>
      <div class="faq-body">
        <p>スクール内での会話は基本的にすべて英語となっております。<br />もちろん、お子さまのコミュニケーションスキルや成長に合わせて段階的な環境の中で英語を身につけて頂きますので、ご安心くださいませ。</p>
      </div>
    </div>
    <div class="faq-accordion to-animate">
      <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
      <h3>Q3.送迎サービスはありますか？</h3>
      <div class="faq-body">
        <p>指定の小学校までのお迎えと、ご自宅付近の停車場所までの「無料送迎サービス」がございます。</p>
      </div>
    </div>
    <div class="faq-accordion to-animate">
      <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
      <h3>Q4.何時まで預かっていただけますか？</h3>
      <div class="faq-body">
        <p>最長20:30まで延長でお預かりが可能です。延長時間により、追加で料金をいただいております。</p>
      </div>
    </div>
    <div class="faq-accordion to-animate">
      <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
      <h3>Q5.普段、どんな授業を行うの？</h3>
      <div class="faq-body">
        <p>多彩なプログラムによって英語を学ぶというよりは、英語をつかって、より実戦的な経験を多数行って頂きます。<br />
          例えば、スポーツやクラフト、そのほかにも学校で学んでいる算数や理科、社会なども英語で学んでいただきます。
        </p>
      </div>
    </div>
    <div class="faq-accordion to-animate">
      <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
      <h3>Q6.入会はいつでも可能ですか？</h3>
      <div class="faq-body">
        <p>入会はいつでも受け付けております。<br />
          まずは、無料体験教室や見学会にてスクールの雰囲気をご覧いただいた後、サービス内容や運営方針などを充分にご説明させていただきます。
        </p>
      </div>
    </div>
    <div class="faq-accordion to-animate">
      <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
      <h3>Q7.本当に英語は身につくの？</h3>
      <div class="faq-body">
        <p>年齢が若ければ若いほど、英語をしっかりと身につけることが可能です。<br />
          KidsUPでは「臨界期」までに、基礎的な英語力を身につけていただき、理屈で覚えるチカラが芽生える８歳くらいからアウトプットを中心としたカリキュラムに切り替えることで、
          ネイティブに近い英語力を身につけて頂きます。
        </p>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>



@endsection
