@extends('layouts.layout')

@section('meta')
<title>教室情報 | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
@include('layouts.social')
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/new2020/SCHOOL_image.jpg) center left; background-size: cover;" >
  <div class="kids-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 kids-section-heading text-center">
          <h2 class="kids-lead">SCHOOL</h2>
          <h3 class="kids-lead-sub">教室情報</h3>
        </div>
      </div>
    </div>
</header>

<!-- END .header -->
@endsection

@section('content')




<div id="kids-school" data-section="school">

<div id="kids-offcanvass">
  <ul class="box">
    <li class="active"><a href="/">HOME</a></li>
    <li><a href="/news">NEWS</a></li>
    <li><label for="inbox1">COURSE</label></li>
      <input type="checkbox" id="inbox1" class="on-off">
      <ul class="list-in-list">
        <li><a href="/course/preschool"><i class="icon-arrow-circle-right"></i> 幼児コース</a></li>
        <li><a href="/course/elementary"><i class="icon-arrow-circle-right"></i> 学童コース</a></li>
        <li><a href="/course/specialist"><i class="icon-arrow-circle-right"></i> 上級コース</a></li>
        <li><a href="/course/online"><i class="icon-arrow-circle-right"></i> オンラインコース</a></li>
      </ul>
      <li><a href="/school">SCHOOL</a></li>
      <li><a href="/schedule">SCHEDULE</a></li>
      <li><a href="/faq">FAQ</a></li>
      <li><a href="/recruit">RECRUIT</a></li>
      <li><a href="/event/entry" class="btn btn-primary" style="color:#fff; text-align:-webkit-match-parent; border-radius:0px;">説明会予約 </a></li>
  </ul>
</div>



<div class="kids-schools-content">
      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12 col-xxs-12">
          <ul class="school-list">
        @foreach($schools as $school)
          <li class="school-box">
            <a href="/school/{{$school->id}}" class="kids-figure">
              <figure>
                <img class="lazy img-responsive" data-original="{{$school->main_image}}" alt="イメージ：KidsUP{{$school->school_name}}">
              </figure>
              <h3 class="kids-figure-lead">KidsUP{{$school->school_name}}</h3>
              <p class="kids-figure-text">〒{{$school->zip}}<br> {{$school['pref']}}{{$school['addr01']}}{{$school['addr02']}}{{$school['addr03']}}</p>
              <p class="kids-figure-text-sub">{{$school->access}}</p>
              @if($school->publish_at)<div class="bobble-open">{{$school->publish_at}}<span>OPEN</span></div>@endif
            </a>
          </li>
        @endforeach
        <?php
        $closeTime = new DateTime('2022-04-30 23:59:59');
        $today = new DateTime();
        ?>
        @if($today < $closeTime)
        <li class="school-box">
          <a class="kids-figure">
            <figure>
              <img class="lazy img-responsive" data-original="https://admin.kids-up.jp/uploads/2/Daiba/VF-______.jpg" alt="イメージ：KidsUPお台場">
            </figure>
            <h3 class="kids-figure-lead">KidsUPお台場</h3>
            <p class="kids-figure-text-sub">「りんかい東雲」に移転いたしました。</p>
          </a>
        </li>
        @endif
          </ul>

        </div>



      </div>
</div>

</div>









@endsection
