@extends('layouts.layout')

@section('meta')
<title>学童保育型　英会話スクール・幼児クラス - KidsUP</title>
<meta name="description" content="KidsUP（キッズアップ）は英語で預かる子供の学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="子供,英語,学童保育,プリスクール,KidsUP,キッズアップ,アフタースクール" />
<meta name="author" content="KidsUP" />

<link rel="stylesheet" href="/css/owl.carousel.min.css">
<link rel="stylesheet" href="/css/owl.theme.default.min.css">
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>

<!-- メタ広告 ドメイン認証 -->
<meta name="facebook-domain-verification" content="sqdsv7mhqb0zl8d7dkpoej5r22trza" />
@include('layouts.social')

@endsection

@section('intro')

<!--<div class="flexbox">-->
@if(count($seasonal_list) == 0 and count($event_list) == 0 and count($top_banner) == 0)

 @elseif(count($seasonal_list) == 0 and count($event_list) == 0 and count($top_banner) > 0)
  <header data-section="home" role="banner">

    <div class="col-md-12 course-buttons">
      <p class="text-center news-to-btn"><a href="/event/entry" class="btn btn-primary btn-new btn-lg">説明会予約はこちら <i class="icon-arrow-circle-right"></i></a></p>
    </div>
  <div class="col-md-12 section-cover-top"></div>
    <div class="kids-intro">
      <!-- PC用 start-->
      <div class="slick-list slick-list-pc @if($top_sub_count > 0) slick-available-top @endif">
        <div><img src="{{$top_banner->main_image}}"  class="img-responsive"></div>
        @if($top_sub_count > 0)
          @foreach($top_banner['sub_image'] as $image)
            @if(!empty($image))
              <div><img src="{{$image}}"  class="img-responsive" style="position:relative;"></div>
            @endif
          @endforeach
        @endif
      </div>
      <!-- PC用 end-->
      <!-- モバイル用 start-->
      <div class="slick-list slick-list-mobile @if($top_mobile_count > 1) slick-available-top @endif">
        @if($top_mobile_count > 0)
          @foreach($top_banner['mobile_image'] as $image)
            @if(!empty($image))
              <div><img src="{{$image}}"  class="img-responsive" style="position:relative;"></div>
            @endif
          @endforeach
        @endif
      </div>
      <!-- モバイル用 end-->
    </div>
  </header>
<!--</div><!--flexbox-->

<!-- イベント ヘッダー ---------------------->
@elseif(count($event_list) > 0)
<!--<div class="flexbox">-->
  <header data-section="home" role="banner">
    <a class="top-content-text" href="/news/{{$event_list[0]->id}}" style="color:#fff;">
      <div class="top-info">EVENT</div>
      <div class="top-content-name">{{$event_list[0]->title}}</div>
    </a>
    <div class="col-md-12 course-buttons">
      <p class="text-center news-to-btn"><a href="/news/{{$event_list[0]->id}}" class="btn btn-primary btn-new btn-lg">詳細はこちら <i class="icon-arrow-circle-right"></i></a></p>
    </div>
  <div class="col-md-12 section-cover-top"></div>

    <div class="kids-intro">
      <!-- PC用 start-->
      <div class="slick-list-hero slick-list-pc @if($event_sub_count > 0) slick-available-top @endif">
        <div><a href="/news/{{$event_list[0]->id}}"><img src="{{$event_list[0]->main_image}}"  class="img-responsive"></a></div>
        @if($event_sub_count > 0)
          @foreach($event_list[0]['sub_image'] as $image)
            @if(!empty($image))
              <div><a href="/news/{{$event_list[0]->id}}"><img src="{{$image}}"  class="img-responsive" style="position:relative;" ></a></div>
            @endif
          @endforeach
        @endif
      </div>
      <!-- PC用 end-->
      <!-- モバイル用 end-->
      <div class="slick-list-hero slick-list-mobile @if($event_mobile_count > 1) slick-available-top @endif">
        @if($event_mobile_count > 0)
          @foreach($event_list[0]['mobile_image'] as $image)
            @if(!empty($image))
              <div><a href="/news/{{$event_list[0]->id}}"><img src="{{$image}}"  class="img-responsive" style="position:relative;"></a></div>
            @endif
          @endforeach
        @endif
      </div>
      <!-- モバイル用 end-->
    </div>
  </header>



