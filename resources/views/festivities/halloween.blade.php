@inject('ConvertToWareki', 'App\Http\Library\ConvertToWareki')

<!DOCTYPE html>
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
<!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/396c39bc59.js" crossorigin="anonymous"></script>
     <!-- Adobe Fonts -->
    
	  
    <title>Kids UP最大のイベント、ハロウィーンがやってくる！</title>
    <link rel="icon" type="image/x-icon" href="https://pup.box.com/shared/static/5vjrs8epbujdks91rjrwdhyralajtebg.png">



<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>

*{
padding: 0;
margin: 0;
text-decoration: none;
list-style: none;
box-sizing: border-box;
}


@font-face {
    font-family: "新丸ゴ DB";
    src: url("../fonts/A-OTF-ShinMGoPro-DeBold.woff")format("truetype");
	}



body {
    font-family: "新丸ゴ DB", kozuka-gothic-pro, arial, sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
  	scroll-behavior: smooth;
    font-size:  16px;
	background-color: #672573;
  }
  /* Navbar Definitions*/

Nav {
	font-family: "新丸ゴ DB";
	background-color: #F38000;
	width: 100%;
	height: auto;
}

.nav-link{
	color : #371942;
	text-align: center;
  display: nowrap;
	padding-top: 0.25vw;
	padding-bottom: 0.25vw;
	padding-left: 2w;
	padding-right: 2vw;
  margin-left: 0.5vw;
  margin-right: 0.5vw;
	font-size: 1.2vw;
	
}
.nav-link:hover{
	color : #f7eddf;
}
@media (max-width: 991px) {
    .nav-link {
		padding-top: 2vw;
		padding-bottom: 2vw;
		padding-left: 4w;
		padding-right: 4vw;
        font-size: 3vw;
    }
}
@media (max-width: 450px) {
    .nav-link {
		padding-top: 3vw;
		padding-bottom: 3vw;
		padding-left: 6w;
		padding-right: 6vw;
        font-size: 5vw;
    }
}

.NavLogo {
	height: 40px;
	width: 40px;
	border: solid #fff;
	border-width: 2px;
	border-radius: 45px;
	transition-duration: 0.4s;
}
.NavLogo:hover{
	height: 40px;
	width: 40px;
	transition-duration: 0.2s;
	border: solid #106635;
	border-width: 4px;
	border-radius: 45px;

}
/* Hamburger Button Settings */
.navbar-toggler{
	width: 20px;
	height: 20px;
	position: relative;
	transition: 0.5s ease-in-out;
}
.navbar-toggler,
.navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus {
	outline: none;
	box-shadow: none;
	border: 0;
}
.navbar-toggler span{
	margin: 0;
	padding: 0;	
} 

.toggler-icon{
	display: block;
	position: absolute;
	height: 4px;
	width: 100%;
	background: #338244;
	border-radius: 2px;
	opacity: 1;
	left: 0;
	transform: rotate(0deg);
	transition: .25s ease-in-out;	
}
/* Hamburger CLICKED State */

.navbar-toggler .TopBar {
	margin-top: 0px;
	transform: rotate(135deg)
		
}
.navbar-toggler .MiddleBar1, .MiddleBar2 {
	opacity: 0%;
	filter: alpha(opacity=0);
}

.navbar-toggler .BottomBar {
	margin-top: 0px;
	transform: rotate(-135deg)
}

/* Hamburger INACTIVE State */
.navbar-toggler.collapsed .TopBar{
	margin-top: -12px;
	transform: rotate(0deg);
}

.navbar-toggler.collapsed .MiddleBar1{
	margin-top: -4px;
	opacity: 1;
	filter: alpha(opacity=100)	
}

.navbar-toggler.collapsed .MiddleBar2{
	margin-top: 4px;
	opacity: 1;
	filter: alpha(opacity=100)	
}
.navbar-toggler.collapsed .BottomBar{
	margin-top: 12px;
	transform: rotate(0deg);
}

/* TEXT & TEXT SCALE */

h1{
	text-align: left;
	font-family: "新丸ゴ DB", arial, sans-serif;
	font-size: 3.5vw;
	color: #f6ede0;
	font-weight: bolder;
}
@media (max-width: 991px) {
    h1 {
        font-size: 6.3vw;
    }
}

h2{
	text-align: left;
	font-family:  kozuka-gothic-pro;
	font-size: 2vw;
	
}
@media (max-width: 991px) {
    h2 {
        font-size: 4.2vw;
    }
}

