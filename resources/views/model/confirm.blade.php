@extends('layouts.layout')

@section('meta')
<title>Kids UP モデルについて | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />

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


<div id="kids-model"  data-section="model">
  <div class="container">
    <div class="row">
    </div>
  </div>

    {!! Form::open() !!}
    <div class="col-md-12 model-entry-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 kids-section-heading old_kids-section-heading text-center">
            <h2 class="kids-lead"><img src="/images/title_model_entry_form.png" class="img-responsive" alt="タイトル：エントリーフォーム"></h2>
            <h3 class="wh-title">内容をご確認下さい</h3>
          </div>
          <div class="col-lg-8 col-md-offset-2">
            <div class="form-group">
              <div class="col-md-4">
                <label for="name">
                  お子様のお名前<span class="label label-required">必須</span>
                </label>
              </div>
              <div class="col-md-8">
                {{Form::hidden('name', $inputs['name'])}}
                {{$inputs['name']}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label for="parent">
                  保護者お名前<span class="label label-required">必須</span>
                </label>
              </div>
              <div class="col-md-8">
                {{Form::hidden('parent', $inputs['parent'])}}
                {{$inputs['parent']}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label for="age">
                  お子様の年齢<span class="label label-required">必須</span>
                </label>
              </div>
              <div class="col-md-8">
                {{Form::hidden('age', $inputs['age'])}}
                {{$inputs['age']}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label for="height">
                  お子様の身長<span class="label label-required">必須</span>
                </label>
              </div>
              <div class="col-md-8">
                {{Form::hidden('height', $inputs['height'])}}
                {{$inputs['height']}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label for="sns">
                  SNS
                </label>
              </div>
              <div class="col-md-8">
                @if($inputs['sns'])
                <ul>

                  @foreach($inputs['sns'] as $value)
                  {{ Form::hidden('sns[]', $value) }}
                  <li>{{$value}}</li>
                  @endforeach
                </ul>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label for="tel">
                  お電話番号<span class="label label-required">必須</span>
                </label>
              </div>
              <div class="col-md-8">
                {{ Form::hidden('tel', $inputs['tel']) }}
              {{$inputs['tel']}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label for="email">
                  メールアドレス<span class="label label-required">必須</span>
                </label>
              </div>
              <div class="col-md-8">
                {{Form::hidden('email', $inputs['email'])}}
                {{$inputs['email']}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label for="image">
                  写真
                </label>
              </div>
              <div class="col-md-8">
                @if(isset($inputs['image']))
                  @if($inputs['image'])
                    @if($photo['success'] == TRUE)
                      <img src="/media/thumbnail/{{$photo['filename']}}">
                    @endif
                  {{Form::hidden('photo', $photo['filename'])}}
                  @else
                  添付なし
                  @endif
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                <label for="pr">
                  自己PR
                </label>
              </div>
              <div class="col-md-8">
                {{Form::hidden('pr', $inputs['pr'])}}
                {{$inputs['pr']}}
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
              </div>
              <div class="col-md-8">
                <button type="submit" name="action" value="back" class="btn btn-default">戻る</button>
                <button type="submit" name="action" value="entry" class="btn btn-entry btn-md" id="btnModelEntry">
                  内容を送信する
                </button>
              </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>

</div>
@include('parts.inqury')


@section('js')
<script src="/js/infiniteslide.js"></script>
<script src="/js/jquery.pause.min.js"></script>
<script>
  $(window).on('load', function() {
    $('.infiniteslide').infiniteslide({
        'height': 336,
        'speed': 30,
        'direction' : 'left',
        'pauseonhover': true
    });
  });
</script>
@endsection

@endsection