<!-- シーズナルスクール ヘッダー ---------------------->
@elseif(count($seasonal_list) > 0)
<!--<div class="flexbox">-->
  <header id="kids-hero" data-section="home" role="banner">
    <div class="top-info">SEASONS</div>
    <div class="top-content-name"><a class="top-content-text" href="/news/{{$seasonal_list[0]->id}}">{{$seasonal_list[0]->title}}</a></div>
    <div class="col-md-12 course-buttons">
      <p class="text-center news-to-btn"><a href="/event/entry" class="btn btn-primary btn-new btn-lg">シーズナルスクール詳細はこちら <i class="icon-arrow-circle-right"></i></a></p>
    </div>
  <div class="col-md-12 section-cover-top"></div>
    <div class="kids-intro">
      <!-- PC用 start-->
      <div class="slick-list-hero slick-list-pc @if($seasonal_sub_count > 0) slick-available-top @endif">
        <div><a href="/news/{{$seasonal_list[0]->id}}"><img src="{{$seasonal_list[0]->main_image}}"  class="img-responsive"></a></div>
        @if($seasonal_sub_count > 0)
          @foreach($seasonal_list[0]['sub_image'] as $image)
            @if(!empty($image))
              <div><a href="/news/{{$seasonal_list[0]->id}}"><img src="{{$image}}"  class="img-responsive" style="position:relative;"></a></div>
            @endif
          @endforeach
        @endif
      </div>
      <!-- PC用 end-->
      <!-- モバイル用 start-->
      <div class="slick-list-hero slick-list-mobile @if($seasonal_mobile_count > 1) slick-available-top @endif">
        @if($seasonal_mobile_count > 0)
          @foreach($seasonal_list[0]['mobile_image'] as $image)
            @if(!empty($image))
              <div><a href="/news/{{$seasonal_list[0]->id}}"><img src="{{$image}}"  class="img-responsive" style="position:relative;"></a></div>
            @endif
          @endforeach
        @endif
      </div>
      <!-- モバイル用 end-->
    </div>
  </header>
@endif <!-- line 21 -->
<!-- END .header -->

<!--</div><!--flexbox-->
 @endsection

<!--NEWS---------------------------------------------------->
@section('content')

<!--<div class="flexbox">-->

        @if(count($news_list) > 0)
        <div id="kids-news" data-section="news">
          <div id="kids-news-top" data-section="news">

          <div class="container">
            <div class="row">
              <div class="col-md-12 kids-news-heading text-center">
                <h2 class="kids-lead">NEWS</h2>
                <h3 class="kids-lead-sub">新着情報</h3>
             </div>
            </div>
            <div class="row">


              <div class="col-md-12">
                <ul class="kids-news-list">
                  @foreach($news_list as $news)
                  <li class="col-md-3 kids-news-box">
                    <a href="/news/{{$news->id}}">
                      <div class="news-image">
                        <figure>
                          <img class="lazy img-responsive" data-original="{{$news->main_image}}" alt="イメージ：{{$news->title}}">
                        </figure>
                      </div>
                    <div class="news-info-box">
                    @if($news->news_category)
                      @foreach($news->news_category as $value)
                        <span class="kids-news-badge-orange pull-left">{{$value['slag']}}</span>
                        <p class="date">{{$news->date}}</p>
                      @endforeach
                    @endif
                    <h1>{{$news->title}}</h1>
                    </div>
                    </a>
                  </li>
                  @endforeach
                </ul>
                <p class="text-center news-to-btn"><a href="/news" class="btn btn-primary btn-new btn-lg">お知らせ一覧はこちら <i class="icon-arrow-circle-right"></i></a></p>
              </div>

            </div>
          </div>
         </div>
        </div>
        @endif
<!--</div><!--flexbox-->
<!--/NEWS---------------------------------------------------->

<!--COURSE---------------------------------------------------->
<div class="flexbox">
          <div id="kids-courses" data-section="courses">
  					<div class="container">
  						<div class="row">
                <div class="col-md-12 section-cover"></div>
  							   <div class="col-md-8 kids-section-heading text-center">
                    <h2 class="kids-lead">COURSE</h2>
                    <h3 class="kids-lead-sub">コースのご紹介</h3>
                    <h3 class="kids-subtitle">英会話初心者から、帰国子女レベルまで対応！<br>選べる3つのコース</h3>
  							   </div>

                <div class="col-md-12 course-buttons">
                  <p class="text-center news-to-btn"><a href="/course/preschool" class="btn btn-primary btn-new btn-lg">幼児コース <i class="icon-arrow-circle-right"></i></a></p>
                  <p class="text-center news-to-btn"><a href="/course/elementary" class="btn btn-primary btn-new btn-lg">学童コース <i class="icon-arrow-circle-right"></i></a></p>
                  <p class="text-center news-to-btn"><a href="/course/specialist" class="btn btn-primary btn-new btn-lg">上級コース <i class="icon-arrow-circle-right"></i></a></p>
                  <p class="text-center news-to-btn"><a href="/course/online" class="btn btn-primary btn-new btn-lg">オンラインコース <i class="icon-arrow-circle-right"></i></a></p>
  							</div>
  			      </div>
  			     </div>
  			    </div>
