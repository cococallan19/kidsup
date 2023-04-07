@inject('ConvertToWareki', 'App\Http\Library\ConvertToWareki')
<!doctype html>
<html lang="en">
  <head>
    @include('layouts.gtmheader')
    <title>Recruitment</title>
    <link rel="icon" type="image/x-icon" href="https://pup.box.com/shared/static/5vjrs8epbujdks91rjrwdhyralajtebg.png">
    <!-- Required meta tags and Adobe Font -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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


    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/recruit.css">
  </head>
  <body>
    @include('layouts.gtmbody')
    <!-- Navbar START -->
    <nav class="navbar  navbar-expand-lg Navbar-Custom sticky-top">
      <div class="container-fluid">
        <a class= "navbar-brand d-flex w-50 me-auto" href="https://kids-up.jp/"><img src="https://pup.box.com/shared/static/to0dcatvphlvea5zduonkt3brrn6isyl.png" class="NavLogo" alt=""/></a> 
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="toggler-icon TopBar"></span>
          <span class="toggler-icon MiddleBar1"></span>
          <span class="toggler-icon MiddleBar2"></span>
          <span class="toggler-icon BottomBar"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav nav-pills ms-auto mb-2 mb-lg-0 ">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="/recruit/schoolmanager">スクールマネージャー</a>
            </li>
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="/recruit/bilingual">バイリンガルエデュケーター </a>
            </li>
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="/recruit/native">Native Educator</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                アルバイト
              </a>
              <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/recruit/busdriver" style="text-align: center">バス ドライバー</a></li>
                <li><a class="dropdown-item" href="/recruit/busstaff" style="text-align: center">バス 添乗員 </a></li>


              </ul>


            <li class="nav-item text-nowrap">
              <a class="nav-link active" href="/recruit">メインページ</a>
            </li>
            <a class="NavBtn  text-nowrap"href="mailto:kidsup-ho@kids-up.jp?subject=Recruitment Question" target="_blank" rel="noopener noreferrer" role="button">お問い合わせ</a> 


          </ul>
         
        </div>
      </div>
    </nav>






      
    <!-- Header Carousel and Apply Now button DESKTOP-->
<div class="LargeDisplay">
<div style="background-color: #00425d">    
<div class="fluid-container">
  <img src="https://pup.box.com/shared/static/ttxzy0iulptr2dc254f8lcpm0tnw92xc.jpg" alt="Header" width="100%">
 <!-- Header Carousel and 
  <div id="TopCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">


      <div class="carousel-item active">
        <div class="LargeDisplay"><img src="https://pup.box.com/shared/static/ttxzy0iulptr2dc254f8lcpm0tnw92xc.jpg" class=" d-block w-100" alt="Slide 1"></div>
        <div class="MobileDisplay"><img src="https://pup.box.com/shared/static/6th2r7aba9dpjnxzd4bj121j9nwfvb3w.jpg" class="d-block w-100 MobileDisplay" alt="Slide 1"></div>
      </div>


      <div class="carousel-item">
        <div class="LargeDisplay"><img src="https://pup.box.com/shared/static/vab9ch164zy45lv7ihcludtzlh6v40qr.jpg" class="d-block w-100" alt="Slide 2"></div>
        <div class="MobileDisplay"><img src="https://pup.box.com/shared/static/51jehfooiyavj3q8istm3lt5md9viimx.jpg" class="d-block w-100 " alt="Slide 2"></div>
      </div>


      <div class="carousel-item">
        <div class="LargeDisplay"><img src="https://pup.box.com/shared/static/2wh982zj9ohybc25a9203z9kttkgysuz.jpg" class="d-block w-100" alt="Slide 3"></div>
        <div class="MobileDisplay"><img src="https://pup.box.com/shared/static/b51moahwzjkvurnnbp5g3jtc7tf2k3d1.jpg" class="d-block w-100 " alt="Slide 3"></div>
      </div>


      <div class="carousel-item">
        <div class="LargeDisplay"><img src="https://pup.box.com/shared/static/3w0bfias0fwjld732h3rbaq4txn4rr6m.jpg" class="d-block w-100" alt="Slide 4"></div>
        <div class="MobileDisplay"><img src="https://pup.box.com/shared/static/5gnktdsm9bahe2v5wifian4yuysdr1e9.jpg" class="d-block w-100" alt="Slide 4"></div>
      </div>
    </div>



    <img src="https://pup.box.com/shared/static/3gvr2yraa43o1arwufi0oa7c1y4b5p9x.svg" style="top: 50%; left: 10%" class=" AnchorPoint CarouselButton carousel-control-prev" type="button" data-bs-target="#TopCarousel" data-bs-slide="prev">
    <img src="https://pup.box.com/shared/static/j66zd69a748pqdup6z290612l88fy4x9.svg" style="top: 50%; left: 90%" class=" AnchorPoint  CarouselButton carousel-control-prev" type="button" data-bs-target="#TopCarousel"data-bs-slide="next">
    
  </div>
