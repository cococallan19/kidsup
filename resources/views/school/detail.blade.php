@extends('layouts.layout')

@section('meta')
<title>KidsUP{{$school['school_name']}} | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUP{{$school['school_name']}} | KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="KidsUP{{$school['school_name']}}@foreach($school['keywords'] as $keyword),{{$keyword}}@endforeach" />
@if($school['status']=='close')
  <meta name="robots" content="noindex">
@endif
<meta name="author" content="KidsUP" />
@include('layouts.social')
@endsection

@section('intro')
<!-- END .header -->
@endsection

@section('content')




<div id="kids-school" data-section="school">
<div class="kids-scools-content">
    <div class="container">

      <div class="row kids-section-detail">
        <div class="col-md-6 col-sm-6 col-xs-12 col-xxs-12 col-carousel">
          @if(!$school['sub_image'])
            <div class="">
              @if($school['main_image'])
              <div data-thumb="イメージ：{{$school['school_name']}}"><img src="{{$school['main_image']}}" alt="イメージ：KidsUP{{$school['school_name']}}" class="img-responsive-school"></div>
              @endif
            </div>
          @else
            <!-- /.owl-carousel -->
            <div class="owl-carousel">
              @if($school['main_image'])
              <div data-thumb="イメージ：{{$school['school_name']}}"><img src="{{$school['main_image']}}" alt="イメージ：KidsUP{{$school['school_name']}}" class="img-responsive-school-carousel"></div>
              @endif
                @foreach($school['sub_image'] as $image)
                  @if(!empty($image))
                  <div data-thumb="イメージ：{{$school['school_name']}}"><img src="{{$image}}" alt="イメージ：{{$school['school_name']}}" class="img-responsive-school-carousel"></div>
                  @endif
                @endforeach
            </div>
            <!-- /.owl-carousel -->
          @endif

        </div>
        <div class="col-xxs-12 kids-section-badge">
          <p class="badge">送迎あり</p>
        </div>
        <div class="row kids-section-detail">

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-xxs-12 kids-school-detail">
            <h4><img class="lazy" data-original="/images/gnavi03.png" alt="教室情報">KidsUP{{$school['school_name']}}</h4>
          </div>
        </div>
      </div>

      <div class="row kids-section-info">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 col-xxs-4">
          <p>住所</p>
        </div>
        <div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 col-xxs-8">
          <p>〒{{$school['zip']}} {{$school['pref']}}{{$school['addr01']}}{{$school['addr02']}}{{$school['addr03']}}</p>
        </div>

      </div>
      <div class="row kids-section-info">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 col-xxs-4">
          <p>電話番号</p>
        </div>
        <div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 col-xxs-8">
          <p>{{$school['number']}}</p>
        </div>
      </div>
      <div class="row kids-section-info">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 col-xxs-4">
          <p>営業時間</p>
        </div>
        <div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 col-xxs-8">
          <p>{{$school['business_start']}}～{{$school['business_end']}}</p>
        </div>
      </div>
      <div class="row kids-section-info">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 col-xxs-4">
          <p>交通アクセス</p>
        </div>
        <div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 col-xxs-8">
          <p>
            {!! $school['access'] !!}
          </p>
        </div>
      </div>
  @if($school['trafic'] != '')
      <div class="row kids-section-info">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 col-xxs-4">
          <p>アクセス詳細</p>
        </div>
        <div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 col-xxs-8">
          <p>
            {!! $school['trafic'] !!}
          </p>
        </div>
      </div>
  @endif

      <div class="row kids-section-info">
        <div class="col-md-6 col-sm-6 col-xs-12 col-xxs-12">
          <div class="googlemap">
            <div id="map_canvas"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1 col-xxs-1">
        </div>
        <div class="col-md-10 col-sm-10 col-xs-10 col-xxs-10 kids-section-area">
          <div class="col-md-2 col-xxs-12 kids-section-area-title">
            <img class="lazy img-responsive img-bus" data-original="/images/bus.png" alt="送迎対応エリア">
          </div>
          <div class="col-md-10 col-xxs-12">
            <span>
              {!! $school['area'] !!}
            </span>
          </div>
          <div class="col-md-1 col-sm-1 col-xs-1 col-xxs-1">
          </div>
        </div>
      </div>

    {!! Form::open(['id' => 'contact-form' , 'url' => '/event/setting']) !!}
    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}"> <!-- トークンをセット -->
      <div class="row kids-scools-event-btn">
        <div class="col-md-12 col-sm-12 col-xs-12 col-xxs-12">
          <p class="text-center">
          <a href="/event/setting/{{$school->id}}">
            <button type="button" class="btn btn-primary btn-md">説明会・無料体験お申し込みはこちら <i class="icon-arrow-circle-right"></i></button>
          </a>
          </p>
        </div>
      </div>
    {{Form::hidden('submit_school_id', $school['id'])}}
    {!! Form::close() !!}
    </div>
</div>

</div>







@endsection

@section('js')
<!-- Google Maps -->
<script src="//maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_KEY')}}"></script>
<script src="/js/mapstyle.js"></script>
<script>

  // owlCarousel
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      autoplay: true,
      autoplayHoverPause: true,
      // nav: false,
      // dots: false,
      loop: true,
      items: 1,
      thumbs: true,
      thumbImage: true,
      thumbContainerClass: 'owl-thumbs',
      thumbItemClass: 'owl-thumb-item'
    });
  });

  // googleMaps
  mapCreate({{$school['lat']}}, {{$school['lng']}});

</script>
@endsection