p{
	text-align: left;
	font-family:  kozuka-gothic-pro;
	font-size:  1.0vw;
	
}
@media (max-width: 991px) {
    p {
        font-size:  4.3vw;
    }
}

.FourPoints{
	text-align: left;
	font-family:  kozuka-gothic-pro;
	font-size:  4.95vw
}


.header{
	text-align: left;
	font-family: "新丸ゴ DB", arial, sans-serif;
	font-size: 2.0vw;
	color: #f6ede0;
	font-weight:bold;
}
@media (max-width: 991px) {
    .header {
        font-size: 5.6vw;
    }
}


/* SCALE CONTROLS */
@media (max-width: 991px) {
    .LargeDisplay {
        display: none;
    }
}	

@media (min-width: 992px) {
    .MobileDisplay {
        display: none;
    }
}	


/* BUTTONS */

.Btn-Jumbotron{
	background :  #f39200;
	text-decoration: none;
	transition-duration: 0.4s;
	font-family : "新丸ゴ DB";
  	color : #f6ede0;		
	text-align: center;
	font-size: 2vw;
	padding-top: 1.5vw; 
	padding-bottom: 1.5vw; 
	border-radius : 4vw;
	width: 80%;
}
@media (max-width: 991px) {
    .Btn-Jumbotron {
        font-size: 5vw;
		padding-top: 3vw; 
		padding-bottom: 3vw; 
		border-radius : 8vw;
		width: 100%;
    }
}



.Btn-Jumbotron:hover{
		background : #46b06c;
		color :  #f6ede0;		
		text-decoration: none;
	
}

.center{
	display: block;
  margin-left: auto;
  margin-right: auto;
}

.MobilePadding{
	display: block; margin-left: 5%; margin-right: 5%; width: 90%; padding-top: 10vw; padding-bottom: 10vw;
}