</div>
Apply Now button DESKTOP-->
</div>
</div>
<div class="ResponsivePadding">
<a class="Btn-Jumbotron text-nowrap Horizontal-Center" href="https://docs.google.com/forms/d/e/1FAIpQLSebQukpmH3EfPj6RRpiZXbm8aAOdbynZibE2N21TM6F-2_aeg/viewform" role="button">APPLY NOW</a>
</div>


<!-- Teacher Portraits-->

<div class=" LargeDisplay fluid-container">
<div class="row">
<div class="col-2">
<img src="https://pup.box.com/shared/static/iywqrotbfbeld73g3o4eaxawko9tb4dq.jpg" class="img-fluid Horizontal-Center" alt="Teacher Satomi">
</div>

<div class="col-2">
  <img src="https://pup.box.com/shared/static/gtycae3cl2583mb1kpb7vbfsjb11s0jb.jpg" class="img-fluid Horizontal-Center" alt="Teacher Mike">
  </div>

  <div class="col-2">
    <img src="https://pup.box.com/shared/static/bgfqny2g8ft2sh5nxo91xkilt1s4gydb.jpg" class="img-fluid Horizontal-Center" alt="Teacher Miki">
    </div>

<div class="col-2">
  <img src="https://pup.box.com/shared/static/8hnjajm9tihblf4duxrilmr13l9621ql.jpg" class="img-fluid Horizontal-Center" alt="Teacher Ale">
  </div>
          
  <div class="col-2">
    <img src="https://pup.box.com/shared/static/iche0yshnj9054tkx62gdl8o31opzfiy.jpg" class="img-fluid Horizontal-Center" alt="Teacher Daniel">
    </div>
    
    <div class="col-2">
      <img src="https://pup.box.com/shared/static/dgkvmnafsvxqp777u9u1hgaifciykw3i.jpg" class="img-fluid Horizontal-Center" alt="Teacher Hayate">
      </div>
      
</div>
</div>

<div class=" MobileDisplay fluid-container">
  <div class="row">
  <div class="col-4">

  <img src="https://pup.box.com/shared/static/iywqrotbfbeld73g3o4eaxawko9tb4dq.jpg" class="img-fluid Horizontal-Center" alt="Teacher Satomi">
  </div>
  
  <div class="col-4">
    <img src="https://pup.box.com/shared/static/dgkvmnafsvxqp777u9u1hgaifciykw3i.jpg" class="img-fluid Horizontal-Center" alt="Teacher Hayate">
    </div>
    

  
  <div class="col-4">
    <img src="https://pup.box.com/shared/static/8hnjajm9tihblf4duxrilmr13l9621ql.jpg" class="img-fluid Horizontal-Center" alt="Teacher Ale">
    </div>            
  </div>
  </div>

<!-- Company Motto-->

