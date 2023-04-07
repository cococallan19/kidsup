
@inject('ConvertToWareki', 'App\Http\Library\ConvertToWareki')

<!doctype html>
<html lang="en">
  <head>
    @include('layouts.gtmheader')


    <script>
      (function(d) {
        var config = {
          kitId: 'qfz2fer',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
      <style>
        body {
        font-family: kozuka-gothic-pro, arial, sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        scroll-behavior: smooth;
        font-size:  16px;
        overflow-x: hidden;
        
      }
      

  </style>
<!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/396c39bc59.js" crossorigin="anonymous"></script>
     <!-- Adobe Fonts -->
    
	  
    <title>Spring School 2023</title>
    <link rel="icon" type="image/x-icon" href="/images/springschool/images-boilerplate/Favicon.png">



<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preload" href="/css/GoogleAD.css" as="style" />

    <meta property="og:title" content="学童保育型英会話スクール・幼児クラス - KidsUP （キッズアップ）">
    <meta property="og:image" content="/images/springschool/images-boilerplate/fb_main.jpg">
    <meta property="og:url" content="https://kids-up.jp">
    <meta property="og:site_name" content="KidsUP">
    <meta property="og:description" content="KidsUP（キッズアップ）は英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。">
    <meta name="twitter:title" content="学童保育型英会話スクール・幼児クラス - KidsUP （キッズアップ）">
    <meta name="twitter:image" content="/images/springschool/images-boilerplate/fb_main.jpg">
    <meta name="twitter:url" content="https://kids-up.jp">
    <meta name="twitter:card" content="">

<!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/springschool/Common.css">
    <link rel="stylesheet" href="css/springschool/Specific.css">
    <link rel="stylesheet" href="css/springschool/SchoolList.css">
<!-- META END -->
</head>

<body>
  @include('layouts.gtmbody')
<content-wrapper style="overflow-x: hidden">
 <!-- Navbar START -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
 <nav class="navbar  navbar-expand-lg Navbar-Custom sticky-top">
  <div class="container-fluid">
    <div class="LargeDisplay"><a class= "navbar-brand d-flex w-50 me-auto" href="/"><img src="/images/springschool/images-boilerplate/Navlogo-Desktop.svg" class="NavLogo" alt=""/></a> </div>
    <div class="MobileDisplay"><a class= "navbar-brand d-flex w-50 me-auto" href="/"><img src="/images/springschool/images-boilerplate/Navlogo-Mobile.svg" class="NavLogo" alt=""/></a> </div>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="toggler-icon TopBar"></span>
      <span class="toggler-icon MiddleBar1"></span>
      <span class="toggler-icon MiddleBar2"></span>
      <span class="toggler-icon BottomBar"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav nav-pills ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#div1">メリット</a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#div2">お客様の声</a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#div3">カレンダー&料金表</a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#div4">ギャラリー</a>
        </li>
        <a class="NavBtn  text-nowrap"href="/inquiry" role="button">お問い合わせ</a> 
      </ul>
    </div>
  </div>
</nav>

 <!-- BANNER START -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="row" id="Banner">


  <div class="col-sm-6"  style="background-color: #F3F4DF;">
    <img src="/images/springschool/SpringSchoolBanner-Desktop.jpg" alt="SpringSchoolBanner-Desktop" class="img-fluid LargeDisplay" style="width: 100%;">
    <img src="/images/springschool/SpringSchoolBanner-Mobile.jpg" alt="SpringSchoolBanner-Mobile" class="img-fluid MobileDisplay" style="width: 100%;">
  </div>


  <div class="col-sm-6" style="background-color: #F3F4DF;">
  <div class="container Horizontal-Center Vertical-Center BannerContainer">  
    <div class="PaddingBand"></div><div class="PaddingBand MobileDisplay"></div>
  <h1>スプリングスクール<br>
    申込受付中！</h1>
  <br>
  <h2 style="font-family: kozuka-gothic-pro;"> クラフト、ゲーム、マジックなど<br>
    15種類以上のアクティビティ<br>
    からお選びいただけます</h2>
  <br>

  <div class="Container-Parent">

  <a class="btn Btn-Dropdown collapsed " data-bs-toggle="collapse" href="#Moshikome-1" role="button" aria-expanded="false" aria-controls="Moshikome-1">
    お申込みはこちら <img src="/images/springschool/images-boilerplate/Arrow-Down.svg" alt="" class="Child-Element Dropdown-Img" style="left: 80%; vertical-align: middle;">
  </a>
</div>
<div class="MobileDisplay">
<ddn id="BannerMoshikome">

  <div class="collapse" id="Moshikome-1"  data-bs-parent="#BannerMoshikome">

      <div class="row Horizontal-Center" style="width: 100%;">
        <div class="col-sm-6" style="padding: 0;">
  
  
          <div class="List-Item-Header">東京</div>
            <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/ZrkYv1kqjBpe1M6k8">KidsUP田園調布雪谷</a> 
            <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/Fn8CoMGN4by8yfpn8">KidsUP蒲田駅前</a> 
            <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/NZQRqe95FG73fSQy8">KidsUP池上</a> 
            <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/UEUPdvWn7x1qKpuH7">KidsUP東陽町</a> 
            <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/FNEibCCB8DsYR6BJ7">KidsUP長原</a> 
            <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/ZLzGtazLNLgJsigj6">KidsUP門前仲町</a> 
            <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/eJFaPoipLJVhgdqQA">KidsUP戸越</a> 
            <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/SaemSSUK6rvcz2Dh7">KidsUP成城</a> 
            <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/JR4tGkLbLtX2kzZf6">KidsUP大森</a> 
            <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/6BDrUeK1oocGetP76">KidsUP早稲田</a> 
            <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/g2PqxJ1BjbXNGdpz6">KidsUPりんかい東雲</a> 
            <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/FXRyu8KbYENxovD76">KidsUP等々力</a> 
            <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/MSqMaFbcwD5ZrAVL8">KidsUP大島</a> 
            <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/KtcZdKaFdSw3VBYz5">KidsUP三鷹</a> 
            <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/57stZrkXhobyL3sw5">KidsUP南町田グランベリーパーク</a> 
            <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/76wQwn5kztqa5kiJ6">KidsUP大井</a> 
            <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/kowZsdmrrBe2tk7Z7">KidsUP晴海</a> 
  
  
  
    
            
    
        </div>
       
        <div class="col-sm-6" style="padding: 0;">
  
            <div class="LargeDisplay"><div class="List-Header-Blank"></div></div>
            <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/v86HKZnFrT8L15Rq7">KidsUP四谷</a> 
            <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/tim45g9sZphsVHSo6">KidsUP赤羽</a> 
            <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/m6fe16AtYeMXfiFWA">KidsUP北品川</a> 
            <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/MQxNkmqmgfYBioo68">KidsUP鷺宮</a> 
            <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/M18g17EKNT6PQSRL7">KidsUP馬込</a> 
  
            <div class="List-Item-Header">神奈川</div>        
        
        
         <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/TpxvwnQT88HapaC57">KidsUP新川崎</a> 
         <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/BztVgznFn7x37TQs7">KidsUP二俣川</a> 
         <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/WWrCHYwa2CFQYxsx7">KidsUP天王町</a> 
         <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/ynWfKJYyWLrQ3Liy6">KidsUP溝の口</a> 
         <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/JuyrZku5a94XDJNW6">KidsUP矢向</a> 
         <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/asd7vL9133FKGowS6">KidsUP大倉山</a> 
         <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/Km6PzCbujyKrZ8LLA">KidsUP武蔵新城</a> 
         <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/LnBJcUF1uTejhcmM7">KidsUP武蔵小杉</a> 
  
  
         <div class="List-Item-Header">千葉</div>    
         <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/Np4NxMb4tnuqEF4L7">KidsUP新浦安</a> 
         <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/nrQFpokPqE2h4ECw7">KidsUPソコラ南行徳</a> 
  
        </div>
  
    </div>
  
  
    </div>
</ddn>
</div>



<div class="PaddingBand"></div><div class="PaddingBand MobileDisplay"></div><div class="PaddingBandHalf MobileDisplay"></div>
  
  </div>


</div>

<div>


   <!-- Moshikome List 1 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
   <div class="LargeDisplay container Container-Parent" style="background-color: #F8F5F0;">
    <ddn id="BannerMoshikome Child-Element">
    
      <div class="collapse" id="Moshikome-1"  data-bs-parent="#BannerMoshikome">
    
          <div class="row">
            <div class="col-sm-6" style="padding: 0;">
      
      
              <div class="List-Item-Header">東京</div>
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/ZrkYv1kqjBpe1M6k8">KidsUP田園調布雪谷</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/Fn8CoMGN4by8yfpn8">KidsUP蒲田駅前</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/NZQRqe95FG73fSQy8">KidsUP池上</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/UEUPdvWn7x1qKpuH7">KidsUP東陽町</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/FNEibCCB8DsYR6BJ7">KidsUP長原</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/ZLzGtazLNLgJsigj6">KidsUP門前仲町</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/eJFaPoipLJVhgdqQA">KidsUP戸越</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/SaemSSUK6rvcz2Dh7">KidsUP成城</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/JR4tGkLbLtX2kzZf6">KidsUP大森</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/6BDrUeK1oocGetP76">KidsUP早稲田</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/g2PqxJ1BjbXNGdpz6">KidsUPりんかい東雲</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/FXRyu8KbYENxovD76">KidsUP等々力</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/MSqMaFbcwD5ZrAVL8">KidsUP大島</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/KtcZdKaFdSw3VBYz5">KidsUP三鷹</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/57stZrkXhobyL3sw5">KidsUP南町田グランベリーパーク</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/76wQwn5kztqa5kiJ6">KidsUP大井</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/kowZsdmrrBe2tk7Z7">KidsUP晴海</a> 
      
      
      
        
                
        
            </div>
           
            <div class="col-sm-6" style="padding: 0;">
      
                <div class="LargeDisplay"><div class="List-Header-Blank"></div></div>
                <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/v86HKZnFrT8L15Rq7">KidsUP四谷</a> 
                <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/tim45g9sZphsVHSo6">KidsUP赤羽</a> 
                <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/m6fe16AtYeMXfiFWA">KidsUP北品川</a> 
                <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/MQxNkmqmgfYBioo68">KidsUP鷺宮</a> 
                <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/M18g17EKNT6PQSRL7">KidsUP馬込</a> 
      
                <div class="List-Item-Header">神奈川</div>        
            
            
             <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/TpxvwnQT88HapaC57">KidsUP新川崎</a> 
             <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/BztVgznFn7x37TQs7">KidsUP二俣川</a> 
             <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/WWrCHYwa2CFQYxsx7">KidsUP天王町</a> 
             <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/ynWfKJYyWLrQ3Liy6">KidsUP溝の口</a> 
             <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/JuyrZku5a94XDJNW6">KidsUP矢向</a> 
             <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/asd7vL9133FKGowS6">KidsUP大倉山</a> 
             <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/Km6PzCbujyKrZ8LLA">KidsUP武蔵新城</a> 
             <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/LnBJcUF1uTejhcmM7">KidsUP武蔵小杉</a> 
      
      
             <div class="List-Item-Header">千葉</div>    
             <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/Np4NxMb4tnuqEF4L7">KidsUP新浦安</a> 
             <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/nrQFpokPqE2h4ECw7">KidsUPソコラ南行徳</a> 
      
            </div>
      
        </div>
      
      
        </div>
    </ddn>
    </div>
</div>
</div>


 <!-- SPRING IS HERE -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div id="SpringIsHere" style="background-color: #96D9EC;">
<div class="container">
  <div class="row">
    <div class="col-6-sm col-md-7 ">
      <div class="Vertical-Center">
      <div class="PaddingBand"></div><div class="PaddingBand MobileDisplay"></div><div class="PaddingBandHalf MobileDisplay"></div>
      


      <h2 style="color: #212021; padding-bottom: 10px;">Spring is Here! <br></h2>

      <p style="color: #212021;">
        春が来た！キッズアップのスプリング<br class="MobileDisplay">
        スクールに参加しませんか？<br>
        オールイングリッシュの環境で<br class="MobileDisplay">
        新しい友達、新しい思い出を作りましょう。</p>
      
      <div class="PaddingBand"></div>
    </div>
    </div>


    <div class="col-6-sm col-md-5">
      <div class="PaddingBand"></div>
      <img src="/images/springschool/SpringIsHere-Img.png" alt="SpringIsHere-Img" class="img-fluid Horizontal-Center" style="width: 80%;">
    </div>
  </div>












</div>

 <!-- x3 Benefits -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div id="x3-Benefits-&-Testimonials" style="background-color: #D6E37F;" class="Container-Parent">
<div class="PaddingBand" id="div1"></div>
<div class="PaddingBand LargeDisplay"></div>
<div class="container">
<div class="row ">


<div class="col-sm-4">
  
  <img src="/images/springschool/Promo-1.png" alt="Promo-1" class="img-fluid Horizontal-Center" style="width: 100%;">
  <br>
  <p>
    朝は8時30分からの事前お預かり、<br>
    最長20時30分まで延長も承ります！<br>
    午後のレギュラーレッスンもこの時期<br>
    は誰でも利用可能です。<br>
    <br>
    ※お預かりできる時間帯は、スクール<br class="MobileDisplay">によって<br class="LargeDisplay">
    異なります。
  </p>

</div>

<div class="col-sm-4">
  <img src="/images/springschool/Promo-2.png" alt="Promo-2" class="img-fluid Horizontal-Center" style="width: 100%;">
  <br>
<p>
  Kids UPの会員様以外でも<br>
  満3歳～小学6年生までのお子様なら<br>
  どなたでもご参加いただけます！<br>

</p>

</div>

<div class="col-sm-4">
  <img src="/images/springschool/Promo-3.png" alt="Promo-3" class="img-fluid Horizontal-Center" style="width: 100%;">
  <br>
<p>
  ５回以上のご参加で、お得な割引<br class="MobileDisplay">料金も<br class="LargeDisplay">
  ご用意してます！</p>

</div>
</div>


<!-- PARENT TESTIMONIAL DESKTOP -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<div class="PaddingBand" id="div2"></div>
<h2 style="color: #212021;">こんなお声をいただきました♪</h2>
<div class="PaddingBand"></div>

<div class="row LargeDisplay">


  <div class="col-4">
    <div class="container TestimonialCard Container-Parent" style="overflow-x: hidden">
    <div class="card-body TestimonialBody" >
    <div class="PaddingBand"></div>
    <p>
      普段は週2回しか通わせていませんが
      シーズナルスクールの期間は毎日のように通わせています。
      より多くの時間英語に触れることで
      レッスンの中でも先生の話が理解できるようになってきたようです。
      <br><br>
    <br>
    <span style="font-weight: bolder;"> Tさん</span>
    </p>
    </div>
    <img src="/images/springschool/TestimonialVector-1.svg" alt="TestimonialVector-1" width="50%"  style="top: 100%; float: right; opacity: 0;" >
    <img src="/images/springschool/TestimonialVector-1.svg" alt="TestimonialVector-1" width="50%" class="Child-Element Anchor-Point-Bottom-Right "  style="top: 100%; left: 100%">
    </div>
  </div>


  <div class="col-4">
    <div class="container TestimonialCard Container-Parent" style="overflow-x: hidden">
    <div class="card-body TestimonialBody" >
    <div class="PaddingBand"></div>
    <p>
      楽しく英語に触れてほしい、という思いから
シーズナルスクールに参加しました。<br><br>

普段は末っ子気質ですが、Kids UPでは年下
のお友達を助けている
と聞き、驚きです！ <br>

    <br>
    <span style="font-weight: bolder;"> Sさん</span>
    </p>
    </div>
    <img src="/images/springschool/TestimonialVector-2.svg" alt="TestimonialVector-2" width="50%"  style="top: 100%; float: right; opacity: 0;" >
    <img src="/images/springschool/TestimonialVector-2.svg" alt="TestimonialVector-2" width="50%" class="Child-Element Anchor-Point-Bottom-Right "  style="top: 100%; left: 100%">
    </div>
  </div>


  <div class="col-4">
    <div class="container TestimonialCard Container-Parent" style="overflow-x: hidden">
    <div class="card-body TestimonialBody" >
    <div class="PaddingBand"></div>
    <p>
      保育園以外の所に預けるのが初めてだった為
      母子共に緊張していましたが、楽しい先生のおかげで
      数日したら慣れました。「Kids UPではね
      Please!って言うんだよ！」と家でも英語を教えてくれます。
      これからが楽しみです。
       <br><br>

    <br>
    <span style="font-weight: bolder;"> Mさん</span>
    </p>
    </div>
    <img src="/images/springschool/TestimonialVector-3.svg" alt="TestimonialVector-3" width="50%"  style="top: 100%; float: right; opacity: 0;" >
    <img src="/images/springschool/TestimonialVector-3.svg" alt="TestimonialVector-3" width="50%" class="Child-Element Anchor-Point-Bottom-Right "  style="top: 100%; left: 100%">
    </div>
  </div>
  <div class="col-4"></div>
</div>

<!-- PARENT TESTIMONIAL MOBILE -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="MobileDisplay">
<div id="TestimonialCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner" >
                 
                  <div class="carousel-item active parent-card">
                        <div class="container TestimonialCard Container-Parent" style="overflow-x: hidden;">
                        <div class="card-body TestimonialBody" >
                        <div class="PaddingBand"></div>
                        <p style="padding-left: 15px; padding-right: 15px;">
                          普段は週2回しか通わせていませんが
                          シーズナルスクールの期間は毎日のように通わせています。
                          より多くの時間英語に触れることで
                          レッスンの中でも先生の話が理解できるようになってきたようです。
                          <br>
                        <br><br>
                        <span style="font-weight: bolder;"> Tさん</span>
                        </p>
                        </div>
                        <img src="/images/springschool/TestimonialVector-1.svg" alt="TestimonialVector-1" width="50%"  style="top: 100%; float: right; opacity: 0;" >
                        <img src="/images/springschool/TestimonialVector-1.svg" alt="TestimonialVector-1" width="50%" class="Child-Element Anchor-Point-Bottom-Right "  style="top: 100%; left: 100%">
                        </div>
                  </div>



                  <div class="carousel-item parent-card">
                        <div class="container TestimonialCard Container-Parent" style="overflow-x: hidden">
                        <div class="card-body TestimonialBody" >
                        <div class="PaddingBand"></div>
                        <p style="padding-left: 15px; padding-right: 15px;">
                          楽しく英語に触れてほしい、という思いから
                          シーズナルスクールに参加しました。<br><br>
                          
                          普段は末っ子気質ですが、Kids UPでは年下
                          のお友達を助けている
                          と聞き、驚きです！<br>

                        <br>
                        <span style="font-weight: bolder;"> Sさん</span>
                        </p>
                        </div>
                        <img src="/images/springschool/TestimonialVector-2.svg" alt="TestimonialVector-2" width="50%"  style="top: 100%; float: right; opacity: 0;" >
                        <img src="/images/springschool/TestimonialVector-2.svg" alt="TestimonialVector-2" width="50%" class="Child-Element Anchor-Point-Bottom-Right "  style="top: 100%; left: 100%">
                        </div>
                  </div>



                  <div class="carousel-item parent-card">
                    
                    
                          <div class="container TestimonialCard Container-Parent" style="overflow-x: hidden">
                          <div class="card-body TestimonialBody" >
                          <div class="PaddingBand"></div>
                          <p style="padding-left: 15px; padding-right: 15px;">
                            保育園以外の所に預けるのが初めてだった為
母子共に緊張していましたが、楽しい先生のおかげで
数日したら慣れました。「Kids UPではね
Please!って言うんだよ！」と家でも英語を教えてくれます。
これからが楽しみです。
 <br> <br>

                          <br>
                          <span style="font-weight: bolder;"> Mさん</span>
                          </p>
                          </div>
                          <img src="/images/springschool/TestimonialVector-3.svg" alt="TestimonialVector-3" width="50%"  style="top: 100%; float: right; opacity: 0;" >
                          <img src="/images/springschool/TestimonialVector-3.svg" alt="TestimonialVector-3" width="50%" class="Child-Element Anchor-Point-Bottom-Right "  style="top: 100%; left: 100%">
                          </div>

                  </div>




                </div>

                <img src="/images/springschool/Gallery-Arrow-Left.svg" style="top: 50%; left: 0%; opacity: 100%; width: 50px; height: 50px; position: absolute;" class=" Anchor-Point-Center CarouselButton carousel-control-prev" type="button" data-bs-target="#TestimonialCarousel" data-bs-slide="prev">
                <img src="/images/springschool/Gallery-Arrow-Right.svg" style="top: 50%; left: 100%; opacity: 100%; width: 50px; height: 50px; position: absolute;" class=" Anchor-Point-Center  CarouselButton carousel-control-prev" type="button" data-bs-target="#TestimonialCarousel"data-bs-slide="next">

    </div>


</div>


<div class="PaddingBand"></div>

<img src="/images/springschool/Ale-Breakpoint.png" alt="Ale-Breakpoint" class="img-fluid Horizontal-Center">

<div class="PaddingBand"></div>

 <!-- x4 Benefits -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="container " style="background-color: #F8F5F0; border-radius: 50px; " >

<div class="row" style="padding-left: 2.5%; padding-right: 2.5%; padding-top: 5%; padding-bottom: 5%;">


  <div class="row">



    <div class="col-sm-6">
    <div class="row ">

      <div class="col-6">
      <div class="row">
      <div class="col-sm-4 FourPointsBoxes"><img src="/images/springschool/Point-1.svg" alt="Point-1" class="img-fluid FourPointsIcons Horizontal-Center"></div>
      <div class="col-sm-8 FourPointsBoxes"><p class="p-sub-2 FourPointsText ">ネイティブスピーカーから生きた英語が学べます！</p></div>
      </div>
      </div>

    

      <div class="col-6">

      <div class="row">
      <div class="col-sm-4 FourPointsBoxes"><img src="/images/springschool/Point-2.svg" alt="Point-2" class="img-fluid FourPointsIcons Horizontal-Center"></div>
      <div class="col-sm-8 FourPointsBoxes"><p class="p-sub-2 FourPointsText ">バイリンガルスタッフも在籍<br>
        ※困った時には日本語でSOSも可能です</p></div>
      </div>
      </div>
      
    </div>
    </div>


      
    <div class="col-sm-6">
      <div class="row">
  
        <div class="col-6">
        <div class="row">
        <div class="col-sm-4 FourPointsBoxes"><img src="/images/springschool/Point-3.svg" alt="Point-3" class="img-fluid FourPointsIcons Horizontal-Center"></div>
        <div class="col-sm-8 FourPointsBoxes Ho"><p class="p-sub-2 FourPointsText ">先生やお友達と長時間一緒に過ごすことで
          強い絆をつくります</p></div>
        </div>
        </div>
  
      
  
        <div class="col-6">
  
        <div class="row">
        <div class="col-sm-4 FourPointsBoxes" ><img src="/images/springschool/Point-4.svg" alt="Point-4" class="img-fluid FourPointsIcons Horizontal-Center"></div>
        <div class="col-sm-8 FourPointsBoxes "><p class="p-sub-2 FourPointsText ">全ての先生が「社員」なので
          しっかりとしたサポート体制を取ることができます</p></div>
        </div>
        </div>
        
      </div>
      </div>
  
    
    </div>
  
  </div>


</div>
<div class="PaddingBand"></div>
</div>

</div>

 <!-- BIG DROPDOWN -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div style="background-color: #D6E37F;" class="Container-Parent">
<div class="LargeDisplay KidBreakpointPadding"></div>
<img src="/images/springschool/Decoration-Flowers.svg" alt="" class="LargeDisplay Child-Element Anchor-Point-Bottom-Center"  style="width: 70%; left: 50%; top: 100%;">
<img src="/images/springschool/Breakpoint-Kid.png" alt="Breakpoint-Kid" class="LargeDisplay KidBreakpointScale Child-Element Anchor-Point-Center" >
</div>


<div class="ActivityBackground">

  <div class="container Container-Parent" style="width: 100%;">  
    
    
    <div class="Child-Element LargeDisplay" style="width: 100%;">  
    <a class="btn Btn-Dropdown collapsed" style="max-width: 50%;" data-bs-toggle="collapse" href="#Moshikome-2" role="button" aria-expanded="false" aria-controls="Moshikome-2">
    お申込みはこちら <img src="/images/springschool/images-boilerplate/Arrow-Down.svg" alt="" class="Child-Element Dropdown-Img" style="left: 80%; vertical-align: middle;"></a></div>
  
  
    <ddn id="BigMoshikome" class="LargeDisplay">
    
      <div class="collapse" id="Moshikome-2"  data-bs-parent="#BigMoshikome">
        <div class="PaddingBand"></div>       <div class="PaddingBand"></div>

          <div class="row">
            <div class="col-sm-6" style="padding: 0;">
      
              <div class="List-Item-Header">東京</div>
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/ZrkYv1kqjBpe1M6k8">KidsUP田園調布雪谷</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/Fn8CoMGN4by8yfpn8">KidsUP蒲田駅前</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/NZQRqe95FG73fSQy8">KidsUP池上</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/UEUPdvWn7x1qKpuH7">KidsUP東陽町</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/FNEibCCB8DsYR6BJ7">KidsUP長原</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/ZLzGtazLNLgJsigj6">KidsUP門前仲町</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/eJFaPoipLJVhgdqQA">KidsUP戸越</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/SaemSSUK6rvcz2Dh7">KidsUP成城</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/JR4tGkLbLtX2kzZf6">KidsUP大森</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/6BDrUeK1oocGetP76">KidsUP早稲田</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/g2PqxJ1BjbXNGdpz6">KidsUPりんかい東雲</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/FXRyu8KbYENxovD76">KidsUP等々力</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/MSqMaFbcwD5ZrAVL8">KidsUP大島</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/KtcZdKaFdSw3VBYz5">KidsUP三鷹</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/57stZrkXhobyL3sw5">KidsUP南町田グランベリーパーク</a> 
                <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/76wQwn5kztqa5kiJ6">KidsUP大井</a> 
                <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/kowZsdmrrBe2tk7Z7">KidsUP晴海</a> 
      
      
      
        
                
        
            </div>
           
            <div class="col-sm-6" style="padding: 0;">
      
                <div class="LargeDisplay"><div class="List-Header-Blank"></div></div>
                <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/v86HKZnFrT8L15Rq7">KidsUP四谷</a> 
                <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/tim45g9sZphsVHSo6">KidsUP赤羽</a> 
                <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/m6fe16AtYeMXfiFWA">KidsUP北品川</a> 
                <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/MQxNkmqmgfYBioo68">KidsUP鷺宮</a> 
                <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/M18g17EKNT6PQSRL7">KidsUP馬込</a> 
      
                <div class="List-Item-Header">神奈川</div>        
            
            
             <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/TpxvwnQT88HapaC57">KidsUP新川崎</a> 
             <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/BztVgznFn7x37TQs7">KidsUP二俣川</a> 
             <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/WWrCHYwa2CFQYxsx7">KidsUP天王町</a> 
             <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/ynWfKJYyWLrQ3Liy6">KidsUP溝の口</a> 
             <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/JuyrZku5a94XDJNW6">KidsUP矢向</a> 
             <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/asd7vL9133FKGowS6">KidsUP大倉山</a> 
             <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/Km6PzCbujyKrZ8LLA">KidsUP武蔵新城</a> 
             <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/LnBJcUF1uTejhcmM7">KidsUP武蔵小杉</a> 
      
      
             <div class="List-Item-Header">千葉</div>    
             <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/Np4NxMb4tnuqEF4L7">KidsUP新浦安</a> 
             <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/nrQFpokPqE2h4ECw7">KidsUPソコラ南行徳</a> 
      
            </div>
      
        </div>
      
      
        </div>
    </ddn>
  
  
  
  
  
  </div>

 <!-- MOBILE DROPDOWN -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

  <div class="container MobileDisplay">
    <div class="PaddingBand"></div>
    <div class="Container-Parent">
    <a class="btn Btn-Dropdown collapsed " data-bs-toggle="collapse" href="#Moshikome-1" role="button" aria-expanded="false" aria-controls="Moshikome-1">
      お申込みはこちら <img src="/images/springschool/images-boilerplate/Arrow-Down.svg" alt="" class="Child-Element Dropdown-Img" style="left: 80%; vertical-align: middle;">
    </a>
  </div>
  
  <ddn id="BannerMoshikome">
  
    <div class="collapse" id="Moshikome-1"  data-bs-parent="#BannerMoshikome">
  
        <div class="row Horizontal-Center" style="width: 100%;">
          <div class="col-sm-6" style="padding: 0;">
    
    
            <div class="List-Item-Header">東京</div>
              <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/ZrkYv1kqjBpe1M6k8">KidsUP田園調布雪谷</a> 
              <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/Fn8CoMGN4by8yfpn8">KidsUP蒲田駅前</a> 
              <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/NZQRqe95FG73fSQy8">KidsUP池上</a> 
              <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/UEUPdvWn7x1qKpuH7">KidsUP東陽町</a> 
              <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/FNEibCCB8DsYR6BJ7">KidsUP長原</a> 
              <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/ZLzGtazLNLgJsigj6">KidsUP門前仲町</a> 
              <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/eJFaPoipLJVhgdqQA">KidsUP戸越</a> 
              <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/SaemSSUK6rvcz2Dh7">KidsUP成城</a> 
              <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/JR4tGkLbLtX2kzZf6">KidsUP大森</a> 
              <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/6BDrUeK1oocGetP76">KidsUP早稲田</a> 
              <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/g2PqxJ1BjbXNGdpz6">KidsUPりんかい東雲</a> 
              <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/FXRyu8KbYENxovD76">KidsUP等々力</a> 
              <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/MSqMaFbcwD5ZrAVL8">KidsUP大島</a> 
              <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/KtcZdKaFdSw3VBYz5">KidsUP三鷹</a> 
              <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/57stZrkXhobyL3sw5">KidsUP南町田グランベリーパーク</a> 
              <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/76wQwn5kztqa5kiJ6">KidsUP大井</a> 
              <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/kowZsdmrrBe2tk7Z7">KidsUP晴海</a> 
    
    
    
      
              
      
          </div>
         
          <div class="col-sm-6" style="padding: 0;">
    
              <div class="LargeDisplay"><div class="List-Header-Blank"></div></div>
              <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/v86HKZnFrT8L15Rq7">KidsUP四谷</a> 
              <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/tim45g9sZphsVHSo6">KidsUP赤羽</a> 
              <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/m6fe16AtYeMXfiFWA">KidsUP北品川</a> 
              <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/MQxNkmqmgfYBioo68">KidsUP鷺宮</a> 
              <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/M18g17EKNT6PQSRL7">KidsUP馬込</a> 
    
              <div class="List-Item-Header">神奈川</div>        
          
          
           <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/TpxvwnQT88HapaC57">KidsUP新川崎</a> 
           <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/BztVgznFn7x37TQs7">KidsUP二俣川</a> 
           <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/WWrCHYwa2CFQYxsx7">KidsUP天王町</a> 
           <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/ynWfKJYyWLrQ3Liy6">KidsUP溝の口</a> 
           <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/JuyrZku5a94XDJNW6">KidsUP矢向</a> 
           <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/asd7vL9133FKGowS6">KidsUP大倉山</a> 
           <a class="List-Item-1 Horizontal-Center" target="_blank"  href="https://forms.gle/Km6PzCbujyKrZ8LLA">KidsUP武蔵新城</a> 
           <a class="List-Item-2 Horizontal-Center" target="_blank"  href="https://forms.gle/LnBJcUF1uTejhcmM7">KidsUP武蔵小杉</a> 
    
    
           <div class="List-Item-Header">千葉</div>    
           <a class="List-Item-2 List-Item-2-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/Np4NxMb4tnuqEF4L7">KidsUP新浦安</a> 
           <a class="List-Item-1 List-Item-1-Switch Horizontal-Center" target="_blank"  href="https://forms.gle/nrQFpokPqE2h4ECw7">KidsUPソコラ南行徳</a> 
    
          </div>
    
      </div>
    
    
      </div>
  </ddn>    
  </div>


  <div class="LargeDisplay KidBreakpointPadding"></div>
  <div class="container">
    <div class="PaddingBand MobileDisplay"></div>
    <h2>人気アクティビティ</h2>
<!-- DESKTOP ACTIVITY Carousel -->

    <div id="Desktop-Activity-Carousel" class="LargeDisplay carousel slide" data-interval="false">
      <div class="carousel-inner" style="width: 100%">
    
    
        <div class="carousel-item active">
          <div class="row">

            <div class="col-md-4 CardPadding" > <!-- Activity-1 -->
            <img src="/images/springschool/activity-slides/Activity-1.png" alt="Activity-1" class="img-fluid">
            </div>
            
            <div class="col-md-4 CardPadding" > <!-- Activity-2 -->
            <img src="/images/springschool/activity-slides/Activity-2.png" alt="Activity-2"  class="img-fluid">
            </div>
            
            <div class="col-md-4 CardPadding" > <!-- Activity-3 -->
            <img src="/images/springschool/activity-slides/Activity-3.png" alt="Activity-3"  class="img-fluid">
            </div>

        </div>
        </div>
    
    
        <div class="carousel-item">
          <div class="row">

            <div class="col-md-4 CardPadding" > <!-- Activity-4 -->
            <img src="/images/springschool/activity-slides/Activity-4.png" alt="Activity-4" class="img-fluid">
            </div>
              
            <div class="col-md-4 CardPadding" > <!-- Activity-5 -->
            <img src="/images/springschool/activity-slides/Activity-5.png" alt="Activity-5"  class="img-fluid">
            </div>
              
            <div class="col-md-4 CardPadding" > <!-- Activity-6 -->
            <img src="/images/springschool/activity-slides/Activity-6.png" alt="Activity-6"  class="img-fluid">
            </div>

        </div>
        </div>
    
    
        <div class="carousel-item">
          <div class="row">

            <div class="col-md-4 CardPadding" > <!-- Activity-7 -->
            <img src="/images/springschool/activity-slides/Activity-7.png" alt="Activity-7" class="img-fluid">
            </div>
              
            <div class="col-md-4 CardPadding" > <!-- Activity-8 -->
            <img src="/images/springschool/activity-slides/Activity-8.png" alt="Activity-8"  class="img-fluid">
            </div>
              
            <div class="col-md-4 CardPadding" > <!-- Activity-9 -->
            <img src="/images/springschool/activity-slides/Activity-9.png" alt="Activity-9"  class="img-fluid">
            </div>

        </div>
        </div>

        <div class="carousel-item">
          <div class="row">

            <div class="col-md-4 CardPadding" > <!-- Activity-10 -->
            <img src="/images/springschool/activity-slides/Activity-10.png" alt="Activity-10" class="img-fluid">
            </div>
              
            <div class="col-md-4 CardPadding" > <!-- Activity-11 -->
            <img src="/images/springschool/activity-slides/Activity-11.png" alt="Activity-11"  class="img-fluid">
            </div>
              
            <div class="col-md-4 CardPadding" > <!-- Activity-12 -->
            <img src="/images/springschool/activity-slides/Activity-12.png" alt="Activity-12"  class="img-fluid">
            </div>

        </div>
        </div>
    
        <div class="carousel-item">
          <div class="row">

            <div class="col-md-4 CardPadding" > <!-- Activity-13 -->
            <img src="/images/springschool/activity-slides/Activity-13.png" alt="Activity-13" class="img-fluid">
            </div>
              
            <div class="col-md-4 CardPadding" > <!-- Activity-14 -->
            <img src="/images/springschool/activity-slides/Activity-14.png" alt="Activity-14"  class="img-fluid">
            </div>
              
            <div class="col-md-4 CardPadding" > <!-- Activity-15 -->
            <img src="/images/springschool/activity-slides/Activity-15.png" alt="Activity-15"  class="img-fluid">
            </div>

        </div>
        </div>
    
      </div>
    
        <img src="/images/springschool/Activity-Arrow-Left.svg" style="top: 50%; left: 0%; opacity: 100%; width: 50px; height: 50px;" class=" Anchor-Point-Center CarouselButton carousel-control-prev" type="button" data-bs-target="#Desktop-Activity-Carousel" data-bs-slide="prev">
        <img src="/images/springschool/Activity-Arrow-Right.svg" style="top: 50%; left: 100%; opacity: 100%; width: 50px; height: 50px;" class=" Anchor-Point-Center  CarouselButton carousel-control-prev" type="button" data-bs-target="#Desktop-Activity-Carousel"data-bs-slide="next">
    
    
      </div>




<!--MOBILE ACTIVITY CAROUSEL-->
<div id="Mobile-Activity-Carousel" class="MobileDisplay carousel slide" data-interval="false" style="position:relative">
  <div class="carousel-inner" style="width: 100% padding auto;">


    <div class="carousel-item active CardPadding">
    <img src="/images/springschool/activity-slides/Activity-1.png" alt="Activity-1" class="img-fluid Horizontal-Center"><!-- Activity-1 -->
    </div>


    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-2.png" alt="Activity-2" class="img-fluid Horizontal-Center"><!-- Activity-2 -->
    </div>

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-3.png" alt="Activity-3" class="img-fluid Horizontal-Center"><!-- Activity-3 -->
    </div>

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-4.png" alt="Activity-4" class="img-fluid Horizontal-Center"><!-- Activity-4 -->
    </div>      

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-5.png" alt="Activity-5" class="img-fluid Horizontal-Center"><!-- Activity-5 -->
    </div>   

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-6.png" alt="Activity-6" class="img-fluid Horizontal-Center"><!-- Activity-6 -->
    </div>
    
    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-7.png" alt="Activity-7" class="img-fluid Horizontal-Center"><!-- Activity-7 -->
    </div>  

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-8.png" alt="Activity-8" class="img-fluid Horizontal-Center"><!-- Activity-8 -->
    </div>  

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-9.png" alt="Activity-9" class="img-fluid Horizontal-Center"><!-- Activity-9 -->
    </div>  

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-10.png" alt="Activity-10" class="img-fluid Horizontal-Center"><!-- Activity-10 -->
    </div>  

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-11.png" alt="Activity-11" class="img-fluid Horizontal-Center"><!-- Activity-11 -->
    </div>  

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-12.png" alt="Activity-12" class="img-fluid Horizontal-Center"><!-- Activity-12 -->
    </div>  

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-13.png" alt="Activity-13" class="img-fluid Horizontal-Center"><!-- Activity-13 -->
    </div>  

    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-14.png" alt="Activity-14" class="img-fluid Horizontal-Center"><!-- Activity-14 -->
    </div>  
 
    <div class="carousel-item CardPadding">
    <img src="/images/springschool/activity-slides/Activity-15.png" alt="Activity-15" class="img-fluid Horizontal-Center"><!-- Activity-15 -->
    </div>  





  </div>

    <img src="/images/springschool/Activity-Arrow-Left.svg" style="top: 50%; left: 0%; opacity: 100%; width: 50px; height: 50px; position: absolute;" class=" Anchor-Point-Center CarouselButton carousel-control-prev" type="button" data-bs-target="#Mobile-Activity-Carousel" data-bs-slide="prev">
    <img src="/images/springschool/Activity-Arrow-Right.svg" style="top: 50%; left: 100%; opacity: 100%; width: 50px; height: 50px; position: absolute;" class=" Anchor-Point-Center  CarouselButton carousel-control-prev" type="button" data-bs-target="#Mobile-Activity-Carousel"data-bs-slide="next">


  </div>



  <div class="PaddingBand"></div>



</div>


<div class="container" id="div3">


<!--Triple Dropdown Buttons---------------------------------------------------------------------------------------------------------------------------------------------------->


<ddn id="TripleDropdown" >
<div class="row">

  <div class="col-sm-4">
    <a class="btn Btn-Dropdown-Small collapsed Horizontal-Center" data-bs-toggle="collapse" href="#Calendar-Collapse" role="button" aria-expanded="false" aria-controls="Calendar-Collapse">
      カレンダー <img src="/images/springschool/images-boilerplate/Arrow-Down.svg" alt="" class="Child-Element Dropdown-Img-Small" style="left: 80%; vertical-align: middle;">
    </a>
    <div class="PaddingBandHalf MobileDisplay"></div>
  </div>


  <div class="col-sm-4">
    <a class="btn Btn-Dropdown-Small collapsed " data-bs-toggle="collapse" href="#DailySchedule-Collapse" role="button" aria-expanded="false" aria-controls="DailySchedule-Collapse">
      一日のスケジュール <img src="/images/springschool/images-boilerplate/Arrow-Down.svg" alt="" class="Child-Element Dropdown-Img-Small" style="left: 80%; vertical-align: middle;">
    </a>
  <div class="PaddingBandHalf MobileDisplay"></div>
  </div>


  <div class="col-sm-4">
    <a class="btn Btn-Dropdown-Small collapsed " data-bs-toggle="collapse" href="#PriceSheet-Collapse" role="button" aria-expanded="false" aria-controls="PriceSheet-Collapse">
      料金表<img src="/images/springschool/images-boilerplate/Arrow-Down.svg" alt="" class="Child-Element Dropdown-Img-Small" style="left: 80%; vertical-align: middle;">
    </a>
  <div class="PaddingBandHalf MobileDisplay"></div>
  </div>

<!--CALENDAR---------------------------------------------------------------------------------------------------------------------------------------------------->

  <div class="collapse" id="Calendar-Collapse"  data-bs-parent="#TripleDropdown">
    <div class="container" style="background-color: #fff; width: 100%;" >
      <img src="/images/springschool/calendar-desktop.jpg" alt="Calendar" class="img-fluid" style="width: 100%;">
      <a href="https://pup.box.com/shared/static/1vc7b5d2fhpjv4nj5wls5t1su53edznu.pdf"><p style="text-align: center; font-family:新丸ゴ DB">カレンダーをダウンロード</p></a>
  </div>
  </div>

<!--Daily Schedule---------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="collapse" id="DailySchedule-Collapse" data-bs-parent="#TripleDropdown">
  <div class="Daily-Schedule-1">
  
    <br>
    <h5 style="color: #484444; font-size: 20px; width: 100%;">10:00 Kids UPにようこそ！</h5>
    <br>
    <p>まずは自己紹介をして先生とお友達と仲良くなろう！
      そのあとはチームに分かれていろんなゲームをするよ♪</p>
  </div>
  
  <div class="Daily-Schedule-2">

  <br>  
  <h5 style="color: #484444; font-size: 20px; width: 100%;">10:30 English Class</h5>
  <br>
  <div class="row">
  <div class="col-md-6">


    <h5 style="color: #484444; font-size: 16px; width: 100%;">小学生</h5>
    <br>
    <p>ワークシートを使ってフォニックスや単語を学ぼう！<br>習った単語でお友達や先生とお話ししよう♪<br>初めてでも大丈夫！ハイレベルな内容もあるよ♪</p>
  </div>
  
  <div class="col-md-6">

    <br>
    <h5 style="color: #484444; font-size: 16px; width: 100%;">幼児クラス</h5>
    <br>
    <p>一緒に英語で遊ぼう! みんなで<br>
      英語のお歌を歌ったり、お天気や動物の名前などを英語で学ぶよ!<br>
      ワークシートでライティングの練習もしてみよう♫</p>
  </div>
  </div>
  </div>
  
  
  <div class="Daily-Schedule-1">

    <br>
    <h5 style="color: #484444; font-size: 20px; width: 100%;">11:00 日替りアクティビティ</h5>
    <br>
    <p>毎日色々なアクティビティがあるよ!
      お友達と一緒に、おもいっきり楽しもう!</p>
  </div>
  
  
  <div class="Daily-Schedule-2">

    <br>
    <h5 style="color: #484444; font-size: 20px; width: 100%;">12:00 ランチ</h5>
    <br>
  <p>楽しく学んだあとは、
    先生やお友達とお弁当を一緒に食べよう!
    <br>※感染防止対策を徹底した上でのお食事となります</p>
  
  </div>
  
  
  <div class="Daily-Schedule-1">

    <br>
    <h5 style="color: #484444; font-size: 20px; width: 100%;">13:00 スクラップブック</h5>
    <br>
    <p>楽しかった1日の思い出をアルバムにするよ!
      自分だけの特別なスクラップブックを作ろう♪</p>
  </div>
  
  
  <div class="Daily-Schedule-2">

    <br>
    <h5 style="color: #484444; font-size: 20px; width: 100%;">13:30 レッスン報告</h5>
    <br>
  <p>その日の様子を保護者の皆さんにご報告します</p>
    
  </div>
  </div>

  <!--Price List ---------------------------------------------------------------------------------------------------------------------------------------------------->

  <div class="collapse" id="PriceSheet-Collapse"  data-bs-parent="#TripleDropdown">
    <div class="container" style="background-color: #fff; width: 100%;" >
      <br>
      <img src="/images/springschool/Price-List.svg" alt="Price List" class="img-fluid">
      <br>
      <a href="https://pup.box.com/shared/static/zcynf06wsmajntlhd709p31lshqo7h8a.pdf"><p style="text-align: center; font-family:新丸ゴ DB">料金表をダウンロード</p></a>
    </div>
    </div>

</ddn>



  
</div>
</div>

<div class="PaddingBandHalf"></div>

</div>

 <!-- GALLERY -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div style="background-color: #D6E37F;">
<div class="PaddingBandHalf" id="div4"></div>

<div class="container">
  
<div id="BottomCarouselIndicators" class="carousel slide" data-bs-ride="carousel">

                

    <div class="carousel-inner" >
                 
                  <div class="carousel-item active">
                    <img src="/images/springschool/gallery-photos/gallery-1.JPG" class="img-fluid Horizontal-Center" alt="Image 1" >
                  </div>
                  <div class="carousel-item">
                    <img src="/images/springschool/gallery-photos/gallery-2.JPG" class="img-fluid Horizontal-Center" alt="Image 2">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/springschool/gallery-photos/gallery-3.JPG" class="img-fluid Horizontal-Center" alt="Image 3">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/springschool/gallery-photos/gallery-4.JPG" class="img-fluid Horizontal-Center" alt="Image 4">
                  </div> 
                  <div class="carousel-item">
                    <img src="/images/springschool/gallery-photos/gallery-5.JPG" class="img-fluid Horizontal-Center" alt="Image 5">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/springschool/gallery-photos/gallery-6.jpeg" class="img-fluid Horizontal-Center" alt="Image 6">
                  </div>                
                </div>


                <img src="/images/springschool/Gallery-Arrow-Left.svg" style="top: 50%; left: 0%; opacity: 100%; width: 50px; height: 50px; position: absolute;" class=" Anchor-Point-Center CarouselButton carousel-control-prev" type="button" data-bs-target="#BottomCarouselIndicators" data-bs-slide="prev">
                <img src="/images/springschool/Gallery-Arrow-Right.svg" style="top: 50%; left: 100%; opacity: 100%; width: 50px; height: 50px; position: absolute;" class=" Anchor-Point-Center  CarouselButton carousel-control-prev" type="button" data-bs-target="#BottomCarouselIndicators"data-bs-slide="next">

    </div>
</div>
<div class="PaddingBand"></div>


 <!-- FAQ  -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="container">
  
<h2>よくある質問</h2>

<div class="PaddingBand"></div>

<div class="accordion accordion-flush" id="Chapters">


  <div class="accordion-item">
    <h2 class="accordion-header" id="Accordion-1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <div class="Acordion-Button-Padding">英語初心者でも大丈夫ですか？</div>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Accordion-1" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><p>
        スプリングスクールは普段Kids UPにお通いでない方もご参加いただけるプログラムのため
        英語がはじめてのお子様でも楽しくご参加いただけます。
        午前のプログラムは「アクティビティ」を中心に、楽しみながら英語に触れることができます。
        又、プロの先生が英語初心者の方にも分かりやすく指導しますので、
        英語100％の環境でも楽しくご参加いただけます。</p></div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="Accordion-2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
       <div class="Acordion-Button-Padding">1日からでも通えますか？</div> 
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Accordion-2" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><p>
        1日のみのご参加も大歓迎です。<br>
        まずはお試しで通ってみてから、徐々に回数を増やしていくことも可能です。
        なお、5回以上のご参加でお得な割引料金をご用意いたしております。
        お子様がKids UPの環境に馴染んだことをご確認いただいたら
        5回単位でまとめてお申込みいただくと大変お得です。</p></div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="Accordion-3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <div class="Acordion-Button-Padding">Kids UPの入会を検討しているのですが？</div>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Accordion-3" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><p>はい、スクールでは随時「説明会」を実施しております。（ご予定が合わない場合は、個別でのご相談も実施中です）
        ウィンタースクールの詳細なご相談もかねて、お気軽にお問合せ下さい。<a href="/inquiry">お問合わせフォーム</a></p></div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="Accordion-4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <div class="Acordion-Button-Padding">送迎サービスはありますか？</div>
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Accordion-4" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <p>申し訳ございませんが、ウィンタースクールには送迎サービスサービスは御座いません。
          10時にお子様をお連れ頂くことが難しい場合には、朝8時30分からお預かりが可能ですので早いお時間にお連れ下さい、
          <br>※別途前延長料金が必要となります。　<br>※スクールによりお預かり開始時間が異なりますので事前にご確認下さい<p></div>
    </div>
  </div>



</div>


<div class="PaddingBand"></div>
<h2 style="color: #303135;">Spring School参加までの流れ</h2>
<div class="PaddingBand"></div>


<h2 style="color: #AF2796;">❶ WEBフォームよりお申込み</h2>
<p style="color: #303135;">WEBフォームよりSpring Schoolのお申込みが可能です。<br>
  参加を希望するスクールを選択し、お申込みを確定してください。
  </p>
<div class="PaddingBandHalf"></div>

<h2 style="color: #AF2796;">❷ お申込案内のご確認手続き</h2>
<p style="color: #303135;">WEBフォーム送信後、スクールからメールにてお申込内容の確認をさせていただきます。<br>
  お申込内容に相違があった場合には、お気軽にお申し出ください。</p>
<div class="PaddingBandHalf"></div>

<h2 style="color: #AF2796;">❸Springスタート！</h2>
<p style="color: #303135;">フレンドリーな先生たちがお子様のご参加をお待ちしています！<br>
  ※各アクティビティは満員になりましたら受付を締め切らせていただきます。</p>
<div class="PaddingBand"></div>


<div class="row">
  <div class="col-sm-6">

    <a class="Btn-Regular-2 text-nowrap Horizontal-Center Btn-Hover" href="https://docs.google.com/forms/d/e/1FAIpQLSfway-_a_yOALcwlW7FKU2RKNRc3W99ojOSbJMIaAjlkovTOg/viewform" role="button" style="width: 90%;">お申込みはこちら <i class="fa-solid fa-arrow-right"></i></a>
    <div class="PaddingBand"></div>
  </div>

</div>
</div>
</div>
 


  <!-- FOOTER START -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<footer id="kids-footer" style="display: block; background: url(/images/springschool/images-boilerplate/Footer-BG.jpg); background-size: cover ;">
  <div class="col-md-12 section-cover-bottom"></div>
  <a style="border:1px solid #fff; width:75%; z-index:999; position:relative; display:block; padding:20px; margin:0 auto; text-align:center; line-height:100%;" href="/news/87">オンラインコース新規受付<br class="MobileDisplay">の一時停止のお知らせ</a>
   <div class="kids-footer-content">
     <div class="container-fluid">
       <div class="row" >
           <div class="footer-box">
             <h2 style="text-align: center">CONTACT</h2>
             <p style="font-family: 新丸ゴ DB;">お問い合わせ・資料請求はこちら</p>
             <p class="phone"><a href="tel:0120378056" style="text-decoration: none"><i class="fas fa-phone-square"></i> 0120-378-056</a></p>
             <p style="font-family: 新丸ゴ DB;"> 受付時間　10:00 - 20:00<br>（土日・祝日も受付中）</p>
             <br>
             <p class="text-center news-to-btn" style="font-family: 新丸ゴ DB;"><a href="/inquiry" class="btn btn-new">お問い合わせ <i class="fas fa-arrow-circle-right"></i></i></a></p>
             <br>
           </div>
 
           <ul class="footer-link-list">
             <li><a href="https://www.p-up.world/privacypolicy/"> プライバシーポリシーについて</a></li>
             <li><a href="https://www.p-up.world/cookie-policy/"> Cookieポリシーについて</a></li>
             <li><a href="/event/entry"> 説明会のご予約</a></li>
             <li><a href="/inquiry"> お問い合わせ</a></li>
           </ul>
       </div>
     </div>
   </div>
   <div class="kids-footer-copyright">
     <div class="container-fluid">
       <div class="row">
        <div class="col-2" style="padding-left:20px;height: 50px;"><a href="https://www.facebook.com/kidsup.ed/"><img style="height:50%;margin: 15px 0;" src="/images/springschool/images-boilerplate/fb-like.png" alt="FB_Like"></a></div>
        <div class="col-2" style="padding-left:20px;height: 50px;"><a href="https://www.youtube.com/c/Kids-upJp"><img style="height:50%;margin: 15px 0;" src="/images/springschool/images-boilerplate/logo-youtube.svg" alt="Youtube_Logo"></a></div>
        <div class="col-2" style="padding-left:20px;height: 50px;"><a href="https://www.instagram.com/kidsup.jp/"><img style="height:50%;margin: 15px 0;" src="/images/springschool/images-boilerplate/icon_insta.svg" alt="Insta_Logo" ></a></div>
        <div class="col-12 text-left" style="padding-left:20px;height: 25px;"><img src="/images/springschool/images-boilerplate/footer_logo.png" alt="イメージ：KidsUPロゴ"> <small>© 2016 - <script>document.write(new Date().getFullYear());</script> Kids-UP.Co.,Ltd. All Rights Reserved.</small></div>
       </div>
     </div>
   </div>
 </footer>
    
</content-wrapper>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>





</body>
</html>