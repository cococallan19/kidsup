@extends('layouts.layout')

@section('meta')
<title>写真一覧 | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
@endsection



@section('content')


<div id="kids-photos" data-section="features">


  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 kids-section-heading text-center">
        <h2 class="kids-lead"><img src="/images/title_photo.png" class="img-responsive" alt="タイトル：撮影写真"></h2>
        <p class="kids-sub">
          ご送付させて頂いたログインパスワードにてログインをお願いいたします。
        </p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-4 col-md-offset-4">
        <div class="form-wrapper marginbot-50">
            {!! Form::open(['id' => 'contact-form']) !!}
            <div class="row">

                    <div class="form-group">
                      <span class="label label-required">必須</span>{!! Form::label('password', 'ログインパスワード') !!}
                      <input type="password" class="form-control" name="password" placeholder="ログインパスワード">
                    </div>

                    @if(isset($error))
                      <span class="error">{{$error}}</span>
                    @endif

                    <button type="submit" class="btn btn-primary btn-md" id="btnContactUs">
                        ログインする</button>

            </div>
            {!! Form::close() !!}

        </div>
      </div>





        </div>
     </div>


  </div>








  @include('parts.inqury')








@endsection