<div style="background-color: #e3eaed;">
<div class="container ">
<div class="ResponsivePadding">
  <img src="https://pup.box.com/shared/static/56hppvl8okmsslv3lrilxq8o2qck4emc.svg" style="max-width: 80%" class="Horizontal-Center">
  <br>
  <h2 style="text-align: center">これが私たちのモットーです<span class="MobileDisplay"><br></span>「楽しく学ぶ」</h2>
  <span class="MobileDisplay"><br></span>
  <p>あなたを待っている沢山の子どもたちと、<span class="MobileDisplay"><br></span>仲間がいます！</p> 
</div>
</div>

</div>

<!--Different Jobs-->
<div class="container">
  <br><br>
<div class="row">
  <div class="col-4">
   <div class="container bubble-2">
      <a href="/recruit/schoolmanager" style="text-decoration: none;"><img src="https://pup.box.com/shared/static/spi3koc2q128hq0h37j2ccybu9f4mbqy.png" alt="School Manager" class="img-fluid bubble-2-image">
      <div class="bubble-2-text" style="font-size: 40px">スクール<br>マネージャー </div></a>
      </div>
  </div>



  <div class="col-4">
  <div class="container bubble-2">
      <a href="/recruit/bilingual" style="text-decoration: none;"><img src="https://pup.box.com/shared/static/1rssm3af5d0cv5tlhts02u608fyxvk5g.png" alt="Bilingual Teacher" class="img-fluid bubble-2-image">
      <div class="bubble-2-text"style="font-size: 40px">バイリンガル<br>エデュケーター</div></a>
      </div>


  </div>
  <div class="col-4">
  <div class="container bubble-2">
      <a href="/recruit/native" style="text-decoration: none;"><img src="https://pup.box.com/shared/static/5bsm1haw1qnn4ehq6dccxv8bnpep79g5.png" alt="Bilingual Teacher" class="img-fluid bubble-2-image">
      <div class="bubble-2-text"style="font-size: 40px">Native<br>Educator</div></a>
    </div>
  </div>
</div>


<br><br>

<div class="row">
<div class="col-2"></div>
<div class="col-4">
  <div class="container bubble-2">
    <a href="/recruit/busdriver" style="text-decoration: none;"><img src="https://pup.box.com/shared/static/fhvfo8n5z7a7ba8fb3pc4bm72sz43zp6.png" alt="Bus Driver" class="img-fluid bubble-2-image">
    <div class="bubble-2-text"style="font-size: 40px">送迎バスドライバー</div></a>
  </div>
</div>
<div class="col-4">
  <div class="container bubble-2">
    <a href="/recruit/busstaff" style="text-decoration: none;"><img src="https://pup.box.com/shared/static/i1bff8hborsraw4rtiythg1ieoxzguhl.png" alt="Bus Attendant" class="img-fluid bubble-2-image">
    <div class="bubble-2-text"style="font-size: 40px"> 送迎バス添乗員</div>
    </a>
  
  </div>


</div>
<div class="col-2"></div>




</div>

</div>




   <!-- video embed -->
   <div class="container" style="padding-bottom: 4vw; padding-top: 4vw">
           
    <div class="ratio ratio-16x9">
      <iframe src="https://player.vimeo.com/video/754611425?h=477593d2af" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    </div>

  </div>
   <!-- Mailing Form --> 
  
<div style="background-color: #ed8000">

  <div class="container Horizontal-Center ResponsivePadding">
    <h4>Have a Question? Contact Us!</h4>
    <br>
    <br>
    <a class="Btn-FormSubmit text-nowrap Horizontal-Center margin-top" style="padding-top: 15px" href="mailto:kidsup-ho@kids-up.jp?subject=Recruitment Question" target="_blank" rel="noopener noreferrer" role="button">Contact Us</a>
</div>
</div>
</div>
<div style="background-color: #d1e0e9">



<!-- Header Carousel and Apply Now button Mobile-->
<div class="MobileDisplay" style="background-color: #fff">
<img src="https://pup.box.com/shared/static/t28qt6rvrjq8h51q90lroqjqjh782rud.jpg" alt="Header" class="img-fluid">
<br>
<br>
<a class="Btn-Jumbotron text-nowrap Horizontal-Center" href="https://docs.google.com/forms/d/e/1FAIpQLSebQukpmH3EfPj6RRpiZXbm8aAOdbynZibE2N21TM6F-2_aeg/viewform" role="button" style="color: #fff">APPLY NOW</a>
<br>


