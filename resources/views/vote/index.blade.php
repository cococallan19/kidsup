@extends('layouts.layout')

@section('meta')
<title>KidsUP（キッズアップ）公式キャラクター決定投票 | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
<meta name="description" content="KidsUPの１周年を記念して、「KidsUPオリジナルキャラクター」を募集して参りました。今回総勢87キャラクターの中から８キャラクターを激選。お気に入りのキャラクターに投票してみてください" />
<meta name="keywords" content="kidsup,英語,学童保育,プリスクール,アフタースクール" />
<meta name="author" content="KidsUP" />
<!-- Facebook and Twitter integration -->
<meta property="og:title" content="KidsUP（キッズアップ）公式キャラクター決定投票"/>
<meta property="og:image" content="/resources/vote/images/kids_vote_FBbnr.jpg"/>
<meta property="og:url" content="{{\Request::url()}}"/>
<meta property="og:site_name" content="KidsUP"/>
<meta property="og:description" content="KidsUPの１周年を記念して、「KidsUPオリジナルキャラクター」を募集して参りました。今回総勢87キャラクターの中から８キャラクターを激選。お気に入りのキャラクターに投票してみてください"/>
<meta name="twitter:title" content="KidsUP（キッズアップ）公式キャラクター決定投票" />
<meta name="twitter:image" content="/resources/vote/images/kids_vote_FBbnr.jpg" />
<meta name="twitter:url" content="{{\Request::url()}}" />
<meta name="twitter:card" content="" />
<link rel="stylesheet" href="/resources/vote/css/style.css">
@endsection

@section('intro')
<header id="kids-hero" class="lower-pages" data-section="home" role="banner" style="background: url(/images/bg_4.jpg) top left; background-size: cover;" >
  <div class="kids-overlay"></div>
  <div class="kids-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 kids-section-heading text-center">
          <!--<h2 class="kids-lead"><img src="/images/title_about-us_w.png" alt="タイトル：KidsUPとは？"></h2>-->
        </div>
      </div>
    </div>
  </div>
</header>
<!-- END .header -->
@endsection

@section('content')


<div id="kids-vote" data-section="vote">


  <div class="container">
    <div class="intro row">
        <figure>
          <img src="/resources/vote/images/kids_vote_bnr.jpg" alt="バナーエリア" class="img-responsive banner">
        </figure>
        <div class="col-md-offset-2 col-md-8">
          <p class="text-center">
            KidsUPの１周年を記念して、「KidsUPオリジナルキャラクター」を募集して参りました。<br />
            今回総勢87キャラクターの中から８キャラクターを激選。<br />
            お気に入りのキャラクターに投票してみてください☆
          </p>
        </div>
    </div>

    <div class="row row-height">
      <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
      @for ($i = 1; $i < 9; $i++)
      <div class="character-box col-md-3 col-sm-4 col-xs-6">
        <div class="character">
          <figure>
            <img class="img-responsive" src="/resources/vote/images/{{$i}}.jpg" alt="キャラクター" >
          </figure>
          <div id="vote_{{$i}}" class="vote-num"><span>@if(isset($votes[$i])) {{count($votes[$i])}} @else 0 @endif</span>票</div>
          <a href="#votePopup" class="vote-popup" data-effect="mfp-move-from-top" data-vote="{{$i}}"><button type="button" name="button" class="vote-button" id="button_{{$i}}"><i class="glyphicon glyphicon-star button-vote" area-hidden="true"></i>投票する</button></a>
        </div>
      </div>
      @endfor

    </div>
   </div>


   <!-- Popup Content -->
   <div id="votePopup" class="white-popup mfp-hide">
     <h3>投票ありがとうございます！</h3>
     <p class="text-center">
       投票頂いた内容を元に、キャラクターを選定させて頂きます。<br />
       キャラクターが決定いたしましたら、こちらのページで改めてお知らせさせて頂きます。
     </p>
   </div>


</div>

@include('parts.inqury')
@endsection

@section('js')
<script>
  var storage = localStorage;

  if( localStorage.getItem('voteid')) {
    var voteidList = JSON.parse(storage.getItem('voteid'));

    for (var key in voteidList) {
      $('#button_' + voteidList[key]).prop('disabled', true);
    }


  }


  $(function() {
    $('.vote-popup').magnificPopup({
      type: 'inline',
      preloader: false,
      removalDelay: 100,
      closeBtnInside: false,
      callbacks: {
        beforeOpen: function() {
           this.st.mainClass = this.st.el.attr('data-effect');
        }
      },
      midClick: true
    });
    $('.vote-popup').on('click',function(){
      var voteNum = $(this).data('vote');
      var num = $('#vote_' + voteNum + ' span').text();
      $('#vote_' + voteNum + ' span').text(parseInt(num,10) + 1);

      if( !localStorage.getItem('voteid')) {
        var str = JSON.stringify({0:voteNum});
        storage.setItem('voteid', str);
      } else {
        var voteid = storage.getItem('voteid');
        var obj = JSON.parse(voteid);

        var keyName = Object.keys(obj).length;
        var addData = {};
        addData[keyName] = voteNum;

        // obj.push(addData);
        var newObj = Object.assign( obj, addData );

        storage.setItem('voteid', JSON.stringify(newObj));
      }

      var results = postVoteAjax(voteNum);

      $('#button_' + voteNum).prop('disabled', true);
    });

    function postVoteAjax(voteNum){
      var _token = $('#token').val();
      $.ajaxSetup({
         headers: { 'X-CSRF-Token' : _token }
      });

      return $.ajax({
          type: 'post',
          scriptCharset: 'utf-8',
          url:  '/vote',
          dataType:'json',
          data: {'vote_id':voteNum}
          });

    }


  });

</script>
@endsection
