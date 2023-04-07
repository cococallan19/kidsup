@extends('layouts.layout')

@section('meta')
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。">
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール">
<title>学童保育型英会話スクール - KidsUP（キッズアップ）</title>
@include('layouts.social')
@endsection

@section('intro')
<div class="detail__logo">
<a href="/"><img src="/img/logo3.png" alt="" /></a>
</div>
@endsection

@section('content')

<!-- Section: about -->
  <section id="overview" class="home-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">

          <div class="section-heading text-center">

          <p class="sub__title wow bounceInUp" data-wow-delay="0.3s">イベント情報</p>
          </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 event__calendar">
                  <ul class="row">
                  @foreach($data['items'] as $calendar)
                  <li class="col-md-4">
                    <div class="event__inner">
                      <h3 class="text-right">{{$calendar['start']['date']}}</h3>
                      <h2>{{$calendar['summary']}}</h2>
                      <div class="description">
                        @if(isset($calendar['description']))
                        <div class="detail items">
                          <div class="form-group">
                            {!! Form::open(['id' => 'contact-form'  ,'files' => true ]) !!}
                            {!! Form::label('plans', '日程の候補') !!} <span class="label label-required">必須</span>

                        @if($calendar['description'] == 'A')

                        <ul class="form-check">
                         <li>{!! Form::radio('plans[]','10:30') !!} 10:30〜</li>
                         <li>{!! Form::radio('plans[]','13:30') !!} 13:30〜</li>
                         <li>{!! Form::radio('plans[]','16:00') !!} 16:00〜</li>
                       </ul>

                        @elseif($calendar['description'] == 'B')

                        <ul class="form-check">
                          <li>{!! Form::radio('plans[]','10:30') !!} 10:30〜</li>
                          <li>{!! Form::radio('plans[]','14:00') !!} 14:00〜</li>
                          <li>{!! Form::radio('plans[]','18:30') !!} 18:30〜</li>
                       </ul>

                        @elseif($calendar['description'] == 'C')

                        <ul class="form-check">
                          <li>{!! Form::radio('plans[]','14:00') !!} 14:00〜</li>
                          <li>{!! Form::radio('plans[]','18:30') !!} 18:30〜</li>
                       </ul>

                        @endif
                        {!! Form::close() !!}
                          </div>
                        </div>
                        @endif

                        @if(isset($calendar['location']))
                        <div class="items"><span class="title">場所：</span>{{$calendar['location']}}</div>
                        @endif



                      </div>
                    </div>
                  </li>
                  @endforeach
                    </ul>
                  </div>
    </div>
  </div>
</section>
<!-- /Section: about -->


@endsection