<div class="fluid-container">
  <div class="row">
  <div class="col-3">
  <img src="https://pup.box.com/shared/static/iywqrotbfbeld73g3o4eaxawko9tb4dq.jpg" class="img-fluid Horizontal-Center" alt="Teacher Satomi">
  </div>
  
  <div class="col-3">
    <img src="https://pup.box.com/shared/static/iche0yshnj9054tkx62gdl8o31opzfiy.jpg" class="img-fluid Horizontal-Center" alt="Teacher Daniel">
    </div>
  
  <div class="col-3">
    <img src="https://pup.box.com/shared/static/8hnjajm9tihblf4duxrilmr13l9621ql.jpg" class="img-fluid Horizontal-Center" alt="Teacher Ale">
    </div>

    <div class="col-3">
        <img src="https://pup.box.com/shared/static/dgkvmnafsvxqp777u9u1hgaifciykw3i.jpg" class="img-fluid Horizontal-Center" alt="Teacher Hayate">
        </div>
        
  </div>
  </div>
  <div class="container ">
    <div class="ResponsivePadding">
      <img src="https://pup.box.com/shared/static/56hppvl8okmsslv3lrilxq8o2qck4emc.svg" style="max-width: 80%" class="Horizontal-Center">
      <br>
      <h2 style="text-align: center; font-size: 4.0vw;">これが私たちのモットーです「楽しく学ぶ」</h2>
      <p style="font-size: 3vw">あなたを待っている沢山の子どもたちと、仲間がいます！</p> 
    </div>
    </div>

<img src="https://pup.box.com/shared/static/kvsox7k8pk3l0crk1suoj1lltcpku5ug.jpg" alt="Kids" class="img-fluid">

<h2 style="padding-top: 5%; padding-bottom: 5%; font-size: 3.3vw; font-family: 新丸ゴ DB;">INSPIRING CHILDREN FOR AN EXCITING FUTURE</h2>


<img src="https://pup.box.com/shared/static/da3edzyep3cw906frgltyrnjfpfvua6m.jpg" alt="Phonics" class="img-fluid">
<div class="container" style="max-width: 95%">

<div class="row">
<div class="col-3"></div>

<div class="col-6"><div class="container bubble-1">
  <br>
  <a href="/recruit/schoolmanager" style="text-decoration: none;"><img src="https://pup.box.com/shared/static/spi3koc2q128hq0h37j2ccybu9f4mbqy.png" alt="School Manager" class="img-fluid bubble-1-image">
    <div class="bubble-1-text">スクール<br>マネージャー </div>
   </a>
 
 </div>
</div>


<div class="col-3"></div>

</div>


  <div class="row">
   <div class="col-6"><div class="container bubble-1">
     <a href="/recruit/bilingual" style="text-decoration: none;"><img src="https://pup.box.com/shared/static/1rssm3af5d0cv5tlhts02u608fyxvk5g.png" alt="Bilingual Teacher" class="img-fluid bubble-1-image">
     <div class="bubble-1-text">バイリンガル<br>エデュケーター</div>
     </a>
   
   </div>
 </div>

    <div class="col-6"><div class="container bubble-1">
      <a href="/recruit/native" style="text-decoration: none;"><img src="https://pup.box.com/shared/static/5bsm1haw1qnn4ehq6dccxv8bnpep79g5.png" alt="Bilingual Teacher" class="img-fluid bubble-1-image">
      <div class="bubble-1-text">Native<br>Educator</div>
      </a>
    
    </div>
  </div>
  </div>
  

  <div class="row" style="padding-top: 5%; padding-bottom: 5%">
    <div class="col-6">
      <div class="container bubble-1">
      <a href="/recruit/busdriver" style="text-decoration: none;"><img src="https://pup.box.com/shared/static/fhvfo8n5z7a7ba8fb3pc4bm72sz43zp6.png" alt="Bus Driver" class="img-fluid bubble-1-image">
      <div class="bubble-1-text">送迎バスドライバー</div>
      </a>
    
    </div>
    </div>

    <div class="col-6"><div class="container bubble-1">
      <a href="/recruit/busstaff" style="text-decoration: none;"><img src="https://pup.box.com/shared/static/i1bff8hborsraw4rtiythg1ieoxzguhl.png" alt="Bus Attendant" class="img-fluid bubble-1-image">
      <div class="bubble-1-text"> 送迎バス添乗員</div>
      </a>
    
    </div>
  </div>
  </div>
