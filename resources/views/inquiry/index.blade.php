@inject('ConvertToWareki', 'App\Http\Library\ConvertToWareki')
@extends('layouts.layout')

@section('meta')
<title>お問い合わせ | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPは英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
@include('layouts.social')
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/bg_5.jpg) top center; background-size: cover;" >
  <!-- <div class="kids-overlay"></div> -->
  <div class="kids-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-12 kids-section-heading text-center">
          <h2 class="kids-lead" style="top:150px;"><img src="/images/title_inquiry_w.png" alt="タイトル：お問い合わせ"></h2>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- END .header -->
@endsection

@section('content')


<div id="kids-form"  data-section="form">
  <div class="container">
    <div class="row">
      <!-- モーダルウィンドウ(長期休み用) -->
      <div class="modal fade" id="modal-content-holiday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="background:rgba(0,0,0,0.3);">
        <div class="modal-dialog" role="document" style="top:40vh;">
          <div class="modal-content">
            <div class="modal-header">
              <h5>KidsUPからのお知らせ</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="modal-body-holiday">
              <p>12月29日～1月3日までスクールは冬季休業となります。<br>恐れ入りますが、スクールからの返信が1月4日以降となりますことをご了承下さい。</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /モーダルウィンドウ(長期休み用) -->

      <div class="col-md-12 kids-section-heading old_kids-section-heading text-center">

            <p class="kids-sub">
              当スクールへのお問い合わせ・ご依頼の際は、以下のフォームに入力の上、送信ください。<br />
              <a href="/faq">よくあるご質問</a>もご参考ください。<br />
              個別相談会も実施しておりますので、こちらのフォームにてご依頼ください。
            </p>
            <h3>お問い合わせ内容を入力</h3>
      </div>
      <div class="col-lg-8 col-md-offset-2">
          <div class="form-wrapper marginbot-50">
              {!! Form::open(['id' => 'contact-form' , 'url' => '/inquiry']) !!}
              <div class="row">
                      <div class="form-group @if(!empty($errors->first('school')) ) has-error @endif">
                        <label for="school">
                            <span class="label label-required">必須</span>お問い合わせ先
                        </label>
                      <?php
                        $array = array('' => '選択してください');
                        $select = [
                                    null => $array
                                  ];

                        foreach($schools as $row){
                          if(!isset($select[$row->pref]) ){
                            $select[$row->pref]  = array('KidsUP'.$row->school_name.'校' => 'KidsUP'.$row->school_name.'校');
                          }else{
                            $select[$row->pref] += array('KidsUP'.$row->school_name.'校' => 'KidsUP'.$row->school_name.'校');
                          }
                        }
                        $select += array('まだ決まっていない' => 'まだ決まっていない');
                      ?>
                        <div class="form-layout">
                          {!! Form::select('school', $select, old('school') , ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>
                        @if(!empty($errors->first('school')) )<span>お問い合わせ先は必須です</span>@endif
                      </div>
                      <div class="form-group">
                        <span class="label label-required">必須</span>{!! Form::label('name', '保護者のお名前') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '保護者のお名前を入力してください', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        <span class="label label-required">必須</span>{!! Form::label('tel', '電話番号') !!}
                        <input type="tel" id="tel" name="tel" class="form-control" placeholder="例)08012345678" value="{{old('tel')}}" required="required">
                      </div>
                      <div class="form-group">
                        <span class="label label-required">必須</span>{!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control','id' => 'email', 'placeholder' => 'Email', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        <span class="label label-required">必須</span>{!! Form::label('name_child', 'お子様のお名前') !!}
                        {!! Form::text('name_child', old('name_child'), ['class' => 'form-control', 'placeholder' => 'カタカナでお子様のお名前を入力してください', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group @if(!empty($errors->first('year')) || !empty($errors->first('month')) || !empty($errors->first('day')))  has-error @endif">
                        <span class="label label-required">必須</span>{!! Form::label('birth', 'お子様の生年月日') !!}
                        <div class="form-control">
                          <select id="year" name="year">
                            <option value="">--</option>
                            @for ($year = date('Y')-12; $year <= date('Y')-1 ; $year++)
                            <option value="{{$year}}" @if($year == old('year')) selected @endif>{{$year}}年（{{$ConvertToWareki->convertForSeirekiToWareki($year)}}）</option>
                            @endfor
                          </select>
                          <select id="month" name="month">
                            <option value="">--</option>
                            @for ($month = 1; $month < 13 ; $month++)
                            <option value="{{$month}}" @if($month == old('month')) selected @endif>{{$month}}月</option>
                            @endfor
                          </select>
                          <select id="day" name="day">
                            <option value="">--</option>
                            @for ($day = 1; $day < 32 ; $day++)
                            <option value="{{$day}}" @if($day == old('day')) selected @endif>{{$day}}日</option>
                            @endfor
                          </select>
                        </div>
                        @if(!empty($errors->first('year')) || !empty($errors->first('month')) || !empty($errors->first('day')))<span>生年月日は必須です</span>@endif

                      </div>
                      <div class="form-group">
                        <span class="label label-premium">任意</span>{!! Form::label('attend', '幼稚園・学校名') !!}
                        {!! Form::text('attend',old('attend'), ['class' => 'form-control', 'id' => 'attend', 'placeholder' => '所属している幼稚園・学校名']) !!}
                      </div>


<!--
                      <div class="form-group">
                          <label for="age">
                              <span class="label label-required">必須</span>お子様の年齢・学年</label>
                          <div class="form-layout">

                          <select id="infant-age" name="age" class="form-control" required="required">
                              <option value="" @if(old('age') == '') selected="" @endif>選択してください</option>
                              <option value="３歳" @if(old('age') == '３歳') selected="" @endif>３歳</option>
                              <option value="４歳" @if(old('age') == '４歳') selected="" @endif>４歳</option>
                              <option value="５歳" @if(old('age') == '５歳') selected="" @endif>５歳</option>
                              <option value="６歳" @if(old('age') == '６歳') selected="" @endif>６歳</option>
                              <option value="">-------------------------</option>
                              <option value="小学校１年生" @if(old('age') == '小学校１年生') selected="" @endif>小学校１年生</option>
                              <option value="小学校２年生" @if(old('age') == '小学校２年生') selected="" @endif>小学校２年生</option>
                              <option value="小学校３年生" @if(old('age') == '小学校３年生') selected="" @endif>小学校３年生</option>
                              <option value="小学校４年生" @if(old('age') == '小学校４年生') selected="" @endif>小学校４年生</option>
                              <option value="小学校５年生" @if(old('age') == '小学校５年生') selected="" @endif>小学校５年生</option>
                              <option value="小学校６年生" @if(old('age') == '小学校６年生') selected="" @endif>小学校６年生</option>
                          </select>
                        </div>
                      </div>
-->

                      <div class="form-group @if(!empty($errors->first('body')))  has-error @endif">

                          <span class="label label-required">必須</span>{!! Form::label('name', '本文') !!}
                        @if(isset($req['body']))
                          {!! Form::textarea('body', $req['body'] ,array('rows'=>'9','cols' => '25','class'=>'form-control','id' => 'message','placeholder'=>'お問い合わせ内容を入力してください　&#13;&#10;例）説明会に参加したいのですが、予定が合いません。個別相談会に行きたいです。')) !!}
                        @else
                          {!! Form::textarea('body', old('body') ,array('rows'=>'9','cols' => '25','class'=>'form-control','id' => 'message','placeholder'=>'お問い合わせ内容を入力してください　&#13;&#10;例）説明会に参加したいのですが、予定が合いません。個別相談会に行きたいです。')) !!}
                        @endif
                        @if(!empty($errors->first('body')) )<span>本文は必須です</span>@endif
                      </div>


                      <p class="text-center notes">「<a href="https://www.p-up.world/privacypolicy/">プライバシーポリシー</a>」をご確認頂き、ご同意の上で送信を行ってください。</p>
                      <button type="submit" class="btn btn-primary btn-md" id="btnContactUs">
                          内容の確認へ</button>

              </div>
              {!! Form::close() !!}

          </div>

      </div>


        </div>
     </div>
</div>
@endsection

@section('js')
<script>
var loadEventFlg = false;
var eventExists = null;
// カレンダー設定
$(function () {

  //2019年夏休みの長期休暇のお知らせモーダル
  var now = new Date();
  var holiday_start = new Date('2021/12/29 00:00:00');
  var holiday_end   = new Date('2023/01/03 23:59:59');
  if( now.getTime() > holiday_start.getTime()
   && now.getTime() < holiday_end.getTime()
  ){
    //$('#modal-content-holiday').modal();//長期休暇のお知らせモーダル
  }
});
</script>
@endsection
