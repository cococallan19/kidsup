@extends('layouts.layout')

@section('meta')

<title>{{$news['title']}} | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>

<meta name="description" content="{{$news['title']}} | KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="{{$news['keywords']}}" />
@if($news['status']=='close')
  <meta name="robots" content="noindex">
@endif
<meta name="author" content="KidsUP" />

<!-- Facebook and Twitter integration -->
<meta property="og:title" content="{{$news['title']}}"/>
<meta property="og:image" content="{{$news['main_image']}}"/>
<meta property="og:url" content="{{\Request::url()}}"/>
<meta property="og:site_name" content="KidsUP"/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="{{$news['title']}}" />
<meta name="twitter:image" content="{{$news['main_image']}}" />
<meta name="twitter:url" content="{{\Request::url()}}" />
<meta name="twitter:card" content="" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('intro')

<header id="kids-hero" class="lower-pages news-detail" data-section="home" role="banner">

  <div class="kids-overlay"></div>
  <div class="kids-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-8 kids-section-heading text-center">
          <h2 class="kids-lead"><img src="/images/title_news_w.png" class="img-responsive" alt="タイトル：お知らせ"></h2>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- END .header -->
@endsection

@section('content')




<form method="POST" action="/inquiry/post" accept-charset="UTF-8" id="contact-form">
  <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
<div id="kids-news" data-section="news">
<div class="kids-news-content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 kids-section-heading text-center">
        </div>

          <div class="col-md-12 kids-news-contentainer">
          <article class="kids-news-article">
            <div class="kids-news-info clearfix">
              @if($news->news_category)
                @foreach($news->news_category as $value)
                  <p class="kids-news-badge-orange pull-left">{{$value['slag']}}</p>
                @endforeach
              @endif
              <p class="kids-news-date">{{$news['date']}}</p>
            </div>
            <h4 class="text-center kids-news-article-title"><a href="#">{{$news['title']}}</a></h4>

            <div class="news-contents">
              {!! $news['contents'] !!}
            </div>
            <div class="share-btn">
              <ul>
                <li class="tw"><a href="http://twitter.com/share?url={{\Request::url()}}&text={{$news['title']}}&via=KidsUP_JP">ツイート</a>
                </li>
                <li class="fb"><a href="http://www.facebook.com/share.php?u={{\Request::url()}}" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">シェア</a>
                </li>
                <li class="in"><a href="https://www.instagram.com/kidsup.jp/?ref=badge">フォロー</a>
                </li>
              </ul>
            </div>
          </article>
        </div>


      </div>
    </div>
</div>

</div>
</form>










@endsection
