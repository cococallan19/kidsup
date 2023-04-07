@extends('layouts.layout')

@section('meta')
<title>お知らせ | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/new2020/news_bg.png) bottom left; background-size: cover;" >
  <div class="kids-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 kids-section-heading text-center">
          <h2 class="kids-lead">NEWS</h2>
          <h3 class="kids-lead-sub">新着情報</h3>
        </div>
      </div>
    </div>
</header>
<!-- END .header -->
@endsection

@section('content')




<div id="kids-news" data-section="news">
  <aside class="col-lg-2 kids-category-content">
    <h4>CATEGORY</h4>
    <ul>
      @foreach($categories as $category)
      <li @if($category['category_id'] == $category_id) class="selected" @endif><a href="/news/category/{{$category['category_id'] }}">{{ $category['slag'] }}</a></li>
      @endforeach
    </ul>
  </aside>


<div class="col-lg-9 kids-news-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 kids-section-heading text-center">
        </div>

        <div class="kids-news-contentainer">
          @foreach($news as $value)
          <div class="col-md-3 kids-news-box">
          <div class="news-box-inner" >
            <div class="news-image">
              <figure>
                <a href="/news/{{$value->id}}"><img src="{{$value->main_image}}" alt="イメージ：{{$value->title}}" class="img-responsive"></a>
              </figure>
            </div>
            <div class="news-info-box">
              <div class="kids-news-info clearfix">
                <p class="kids-news-badge-orange pull-left">
                  @if($value->news_category)
                    @foreach($value->news_category as $category)
                      {{$category['slag']}}
                    @endforeach
                  @endif
                </p>
                <p class="date">{{$value->date}}</p>
              </div>
              <h4><a href="/news/{{$value->id}}">{{$value->title}}</a></h4>
              <!--<div class="kids-news-text">
                {!! $value->contents !!}
              </div>-->
            </div>
          </div>
          </div>
          @endforeach

          <div class="pagenation_box">
            <div class="kids-news-pager text-center">
              {!! $news->render() !!}
            </div>
          </div>

        </div>


      </div>
    </div>
  </div>
</div>









@endsection