<br>

  <div class="ratio ratio-16x9">
    <iframe src="https://player.vimeo.com/video/754611425?h=477593d2af" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
  </div>
  <br>
</div>
<div style="background-color: #ed8000">

  <div class="container Horizontal-Center ResponsivePadding">
    <h4>Have a Question? Contact Us!</h4>
    <a class="Btn-FormSubmit text-nowrap Horizontal-Center margin-top" style="padding-top: 15px" href="mailto:kidsup-ho@kids-up.jp?subject=Recruitment Question" target="_blank" rel="noopener noreferrer" role="button">Contact Us</a>
</div>
</div>
</div>
     <!-- FOOTER--> 
  <div class="container">
      <div class="row FooterPadding" >
        
        <div class="col">
          <a href="https://kids-up.jp/"><img src="https://pup.box.com/shared/static/vg18m1wcl2n7bt4z8hq6ckypoq5b7xvj.svg" class="img-fluid vertical-center LargeDisplay"></a>
          <a href="https://kids-up.jp/"><img src="https://pup.box.com/shared/static/eq61o0fnapkbvu46m1usq803l476fnw0.svg" class="img-fluid AnchorPoint vertical-center MobileDisplay" style="width: 60%; left: 50%;"></a>
        </div>
        
        <div class="col">
          <a href="https://www.youtube.com/Kids-upJp/"><img src="https://pup.box.com/shared/static/t9u3zign5x84w8ghmbkiksy8enfxicrs.svg" class="img-fluid vertical-center LargeDisplay"></a>
          <a href="https://www.youtube.com/Kids-upJp/"><img src="https://pup.box.com/shared/static/s9t55t4i9zjt6zcmnic55o7av6tkkvbh.svg" class="img-fluid AnchorPoint vertical-center MobileDisplay" style="width: 60%; left: 50%;"></a>
        </div>

        <div class="col">
          <a href="https://www.instagram.com/kidsup.jp/"><img src="https://pup.box.com/shared/static/itishtlmgbh1b8jjx6y7rmchfvgwg0uh.svg" class="img-fluid vertical-center LargeDisplay"></a>
          <a href="https://www.instagram.com/kidsup.jp/"><img src="https://pup.box.com/shared/static/qhp61j60bxgdmqnp8yf4i4fwnnyephqu.svg" class="img-fluid AnchorPoint vertical-center MobileDisplay" style="width: 60%; left: 50%;"></a>
        </div>


        <span class="MobileDisplay"><br></span>
        <div class="col">  
          <div class="center">
          <div style="border-style: solid; border-color:  #00425d;" >
            <span class="MobileDisplay"><br></span>
            <h5 style="color: #00425d;">CONTACT</h5>
            <div class="p2">お問い合わせ・資料請求はこちら<br>
                  <tel style="text-align: center">
                  <a href="tel:0120378056" style="color: #00425d; font-family: 新丸ゴ DB; text-decoration: none;"><i class="fas fa-phone-square"></i> 0120-378-056</a></tel><br><br>
                  受付時間　10:00 - 20:00 <br>
            （土日・祝日も受付中）</div>
            <span class="MobileDisplay"><br></span>
          </div>
      </div></div>
      </div>
    </div>
  </div>



 </div>

</div>




</div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>