.PageSplit{
	background-image: url(https://pup.box.com/shared/static/bn55w2ne6vmwg6ttsjnaae1oymq8u4wd.png);  
	background-position: top, center;
	background-repeat: no-repeat;
	background-size:cover;
}
.vertical-center {
	margin: 0;
	position: relative;
	top: 50%;
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
}

.carousel .carousel-indicators button {
    width: 10px;
   height: 10px;
   border-radius: 100%;
}

.footer-banner {
	background-image: url("https://pup.box.com/shared/static/i1fpqrc1ltoweo4ujoh8h1wfzne6v0d5.jpg");
	align-content: center;
	position: fixed 50%;
}
.iframe-container{
  position: relative;
  width: 100%;
  padding-bottom: 56.25%; 
  height: 0;
}
.iframe-container iframe{
  position: absolute;
  top:0;
  left: 0;
  width: 100%;
  height: 100%;
}


    </style>

<!-- META END -->



  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    @include('layouts.gtmbody')


<!-- Navbar START -->
    <nav class="navbar  navbar-expand-lg Navbar-Custom sticky-top">
      <div class="container-fluid">
        <a class= "navbar-brand d-flex w-50 me-auto" href="https://kids-up.jp/"><img src="https://pup.box.com/shared/static/jolb2r0m216jivici481gt6xoyj3vhrs.png" class="NavLogo" alt=""/></a> 
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="toggler-icon TopBar"></span>
          <span class="toggler-icon MiddleBar1"></span>
          <span class="toggler-icon MiddleBar2"></span>
          <span class="toggler-icon BottomBar"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link" href="#div3">イベント内容</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#div4">ギャラリー</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#div5">お申込み・お問合せ</a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>






      
    <!-- Navbar END -->

    <!--MAIN Jumbotron Start -->


    
    <div class="row align-items-center" style=" background: #2d1b40">
      <div class="col-lg">
        <div id="JumbotronCarouselIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#JumbotronCarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#JumbotronCarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#JumbotronCarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          

          <div class="carousel-inner" >
            <div class="carousel-item active">
              <img src="https://pup.box.com/shared/static/2pytyjjumma4mesh7ypdtjn6w51m21tp.jpg" class="img-fluid" alt="Image 1">
            </div>
            <div class="carousel-item">
              <img src="https://pup.box.com/shared/static/ag00solwqapzt147yu3ci6yq9i84nlgk.jpg" class="img-fluid" alt="Image 2">
            </div>
            <div class="carousel-item">
              <img src="https://pup.box.com/shared/static/kf618su7o9p3dk3fdp7o1u5dhs6hlrbx.jpg" class="img-fluid" alt="Image 3">
            </div>
            
          </div>

        </div>
        
      </div>
      <div class="col-lg" >
        <div class="LargeDisplay">
        <div style="padding-left: 1vw">
        <div><img src="https://pup.box.com/shared/static/1ygpiwvtoo1cvgkfz8pu80nz7cn9srlk.svg" style="width: 80%" alt="Kids UP最大のイベント、ハロウィーンがやってくる！!"></div>
        <div style="padding-top: 2vw;"><h2 style="color: #f6ede0">「
          お気に入りの仮装をして、KidsUPに集合しよう!<br>
          先生やお友達は、何に変身してくるかな?<br>
          KidsUPハロウィン2022申込み受付中!</h2></div>
        
        <div style="padding-top: 3vw; padding-bottom: 5vw"><a class="Btn-Jumbotron text-nowrap center" href="https://docs.google.com/forms/d/e/1FAIpQLSfzQXexVLsFfV76KbdwWmSfhCrVS5_5-5SACO74DCK8KFOp8w/viewform" role="button" 
          style=>お申込みはこちら</a> </div></div></div>
          <div class="MobileDisplay">
            
           <div class= "container" style=" display: block; margin-left: 5%; margin-right: 5%; width: 90%; padding-top: 10vw; padding-bottom: 10vw;">
          
            <div><img src="https://pup.box.com/shared/static/1ygpiwvtoo1cvgkfz8pu80nz7cn9srlk.svg" style="width: 100%" alt="Kids UP最大のイベント、ハロウィーンがやってくる！!"></div>
            <h2 style="color: #f6ede0 ; padding-top: 4vw; padding-bottom: 4vw;">
              お気に入りの仮装をして、<br>
              KidsUPに集合しよう!<br>
              先生やお友達は、何に変身してくるかな?<br>
               KidsUPハロウィン2022申込み受付中!        
            </h2>
          
            <div style=" padding-bottom: 2vw;"><a class="Btn-Jumbotron text-nowrap center" href="https://docs.google.com/forms/d/e/1FAIpQLSfzQXexVLsFfV76KbdwWmSfhCrVS5_5-5SACO74DCK8KFOp8w/viewform" role="button" 
              style=>お申込みはこちら</a> </div> </div></div>
			</div>
      
      
    </div>


    <!-- MAIN Jumbotron End-->

    <!-- ONLINE EVENT BANNER START-->
    <div class="fluid-container" style="background-color: #f6ede0;" width="100%">
      <div class="container LargeDisplay" style="padding-top: 3vw; padding-bottom: 3vw">
        <div class="header" style="color: #49b072; padding-top: 50px;">Online Event</div>
        <p style="color: #371942;">今年はHalloween FunHouseのバーチャルツアー!<br>
          美味しいお菓子を作ったり、ダンスしたり、ハロウィンモンスターを集めたりしよう！</p>

          
        <div style="padding-top: 3vw; padding-bottom: 3vw; text-align: center"><a class="Btn-Jumbotron text-nowrap center"  href="/halloween2022/online-event" role="button" 
          style="width: 60%;">Online Event</a></div>
      </div>


      <div class="MobileDisplay">
      <div class="container MobilePadding">
        <div class="header" style="color: #49b072; ">Online Event</div>
        <p>今年はHalloween FunHouseの<br>
          バーチャルツアー!<br>
          美味しいお菓子を作ったり、<br>
          ダンスしたり、
          ハロウィンモンスター<br>
          を集めたりしよう！</p>
        <div style="padding-top: 3vw; padding-bottom: 3vw; text-align: center"><a class="Btn-Jumbotron text-nowrap center"  href="/halloween2022/online-event" role="button" 
          style=>Online Event</a></div>
      </div>
      </div>
    </div>



    <!-- Sales Part 1 Start -->

      <div>
              <!-- Section 1 Desktop -->
              <div id="div1"></div> 
            
              
              <div class="container LargeDisplay" style="padding-top: 3vw; padding-bottom: 5vw">
                <img src="https://pup.box.com/shared/static/5w8h2l0ba75cja41hwiirynfv8yjn5yk.png" class="img-fluid center" style="padding-top: 3vw; padding-bottom: 3vw;">
                <div class="header" style="color: #49b072;">英語＋学童保育幼児クラス</div>
                <p style="color: #f6ede0">KidsUPは学童保育型の英会話スクール。(東京を中心に32校のスクールを運営しています)<br>
                  我々のモットーは、「Learn with Fun」楽しみながら本当の英語力を身に付けましょう!</p>
                <img src ="https://pup.box.com/shared/static/xfyxj53p83iwqwdcd439p8ncg9fy0lbl.png" class="img-fluid" alt="Immersive English environment with native teachers" style="padding-top: 5vw; padding-bottom: 5vw;">
                <div style="padding-top: 3vw; padding-bottom: 7vw; text-align: center"><a class="Btn-Jumbotron text-nowrap center"  href="https://docs.google.com/forms/d/e/1FAIpQLSfzQXexVLsFfV76KbdwWmSfhCrVS5_5-5SACO74DCK8KFOp8w/viewform" role="button" 
                  style="width: 60%;">お申込みはこちら</a></div>
                <div class="header" style="color: #49b072;">Halloween at Kids UP 2022</div>
               
                  <p style="color: #f6ede0;">
                    KidsUPのハロウィンパーティは、今年で記念すべき7回目! 毎年、初めて参加するお友達も色々な仮装をして、<br>
                    英語でのパーティを楽しんでいます。ネィティブの先生や様々な年齢のお友達と一緒に、<br>
                    英語で様々なゲームやアクティビティを楽しめる特別な機会です。</p>
              </div>
              

              <!-- Section 1 Mobile -->
              <div class="MobileDisplay">
              <div class="container MobileDisplay MobilePadding">
                <img src="https://pup.box.com/shared/static/5w8h2l0ba75cja41hwiirynfv8yjn5yk.png" class="img-fluid center"  >
                <div class="header" style="color: #49b072;">英語＋学童保育幼児クラス</div>
                <p style="color: #f6ede0;">
                  
                  
                  
                  KidsUPは学童保育型の英会話スクール。<br>
                  (東京を中心に32校のスクールを運営して<br>
                  います) 我々のモットーは、
                  「Learn with Fun」楽しみながら本当の英語力を<br>
                  身に付けましょう！</p>




                <img src ="https://pup.box.com/shared/static/98pynf8nf8vgg2ul7qkncdhhv7kwqkwa.png" class="img-fluid" alt="Immersive English environment with native teachers" style="padding-top: 5vw; padding-bottom: 5vw;">
                <div style=" padding-bottom: 15vw;"><a class="Btn-Jumbotron text-nowrap center" href="https://docs.google.com/forms/d/e/1FAIpQLSfzQXexVLsFfV76KbdwWmSfhCrVS5_5-5SACO74DCK8KFOp8w/viewform" role="button" 
                  style=>お申込みはこちら</a> </div>
                <div class="header" style="color: #49b072;">Halloween at Kids UP 2022</div>
                <p style="color: #f6ede0;">
                  KidsUPのハロウィンパーティは、
                  今年で記念すべき7回目!
                  毎年、初めて参加するお友達も
                  色々な仮装をして、英語でのパーティを楽しんでいます。
                  ネィティブの先生や様々な年齢のお友達と一緒に、英語で様々なゲームやアクティビティ
                  を楽しめる特別な機会です。</p>

              </div>
            </div>

                <!-- Daniel and Miki, Button and Sales Point 2 -->

               


              <!-- Triple Sales Points -->
              <div id="div2"></div>
              
                  <div class="container">
                  <div class="row align-items-center">
                    
                    <div class="col-lg" style="padding-top: 4vw; padding-bottom: 4vw">
                      <img src="https://pup.box.com/shared/static/3o1cj3k72jt8kb9givzsyrz9rfq0qfy3.svg" class="img-fluid" alt="Point 1"></div>
                      

                    <div class="col-lg">
                      <img src="https://pup.box.com/shared/static/niiejlga8899ov3f36wmwowis4y8ypfz.svg" class="img-fluid" alt="Point 2" ></div>


                    <div class="col-lg">
                    <img src="https://pup.box.com/shared/static/srlimws5lznknwjrfokyxodpf58t5fnf.svg" class="img-fluid" alt="Point 3"></div>

                  </div>
                
              </div>
               <!-- Kids in Costume & Mobile Button -->
               <div class="LargeDisplay">
              <img src="https://pup.box.com/shared/static/4d47vgi4cngif8ug20lbg88ag3kp1duq.png" class="img-fluid center" alt="Kids in Costume" style="padding-left: 2%; padding-right: 2%; padding-top: 10vw;"></div>
      
              <div class="MobileDisplay container"> 
                <img src="https://pup.box.com/shared/static/4d47vgi4cngif8ug20lbg88ag3kp1duq.png" class="img-fluid center" alt="Kids in Costume" style="padding-left: 2%; padding-right: 2%; padding-top: 5vh; padding-bottom: 5vh;">
                <div style=" padding-bottom: 15vw;"><a class="Btn-Jumbotron text-nowrap center" href="https://docs.google.com/forms/d/e/1FAIpQLSfzQXexVLsFfV76KbdwWmSfhCrVS5_5-5SACO74DCK8KFOp8w/viewform" role="button" 
                  style=>お申込みはこちら</a> </div>
              </div>


              <!-- video embed -->
              <div class="container" style="padding-bottom: 4vw; padding-top: 4vw">
           
                <div class="ratio ratio-16x9">
                  <iframe  src="https://www.youtube.com/embed/8Al6zvHMk1Y" title="YouTube video" allowfullscreen></iframe>
                </div>
              
            </div>
                  <!-- Activity Information -->
                  <div id="div3"></div>
                  
            <div class="container-fluid PageSplit">
              <div class="container">
              <div class="row">
                <div class=" col LargeDisplay">
                  <img src="https://pup.box.com/shared/static/lrddo5zsqvar5vdy1ip13doxgwvijj3l.svg" class="img-fluid vertical-center" style="width: 90%">
                </div>
                <div class="col"> 
                  <img src="https://pup.box.com/shared/static/196vle8i50thxhv2wvoab2cp4ty3cuo0.png" class="img-fluid center" alt="Teacher Ale and Teacher Satomi">

                </div>
              </div>
              </div>

              <div class="MobileDisplay container">
                <img src="https://pup.box.com/shared/static/lrddo5zsqvar5vdy1ip13doxgwvijj3l.svg" class="img-fluid" alt="In-School Event" style="padding-top: 15vh;">

              </div>

           <!-- DESKTOP INFORMATION DISPLAY -->
              <div class="LargeDisplay">
                <div class="container">
                <div class="row">
                  <div class="col-5">

                    <img src="https://pup.box.com/shared/static/8ehfzl8etcbbfpbvuegwjtlspokk9tyw.png" class="img-fluid" alt="Costume">
                  </div>

                  <div class="col-7">
                    <div class="vertical-center">
                    <div class="header" style="color: #49b072;">Wear a Costume</div>
                    <p style="color: #f6ede0;">
                     好きなキャラクターやハロウィンモンスターコスチュームを着て参加しよう!<br>
                     Kids UPのティーチャーたちはどんなキャラクターで登場するか楽しみにしていてね!</p>
                  </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-7">
                    <div class="vertical-center">
                      <div class="header" style="color: #49b072;">Trick-or-treat!</div>
                      <p style="color: #f6ede0;">
                        ハロウィンで行う伝統的なアクティビティ。<br>
                        みんなでお菓子を集める、「トリート」がみんな大好き!<br>
                        でも、「トリック」ってなんだろう…?<br>
                        「トリック・オア・トリート」の本当の意味を学ぼう！
                        </p>
                        
                    </div>
                  </div>


                  <div class="col-5">

                  <img src="https://pup.box.com/shared/static/8e5z4taejv0xtluf6wn45w8lf89wvzmb.png" class="img-fluid" alt="Trick or Treat!">
                  </div>
                </div>
                <div class="row">
                  <div class="col-5">

                    <img src="https://pup.box.com/shared/static/mfsipt8vetyp5xzx9glre6p3149lwwsj.png" class="img-fluid" alt="Ghost Hunt Craft">
                  </div>


                  <div class="col-7">
                    <div class="vertical-center">
                    <div class="header" style="color: #49b072;">Ghost Hunt Craft</div>
                    <p style="color: #f6ede0;">
                      お家でも遊べるクラフトを作ろう!<br>
                      ホーンテッドマンションに隠れている<br>
                      お化けやモンスターの絵を描いて、お友だちや家族に見せよう!<br>
                      ハロウィンの特製トーチを使って、全部見つけることができるかな？</p>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7">
                    <div class="vertical-center">
                      <div class="header" style="color: #49b072;">Monster Catcher!</div>
                      <p style="color: #f6ede0;">
                        部屋の中に、たくさんのハロウィンモンスターが隠れているよ。<br>
                        全部ゲットできるかな？<br>
                        ティーチャーよりもたくさんゲットして、キャンディをもらおう！</p>
                        
                    </div>
                  </div>


                  <div class="col-5">

                  <img src="https://pup.box.com/shared/static/rxbq2sbpkz459ezoifloxb5ldn5t2mrp.png" class="img-fluid" alt="Monster Catcher!">
                  </div>

                </div>
                <div class="row">
                  <div class="col-5">

                    <img src="https://pup.box.com/shared/static/1c78k520m9rnl3mabozfko6dbwwh5q6h.png" class="img-fluid" alt="Badge">
                  </div>


                  <div class="col-7">
                    <div class="vertical-center">
                    <div class="header" style="color: #49b072;">Original Badge</div>
                    <p style="color: #f6ede0;">
                      KidsUPオリジナル「ハロウィン2022」缶バッジを全員にプレゼント!</p>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>

              <!-- Mobile INFORMATION DISPLAY -->
              <div class="MobileDisplay" style="background-color: #371942">
                <div class=" MobilePadding">
                  <img src="https://pup.box.com/shared/static/8ehfzl8etcbbfpbvuegwjtlspokk9tyw.png" class="img-fluid center" alt="Costume">
                  <div class="header" style="color: #49b072;">Wear a Costume</div>
                  <p style="color: #f6ede0;">
                    好きなキャラクターやハロウィンモンスター<br>
                    コスチュームを着て参加しよう!Kids UPの<br>
                    ティーチャーたちはどんなキャラクター<br>
                    で登場するか楽しみにしていてね！
                    </p>


                    <img src="https://pup.box.com/shared/static/8e5z4taejv0xtluf6wn45w8lf89wvzmb.png" class="img-fluid" alt="Trick or Treat!">
                    <div class="header" style="color: #49b072;">Trick-or-treat!</div>
                    <p style="color: #f6ede0;">
                      ハロウィンで行う伝統的なアクティビティ。<br>
                      みんなでお菓子を集める、「トリート」がみんな大好き!<br>
                      でも、「トリック」ってなんだろう…？<br>
                      「トリック・オア・トリート」の本当の意味を学ぼう!</p>


                  <img src="https://pup.box.com/shared/static/mfsipt8vetyp5xzx9glre6p3149lwwsj.png" class="img-fluid" alt="Ghost Hunt Craft">
                  <div class="header" style="color: #49b072;">Ghost Hunt Craft</div>
                  <p style="color: #f6ede0;">
                    お家でも遊べるクラフトを作ろう！<br>
                    ホーンテッドマンションに隠れている<br>
                    お化けやモンスターの絵を描いて、お友だちや家族に見せよう！<br>
                    ハロウィンの特製トーチを使って、全部見つけることができるかな？</p>


                    <img src="https://pup.box.com/shared/static/rxbq2sbpkz459ezoifloxb5ldn5t2mrp.png" class="img-fluid" alt="Monster Catcher!">
                    <div class="header" style="color: #49b072;">Monster Catcher!</div>
                    <p style="color: #f6ede0;">
                      部屋の中に、たくさんのハロウィンモンスターが隠れているよ。<br>
                      全部ゲットできるかな？<br>
                      ティーチャーよりもたくさんゲットして、キャンディをもらおう！</p>
                  

                      <img src="https://pup.box.com/shared/static/1c78k520m9rnl3mabozfko6dbwwh5q6h.png" class="img-fluid" alt="Badge">
                      <div class="header" style="color: #49b072;">Original Badge</div>
                      <p style="color: #f6ede0;">
                        KidsUPオリジナル「ハロウィン2022」缶バッジを全員にプレゼント!</p>



                </div>
               </div>
             
                <div style="background-color: #371942">

                <!-- CAROUSEL -->   
                <div id="div4"></div>
                <div class="container" style="padding-top: 4vw; padding-bottom: 60px">
                  <div id="BottomCarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators" style="bottom: -60px;">
                      <button type="button" data-bs-target="#BottomCarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#BottomCarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#BottomCarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#BottomCarouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#BottomCarouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>

                    

                    <div class="carousel-inner" >
                      <div class="carousel-item active">
                        <img src="https://pup.box.com/shared/static/4tf9jxivsgkhv5lpoaj1itup4x0ql1go.jpg" class="img-fluid" alt="Image 1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://pup.box.com/shared/static/qfdlo3b0dip5255smgq9jrphhwpi86yy.jpg" class="img-fluid" alt="Image 2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://pup.box.com/shared/static/o3sudd5n3q86nh5bits7yxv496tkla3f.jpg" class="img-fluid" alt="Image 3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://pup.box.com/shared/static/6igqjl187bsydqxlijg2y74bmifl12wr.jpg" class="img-fluid" alt="Image 4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://pup.box.com/shared/static/aatrjg3s0q6gzr9kyy0uk6vvojd6fpbi.jpg" class="img-fluid" alt="Image 5">
                      </div>
             
                    </div>

                  </div>

                </div>
                <div class ="container MobileDisplay">
                <div class=" MobilePadding">
                <div class="header " style="color: #49b072;">Photo Service</div>
                <p style="color: #f6ede0;">
                  *当日撮影した写真がダウンロード<br>で
                  きる「フォトサービス」をご用意！<br>
                  （別途お申込が必要）</p>
                </div>
                </div>


                <div class="container LargeDisplay">
                  <div class="header " style="color: #49b072; padding-top: 3vw; ">Photo Service</div>
                  <p style="color: #f6ede0; padding-bottom: 3vw;">
                    *当日撮影した写真がダウンロードできる「フォトサービス」をご用意！<br>
                    （別途お申込が必要）</p>
                  </div>
                
                 <!-- Lower Banner -->   
                 <div id="div5"></div>
                 <div class="container-fluid footer-banner MobileDisplay" style="padding-top: 5vw; padding-bottom: 5vw;">
                  <div class="container center">
                    <img src="https://pup.box.com/shared/static/gjwqaxezrbzlozad7nptyhpfdbwct4gj.svg" class="img-fluid center" style="min-width: 40%;">
                    </div>
                </div>
                <div class="container-fluid footer-banner LargeDisplay" style="padding-top: 5vw; padding-bottom: 5vw;">
                  <div class="container center">
                    <img src="https://pup.box.com/shared/static/gjwqaxezrbzlozad7nptyhpfdbwct4gj.svg" class="img-fluid center" style="max-width: 40%;">
                    </div>
                </div>

                <!-- Application Instructions DESKTOP -->  
                <div class="container LargeDisplay">
                <div class="header" style="color: #49b072;">❶ WEBフォームよりお申込み</div>
                <p style="color: #f6ede0;">
                  WEBフォームよりHalloween at Kids UPのお申込みが可能です。参加希望するスクールを選択し、<br>
                  お申込みを確定してください。
                  </p>
                  <br>


                <div class="header" style="color: #49b072;">❷ お申込案内のご確認手続き</div>
                <p style="color: #f6ede0;">
                  WEBフォーム送信後、スクールからメールにてお申込内容の確認をさせていただきます。<br>
                  お申込内容に相違があった場合には、お気軽にお申し出ください。</p>
                  <br>

                <div class="header" style="color: #49b072;">❸ Halloween at Kids UP開始</div>
                <p style="color: #f6ede0;">
                  フレンドリーな先生たちがお子様の参加をお待ちしています！<br>
                  ※各アクティビティ満員になりましたら受付を締め切らせていただきます。</p>
                  <br>
                </div>



                <!-- Application Instructions MOBILE -->  
                <div class="container MobileDisplay">
                  <div class="MobilePadding"></div>

                  <div class="header" style="color: #49b072;">❶ WEBフォームよりお申込み</div>
                  <p style="color: #f6ede0;">
                    WEBフォームよりHalloween at Kids UP<br>
                    のお申込みが可能です。参加希望する<br>
                    スクールを選択し、 お申込みを<br>
                    確定してください。
                    </p>
                    <br>
  
  
                  <div class="header" style="color: #49b072;">❷ お申込案内のご確認手続き</div>
                  <p style="color: #f6ede0;">
                    WEBフォーム送信後、スクールから<br>
                    メールにてお申込内容の確認を<br>
                    させていただきます。お申込内容に<br>
                    相違があった場合には、<br>
                    お気軽にお申し出ください。</p>
                    <br>
  
                  <div class="header" style="color: #49b072;">❸ Halloween at Kids UP開始</div>
                  <p style="color: #f6ede0;">
                    フレンドリーな先生たちがお子様の<br>
                    参加をお待ちしています！<br>
                    ※各アクティビティ満員になりましたら<br>
                    受付を締め切らせていただきます。</p>
                    <br>
                  </div>



              <!-- Buttons -->  

              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div style="padding-top: 3vw; padding-bottom: 3vw"><a class="Btn-Jumbotron text-nowrap center" href="https://docs.google.com/forms/d/e/1FAIpQLSfzQXexVLsFfV76KbdwWmSfhCrVS5_5-5SACO74DCK8KFOp8w/viewform" role="button" 
                      style=>お申込みはこちら</a> </div>
                  </div>

                   <div class="col-lg-6">
                    <div style="padding-top: 3vw; padding-bottom: 3vw"><a class="Btn-Jumbotron text-nowrap center" href="https://kids-up.jp/inquiry" role="button" 
                      style=>お問い合わせ</a> </div>
                  </div>

                </div>
              </div>
              <div class="container MobileDisplay">
                
                <div class=" MobilePadding center">
                    <div style="border-style: solid; border-color:  #f7eddf; border-width: thin; margin: auto;" >
                      <br>
                      <div class="header" style=" text-align: center">CONTACT</div>
                      <p style="color: #f7eddf; text-align: center">お問い合わせ・資料請求はこちら<br>
                            <tel style="text-align: center">
                            <a href="tel:0120378056" style="color: #f7eddf;"><i class="fas fa-phone-square"></i> 0120-378-056</a></tel><br><br>
                            受付時間　10:00 - 20:00 <br>
                      （土日・祝日も受付中）</p>
                    </div>
                </div>
              </div>

                <div class="container LargeDisplay">
                <div class="center">
                  <div style="border-style: solid; border-color:  #f7eddf; border-width: thin; max-width: 30%; margin: auto;" >
                    <div class="header" style=" text-align: center">CONTACT</div>
                    <p style="color: #f7eddf; text-align: center">お問い合わせ・資料請求はこちら<br>
                          <tel style="text-align: center">
                          <a href="tel:0120378056" style="color: #f7eddf;"><i class="fas fa-phone-square"></i> 0120-378-056</a></tel><br><br>
                          受付時間　10:00 - 20:00 <br>
                    （土日・祝日も受付中）</p>
                  </div>
              </div>


                </div>
              <!-- SNS Footer -->  
              <div class="container LargeDisplay" style="padding-top: 2%; padding-bottom: 2%">
                <div class="row" style="padding-left: auto; padding-right: auto">
                  <div class="col"><a href="https://www.youtube.com/Kids-upJp/"><img src="https://pup.box.com/shared/static/jovdeij845f6qby7xrqre7ld92ebhfr4.svg" class="img-fluid center vertical-center" style="width: 90%; margin: auto;"></a></div>
                  <div class="col"><a href="https://kids-up.jp/"><img src="https://pup.box.com/shared/static/iodyt6pr5fs130li5ertiz8gqptd32d6.svg" class="img-fluid center vertical-center" style="width: 90%;"></a></div>
                  <div class="col"><a href="https://www.facebook.com/kidsup.ed/"><img src="https://pup.box.com/shared/static/ft4lwrr3vhjtoykhw674s3isu7mia4dq.svg" class="img-fluid center vertical-center" style="width: 90%;"></a></div>
                  <div class="col"><a href="https://www.instagram.com/kidsup.jp/"><img src="https://pup.box.com/shared/static/mkgoeg8kvf1h2pv3q3h87s6zhk2fvtyr.svg" class="img-fluid center vertical-center" style="width: 90%;"></a></div>
                </div>
              </div>
              <div class="container MobileDisplay" style="padding-top: 3vh; padding-bottom: 3vh">
                <div class="row">
                  <div class="col-5"><a href="https://www.youtube.com/Kids-upJp/"><img src="https://pup.box.com/shared/static/vrm1dbux3ktvu4rmby4nodd1vsj2hw4y.svg" class="img-fluid center vertical-center" style="width: 100%;"></a></div>
                  <div class="col"><a href="https://kids-up.jp/"><img src="https://pup.box.com/shared/static/n0zsnowtvhblgo20ej5hnmg92jw5ty72.svg" class="img-fluid center" style="width: 80%; margin: 10%;"></a></div>
                  <div class="col"><a href="https://www.facebook.com/kidsup.ed/"><img src="https://pup.box.com/shared/static/dp2fa0one3qobiyvijsxz4nlhb78zdqa.svg" class="img-fluid center" style="width: 80%; margin: 10%;"></a></div>
                  <div class="col"><a href="https://www.instagram.com/kidsup.jp/"><img src="https://pup.box.com/shared/static/3hek7oufhwr3iw6lyz8zaefm85yf880g.svg" class="img-fluid center" style="width: 80%; margin: 10%;"></a></div>
                </div>
              </div>



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