</div><!--flexbox-->
<!--/COURSE---------------------------------------------------->

<!--SCHOOL---------------------------------------------------->
<div class="flexbox">
  @foreach($school_list as $value)
          <div id="kids-school-top" data-section="school">
            <img class="lazy img-responsive-school" data-original="{{$value->main_image}}" alt="イメージ：KidsUP{{$value->school_name}}">
					<div class="kids-schools-content">
					    <div class="container">
					    	<div class="row">
                  <div class="col-md-12 section-cover"></div>
					    		<div class="col-md-8 kids-section-heading text-center">
                    <h2 class="kids-lead">SCHOOL</h2>
                    <h3 class="kids-lead-sub">KidsUP{{$value->school_name}}</h3>
                    <p class="kids-lead-description">{{$value->publish_at}} OPEN</p>

								</div>
                <div class="col-md-12 course-buttons">
                  <p class="text-center news-to-btn"><a href="/school" class="btn btn-primary btn-new btn-lg">スクール一覧はこちら <i class="icon-arrow-circle-right"></i></a></p>
                </div>
                <!--
                <div class="col-md-12 col-sm-12 col-xs-12 col-xxs-12">
                  <ul class="school-list">
                    @foreach($school_list as $value)
                    <li class="school-box">
                      <a href="/school/{{$value->id}}" class="kids-figure">
                        <figure>
                          <img class="lazy img-responsive" data-original="{{$value->main_image}}" alt="イメージ：KidsUP{{$value->school_name}}">
                        </figure>
                        <h3 class="kids-figure-lead">KidsUP{{$value->school_name}}</h3>
                        <p class="kids-figure-text">〒{{$value->zip}} {{$value['pref']}}{{$value['addr01']}}{{$value['addr02']}}{{$value['addr03']}}</p>
                        <p class="kids-figure-text">{{$value->access}}</p>
                        <p class="kids-figure-number">tel.{{$value->number}}</p>
                        @if($value->publish_at)<div class="bobble-open">{{$value->publish_at}}<span>OPEN</span></div>@endif
                      </a>
                    </li>
                    @endforeach
                  </ul>
                -->
                </div>
					    </div>
					   </div>
					</div>
      @endforeach
</div><!--flexbox-->

<!--SCHEDULE----------------------------------------------------
<div class="flexbox">
 <div id="kids-schedule" data-section="schedule">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-cover"></div>
         <div class="col-md-8 kids-section-heading text-center">
          <h2 class="kids-lead">SCHEDULE</h2>
          <h3 class="kids-subtitle">シーズナルスクール(春・夏・冬)・イベント</h3>
         </div>

      <div class="col-md-12 course-buttons">
        <p class="text-center news-to-btn"><a href="/schedule" class="btn btn-primary btn-new btn-lg">年間スケジュールはこちら <i class="icon-arrow-circle-right"></i></a></p>
      </div>
    </div>
   </div>
  </div>
</div><!--flexbox-->
<!--/SCHEDULE---------------------------------------------------->

<!--FAQ---------------------------------------------------->
<div class="flexbox">
 <div id="kids-faqs-top" data-section="faqz">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-cover"></div>
         <div class="col-md-8 kids-section-heading text-center">
          <h2 class="kids-lead">FAQ</h2>
          <h3 class="kids-lead-sub">よくあるご質問</h3>
         </div>
      <div class="col-md-12 course-buttons">
        <p class="text-center news-to-btn"><a href="/faq" class="btn btn-primary btn-new btn-lg">よくあるご質問 <i class="icon-arrow-circle-right"></i></a></p>
      </div>
    </div>
   </div>
  </div>
 </div><!--flexbox-->
<!--/FAQ---------------------------------------------------->

<!--ABOUT---------------------------------------------------->
<div class="flexbox">
 <div id="kids-about" data-section="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-cover"></div>
         <div class="col-md-8 kids-section-heading text-center">
          <h2 class="kids-lead">ABOUT</h2>
          <h3 class="kids-lead-sub">KidsUPとは？</h3>
         </div>
      <div class="col-md-12 course-buttons">
        <p class="text-center news-to-btn"><a href="/aboutus" class="btn btn-primary btn-new btn-lg">KidsUPとは？ <i class="icon-arrow-circle-right"></i></a></p>
      </div>
    </div>
   </div>
  </div>
</div><!--flexbox-->
<!--/ABOUT---------------------------------------------------->

<!--RECRUIT---------------------------------------------------->
<!--
<div id="kids-recruit" data-section="courses">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-cover"></div>
         <div class="col-md-8 col-md-offset-2 kids-section-heading text-center">
          <h2 class="kids-lead">RECRUIT</h2>
         </div>
      <div class="col-md-12 course-buttons">
        <p class="text-center news-to-btn"><a href="/recruit" class="btn btn-primary btn-new btn-lg">採用情報 <i class="icon-arrow-circle-right"></i></a></p>
      </div>
    </div>
   </div>
  </div>
-->
<!--/RECRUIT---------------------------------------------------->



            <!-- Modal -->
<div class="modal hide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close off-modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center">サマースクール受付開始いたしました</h4>
      </div>
      <div class="modal-body">
        <img src="/images/bnr_summer.jpg" alt="サマースクール受付開始" class="img-responsive">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default off-modal" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Modal -->






@endsection

@section('js')
<script src="/js/bootstrap-modalmanager.js"></script>
<script src="/js/bootstrap-modal.js"></script>
<script src="/js/instafeed.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<!-- instafeed -->
<script src="/js/instagram.js?tmp"></script>
<script>

  $(window).on('load resize', function (){
    var w = $(window).width();
    var x = 991;

    if(w <= x) {
      $('.school-slider').owlCarousel({
        margin: 20,
        // autoWidth: true,
        nav: true,
        dots: false,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          769: {
            items: 2
          },
          992: {
            items: 3
          }
        }
      })
    }
  });


  //TOPコンテンツのslick設定
  $(function () {
    $('.slick-available-top').slick({
      // アクセシビリティ。左右ボタンで画像の切り替えをできるかどうか
      accessibility: true,
      // 自動再生。trueで自動再生される。
      autoplay: true,
      // 自動再生で切り替えをする時間
      autoplaySpeed: 3000,
      // 自動再生や左右の矢印でスライドするスピード
      speed: 500,
      // 自動再生時にドットにマウスオンで一時停止するかどうか
      pauseOnDotsHover: true,
      // 切り替えのアニメーション。ease,linear,ease-in,ease-out,ease-in-out
      cssEase: 'ease',
      // 画像下のドット（ページ送り）を表示
      dots: false,
      // ドットのclass名をつける
      dotsClass: 'dot-class',
      // ドラッグができるかどうか
      draggable: true,
      // 切り替え時のフェードイン設定。trueでon
      fade: false,
      // 左右の次へ、前へボタンを表示するかどうか
      arrows: true,
      // 無限スクロールにするかどうか。最後の画像の次は最初の画像が表示される。
      infinite: true,
      // 最初のスライダーの位置
      initialSlide: 0,
      // スライドのエリアにマウスオーバーしている間、自動再生を止めるかどうか。
      pauseOnHover: true,
      // スライドのエリアに画像がいくつ表示されるかを指定
      slidesToShow: 1,
      // 一度にスライドする数
      slidesToScroll: 1,
      // タッチスワイプに対応するかどうか
      swipe: true,
      // 縦方向へのスライド
      vertical: false,
      // 表示中の画像を中央へ
      centerMode: true,
      //スライドの高さ揃え
      adaptiveHeight: true,
      // 中央のpadding
      centerPadding: '0px'
    });
  });

  //サブコンテンツのslick設定
  $(function () {
    $('.slick-available-content').slick({
      // アクセシビリティ。左右ボタンで画像の切り替えをできるかどうか
      accessibility: true,
      // 自動再生。trueで自動再生される。
      autoplay: true,
      // 自動再生で切り替えをする時間
      autoplaySpeed: 3000,
      // 自動再生や左右の矢印でスライドするスピード
      speed: 500,
      // 自動再生時にドットにマウスオンで一時停止するかどうか
      pauseOnDotsHover: true,
      // 切り替えのアニメーション。ease,linear,ease-in,ease-out,ease-in-out
      cssEase: 'ease',
      // 画像下のドット（ページ送り）を表示
      dots: false,
      // ドットのclass名をつける
      dotsClass: 'dot-class',
      // ドラッグができるかどうか
      draggable: true,
      // 切り替え時のフェードイン設定。trueでon
      fade: false,
      // 左右の次へ、前へボタンを表示するかどうか
      arrows: true,
      // 無限スクロールにするかどうか。最後の画像の次は最初の画像が表示される。
      infinite: true,
      // 最初のスライダーの位置
      initialSlide: 0,
      // スライドのエリアにマウスオーバーしている間、自動再生を止めるかどうか。
      pauseOnHover: true,
      // スライドのエリアに画像がいくつ表示されるかを指定
      slidesToShow: 1,
      // 一度にスライドする数
      slidesToScroll: 1,
      // タッチスワイプに対応するかどうか
      swipe: true,
      // 縦方向へのスライド
      vertical: false,
      // 表示中の画像を中央へ
      centerMode: true,
      //スライドの高さ揃え
      adaptiveHeight: true,
      // 中央のpadding
      centerPadding: '0px'
    });
  });
  </script>
@endsection
