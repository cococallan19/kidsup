@inject('ConvertToWareki', 'App\Http\Library\ConvertToWareki')


<!DOCTYPE html>
<html lang="en">
  <head>
  @include('layouts.gtmheader')
<script src="https://kit.fontawesome.com/396c39bc59.js" crossorigin="anonymous"></script>
	  <script>
  (function(d) {
    var config = {
      kitId: 'kcu3yie',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>サマースクール2022</title>
	<link rel="icon" type="image/x-icon" href="https://trello-attachments.s3.amazonaws.com/5ef634818dbccf5abcd5959f/33x32/69786fad45222f8578720bc041a730d6/faviconCircle.png">  

  <!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  
  </head>
	
<style>
	
@charset "UTF-8";


/* CSS Document */
@font-face {
    font-family: "新丸ゴ DB";
    src: url("/fonts/A-OTF-ShinMGoPro-DeBold.woff")format("truetype");
	}




html {
  font-family: "新丸ゴ DB", kozuka-gothic-pr6n, arial, sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
scroll-behavior: smooth;
	font-size:  16px;
}
h1{
	font-family: "新丸ゴ DB", arial, sans-serif;
	font-size: clamp(2rem, 1.7152rem + 1.2658vw, 2.5rem);
	font-weight:lighter;
	color: #fff;
	text-align: center;
	
	
}

h2{
    font-family: "新丸ゴ DB", arial, sans-serif;
    font-size: clamp(1.1rem, 0.7478rem + 1.5652vw, 2rem);
    font-weight: bolder;
    color: #000;
    text-align: center;
}

h2-white{
    font-family: "新丸ゴ DB", arial, sans-serif;
    font-size: clamp(1.1rem, 0.7478rem + 1.5652vw, 2rem);
    font-weight: bolder;
    color: #fff;
    text-align: center;
}

h3{
    font-family: kozuka-gothic-pr6n;
    font-size: clamp(1.25rem, 0.5380rem + 3.1646vw, 2.5rem);
    color: #fff;
    text-align: center;
}

p1{
    font-family: kozuka-gothic-pr6n;
	font-size: clamp(0.48rem, 0.2765rem + 0.9043vw, 1rem);
    color: #000;
    text-align: center;
	justify-content: center;
	display: inline-flex;
	align-items: flex-start;
	margin: auto;
  	width: 100%;
	
}

p1-left{
    font-family: kozuka-gothic-pr6n;
	font-size: clamp(0.48rem, 0.2765rem + 0.9043vw, 1rem);
    color: #000;
    text-align: left;
	justify-content: center;
	margin: auto;
  	width: 100%;
	
}	
	
p1-sub{
	font-family: kozuka-gothic-pr6n;
    font-size:  clamp(0.58rem, 0.4643rem + 0.5143vw, 0.85rem);
    color: #000;
    text-align: left;
	justify-content: center;

	align-items: flex-start;
	margin: auto;
  	width: 100%;
}
p1-white{
    font-family: kozuka-gothic-pr6n;
	font-size: clamp(1rem, 0.9217rem + 0.3478vw, 1.2rem);
    color: #fff;
    text-align: center;
	justify-content: center;
	display: inline-flex;
	align-items: flex-start;
	margin: auto;
  	width: 100%;
	}

p2{
    font-family: kozuka-gothic-pr6n;
    font-size: clamp(0.8rem, 0.7143rem + 0.3810vw, 1rem);
    color: #000;
	text-align: left;}

p3{
    font-family: "新丸ゴ DB", arial, sans-serif;
    font-size: clamp(1rem, 0.7152rem + 1.2658vw, 1.5rem);
    font-weight: bolder;
    color: #000 inherit;
    justify-content: flex-start;
    display: inline-flex;
    align-items: flex-start;
    margin: auto;
    width: 100%;
}
	.Class3{
	font-family: "新丸ゴ DB", arial, sans-serif;
    font-size: clamp(1rem, 0.7152rem + 1.2658vw, 1.5rem);
    font-weight: bolder;
    color: #000 inherit;
    text-align: center;
	}	
@media screen and (min-width: 992px) {
p4{
	font-family: kozuka-gothic-pr6n;
    font-size: clamp(0.75rem, -0.0791rem + 1.4388vw, 1rem);
    color: #000;
    text-align: center;
	justify-content: center;
	display: inline-flex;
	align-items: flex-start;
	margin: auto;
  	width: 100%;
}
p4-left{
	font-family: kozuka-gothic-pr6n;
    font-size: clamp(0.7rem, -0.2662rem + 1.5584vw, 1rem);
    color: #000;
    text-align: left;
	content-align: left;
	justify-content: left;
	margin-left: 30%;
  	width: 100%;
	



	}

p4-sub{
	font-family: kozuka-gothic-pr6n;
    font-size: clamp(0.55rem, -0.8808rem + 2.3077vw, 0.85rem);
	color: #000;
    text-align: center;
	justify-content: center;
	display: inline-flex;
	align-items: flex-start;
	margin: auto;
  	width: 100%;
}
p4-sub-left{
	font-family: kozuka-gothic-pr6n;
    font-size: clamp(0.55rem, -0.8808rem + 2.3077vw, 0.85rem);
	color: #000;
    text-align: left;
	justify-content: center;
	display: inline-flex;
	align-items: flex-start;
	margin: auto;
  	width: 100%;	
}
}
@media screen and (max-width: 991px) {
p4{
	font-family: kozuka-gothic-pr6n;
    font-size: .9rem;
    color: #000;
    text-align: center;
	justify-content: center;
	display: inline-flex;
	align-items: flex-start;
	margin: auto;
  	width: 100%;
}
p4-left{
	font-family: kozuka-gothic-pr6n;
    font-size: .9rem;
    color: #000;
    text-align: left;
	justify-content: center;
	margin: auto;
  	width: 100%;
}	

p4-sub{
	font-family: kozuka-gothic-pr6n;
    font-size: 0.85rem;
	color: #000;
    text-align: center;
	justify-content: center;
	display: inline-flex;
	align-items: flex-start;
	margin: auto;
  	width: 100%;
}	
p4-sub-left{
	font-family: kozuka-gothic-pr6n;
    font-size: 0.85rem;
	color: #000;
    text-align: left;
	justify-content: center;
	display: inline-flex;
	align-items: flex-start;
	margin: auto;
  	width: 100%;
}		
}

tel{
	
	font-family: "新丸ゴ DB", arial, sans-serif;
	font-size: clamp(0.85rem, 0.5714rem + 1.2381vw, 1.5rem);
	color: #000;
	text-decoration: none inherit;
	
	
}
	
hover{
	font-family: "新丸ゴ DB", arial, sans-serif;
	font-size: 1.5rem;
	color: #fff;
	text-decoration: none;
		
	
}
	
	

/* Padding Definitions */

.Auto-Margin{
	margin: auto;
	
}

.padding-top-200{
	padding-top: 200px;
	
}

.padding-top-100{
	padding-top: 100px;
	
}
.padding-50{
	padding: 50px;
	
}

.padding-top-50{
	padding-top: 50px;
	
}


.padding-100{
	padding: 100px;
	
}
.padding-bottom-50{
	padding-bottom: 50px;
	
}
.padding-75{
	padding: 75px;
	
}
.padding-top-75 {
	padding-top: 75px;
}
.padding-top-10{
	padding-top: 10
}
.padding-top-25{
	padding-top: 10
}
.padding-bottom-75 {
	padding-bottom: 75px;
}
.padding-top-bottom-75 {
	padding-top: 75px;
	padding-bottom: 75px;
}
.padding-top-bottom-25 {
	padding-top: 25px;
	padding-bottom: 25px;
}

.padding-25{
	padding: 25px;
	
}
.padding-bottom-25 {
	padding-bottom: 25px;
}
.padding-top-25 {
	padding-top: 25px;
}

.scroll-padding {
	padding-left: 75px;
	padding-right: 75px;
}
.accordion-padding {
	padding-left: 50px;
	padding-right: 50px;
}
.DesktopSales-Padding {
	padding-left: 100px;
	padding-right: 100px;
}

.button-padding{
	padding-left: 250px;
	padding-right: 250px;
}

.footer-padding{
	padding-left: 110px;
	padding-right: 110px;
}

.padding-Top-Bottom-10{
	padding-top: 10px;
	padding-bottom: 10px;
}

.padding-Top-Bottom-20{
	padding-top: 20px;
	padding-bottom: 20px;
}

/* Defining Navbar Style Settings */
.Navbar-Custom {
	font-family: "新丸ゴ DB";
	background-color: #d5e4ed;
}

.nav-item{
	padding-right: 15px;
	padding-left: 15px;
	
	
}
.nav-link{
		color : #05425c;
		text-align: right;
		padding-top: 10px;
		padding-bottom: 10px;
	
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
	border: solid #05425C;
	border-width: 4px;
	border-radius: 45px;
}

.nav-link:hover{
	color : #fff;
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
	background: #05425C;
	border-radius: 2px;
	opacity: 1;
	left: 0;
	transform: rotate(0deg);
	transition: .25s ease-in-out;	
}
/* Hamburger ACTIVE State */

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
	margin-top: -18px;
	transform: rotate(0deg);
}

.navbar-toggler.collapsed .MiddleBar1{
	margin-top: -6px;
	opacity: 1;
	filter: alpha(opacity=100)	
}

.navbar-toggler.collapsed .MiddleBar2{
	margin-top: 6px;
	opacity: 1;
	filter: alpha(opacity=100)	
}
.navbar-toggler.collapsed .BottomBar{
	margin-top: 18px;
	transform: rotate(0deg);
}

/* Header Definitions */


.Btn-Type1 {
	background : #05425c;
	text-align: center;
	text-decoration: none;
	left : 10px;
  	top : 10px;
	transition-duration: 0.4s;
	border-radius : 50px;
	font-family : "新丸ゴ DB";
  	color : #fff;		
	padding-left: 65px;
	padding-right: 65px;
	padding-top: 8px;
	padding-bottom: 8px;
	
}

.Btn-Type1:hover {
	background : #fff;
	text-align: center;
	text-decoration: none;
	left : 10px;
  	top : 10px;
	transition-duration: 0.4s;
	border-radius : 30px;
	font-family : "新丸ゴ DB";
  	color : #05425c;		
	padding-left: 65px;
	padding-right: 65px;
	padding-top: 8px;
	padding-bottom: 8px;
}


	

.Btn-Type2 {
	background : #fff;
	text-align: center;
	text-decoration: none;
	left : 10px;
  	top : 10px;
	transition-duration: 0.4s;
	border-radius : 47px;
	font-family : "新丸ゴ DB";
	font-size: clamp(1.25rem, 1.1076rem + 0.6329vw, 1.5rem);
  	color : #05425c;		
	padding-top: 20px;
	padding-left: 20%;
	padding-right: 20%;
	padding-bottom: 20px;
	
	
}

.Btn-Type2:hover {
	
	background : #F08131;
	text-align: center;
	text-decoration: none;
	left : 10px;
  	top : 10px;
	transition-duration: 0.4s;
	border-radius : 47px;
	font-family : "新丸ゴ DB";
	font-size: clamp(1.25rem, 1.1076rem + 0.6329vw, 1.5rem);
  	color : #fff;		
	padding-top: 20px;
	padding-left: 20%;
	padding-right: 20%;
	padding-bottom: 20px;

	
}

.Btn-Type3 {
	
	background : #4089bb;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	left : 10px;
  	top : 10px;
	transition-duration: 0.4s;
	border-radius : 47px;
	font-family : "新丸ゴ DB";
	font-size: clamp(1.25rem, 1.1076rem + 0.6329vw, 1.5rem);
  	color : #fff;		
	padding-top: 20px;
	padding-bottom: 20px;
	white-space:nowrap;
	width: 80%;
}

.Btn-Type3:hover {
	
	background : #fff;
	display: inline-block;
	color: #4089bb;
	text-decoration: none;
	left : 10px;
  	top : 10px;
	transition-duration: 0.4s;
	border-radius : 47px;
	font-family : "新丸ゴ DB";
	font-size: clamp(1.25rem, 1.1076rem + 0.6329vw, 1.5rem);	
	padding-top: 20px;
	padding-bottom: 20px;
	white-space:nowrap;
	width: 80%;
}
.Btn-Type4 {
	background : #05425c;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	left : 10px;
  	top : 10px;
	transition-duration: 0.4s;
	border-radius : 47px;
	font-family : "新丸ゴ DB";
	font-size : clamp(1rem, 0.7857rem + 0.9524vw, 1.5rem);
  	color : #fff;		
	padding-top: 20px;
	padding-left: 10%;
	padding-right: 10%;
	padding-bottom: 20px;
	
	
}

.Btn-Type4:hover {
	
	background : #F08131;
	text-align: center;
	text-decoration: none;
	left : 10px;
  	top : 10px;
	transition-duration: 0.4s;
	border-radius : 47px;
	font-family : "新丸ゴ DB";
	font-size : clamp(1rem, 0.7857rem + 0.9524vw, 1.5rem);
  	color : #fff;		
	padding-top: 20px;
	padding-left: 10%;
	padding-right: 10%;
	padding-bottom: 20px;

	
}

.benefit-icons{
    max-width: 25%;
    height: auto;
    text-align: center;

	
	
}
/* 4 Sales Points Control */
.MiniContainer{
	
display: inline-flex;
align-items: flex-start;
justify-content: left;
margin: auto;

}

.TextProperties{
	
display: inline-flex;
align-items: flex-start;
justify-content: left;
margin: auto;
}
	  
.MiniContainerText{
    padding-left: 10px;
    text-align: left;
}


.AccordionContainer1{
	background: #f3f6f8;
	
	
}
.CarouselTestemonial{
	max-width: 1500px;
	
}

.AccordionContainer2{
	background: #d5e4ed;
	
}
.AccordionCalendarContainer{
	display: flex;
	justify-content: center;
	background: #f3f6f8;
	
}

.AccordionText{
    font-family: kozuka-gothic-pr6n;
	font-size: clamp(0.8rem, 0.7143rem + 0.3810vw, 1rem);

    padding-left: 10px;
    padding-right: 10px;
    text-align: left;
}

	.InfoBox{
	text-align: center;
	background: #f1e7d8;
	display: inline-block;
	
}
	.InfoBoxPre{
		background: #f1e7d8;
		display:flex;
  		justify-content:center;
  		align-items:center;
  		flex-flow:column nowrap;
	}

	.DesktopSales{
		background: #fff;
		display:flex;
  		justify-content:center;
  		align-items:center;
  		flex-flow:column nowrap;
		
	}
	.DesktopSales p4-left{
		margin: 0px;
		
	} 

.FooterBox{
	align-content: center;
	background: #f48000;
	text-align: center
}

	.LeftAlign{
		text-align: left;
		
	}	
/*Mechanism */
@keyframes scroll {
	0% {
		transform: translate(0);
	}
	100% {
		transform: translateX(calc(-255px*9));
	}
}

.Automatic-Horizontal-slider {
	height: auto;
	margin: auto;
	position: relative;
	width: 90%;
	display: grid;
	place-items: center;
	overflow: hidden;
}
.Automatic-Horizontal-slide-track {
	display: flex;
	/*IMPORTANT - Image width multiplied by number of images */
	width: calc(255 * 18);
	animation: scroll 30s linear infinite;
	transition: 0.4s;

	
}
.Automatic-Horizontal-slide-track:hover{
	animation-play-state: paused;
}

.Automatic-Horizontal-slide {
	width: 255px;
	height: 355px;
	display: flex;
	align-items: center;
	padding: 15px;
	perspective: 100px;
		
}
.Automatic-Horizontal-SlideItem{
	width: 100%;
	transition: transform 1s;
	
}
.Automatic-Horizontal-SlideItem:hover{
	transform: translateZ(20px);
}
/*Edge Shadows */

.Automatic-Horizontal-slider::before,
.Automatic-Horizontal-slider::after{
	background: linear-gradient(to right, rgba(255,255,255,1)0%,
	rgba(255,255,255,0)100%);	
	content: '';
	height: 100%;
	position: absolute;
	width: 7%;
	z-index: 2;
}
.Automatic-Horizontal-slider::before {
	left: 0;
	top: 0;
}
.Automatic-Horizontal-slider::after {
	right: 0;
	top: 0;
	transform: rotateZ(180deg)
}



#main #Info .card .card-header .btn-header-link {
	color: #fff;
	display: block;
	text-align: left;
	background: #77b6d7;
	font-family: "新丸ゴ DB", arial, sans-serif;
font-size: clamp(1rem, 0.8291rem + 0.7595vw, 1.3rem);





	font-weight: bolder;
	padding: 20px;
}

#main #Info .card .card-header .btn-header-link:after {
  content: "隠す↑";
font-family: "新丸ゴ DB", arial, sans-serif;
font-size: clamp(1rem, 0.8291rem + 0.7595vw, 1.3rem);
  font-weight: bolder;
   color: #fff;
  float: right;
}

#main #Info .card .card-header .btn-header-link.collapsed {
  background: #f48000;
  color: #fff;
}

#main #Info .card .card-header .btn-header-link.collapsed:after {
  content: "見る↓";
font-family: "新丸ゴ DB", arial, sans-serif;
font-size: clamp(1rem, 0.8291rem + 0.7595vw, 1.3rem);






    font-weight: bolder;
    color: #fff;
  float: right;
}

#main #Info .card .collapsing {
  background: #f2f6f9;

}


#main #Info .card .collapse.show {
  background: #f2f6f9;

}
.CarouselControl{
    height: 1.5em;
    width: 1.5em;
    outline: black;
    background-color: rgba(0, 0, 0, 1);
    background-size: 100%, 100%;
    border-radius: 50%;

	
}


.slider-size {
max-height: 600px;
min-width: 	200px;
justify-content: center;	
}

.footer-banner {
	background-image: url("https://pup.box.com/shared/static/o46w28rgw28ypiyj6dke73r55up5cc62.jpg");
	align-content: center;
	position: fixed 50%;
	background-repeat: no-repeat;
	background-size: cover;
	
}
	
	.PhoneBox {
	display: block;
   
	min-width: 200px;
	max-width: 400px;	
    position: relative;
    text-align: center;
		
    margin: 50px auto 2em;
    border: 2px solid #000;

	}	
.sns-buttons  {

	min-width: 40%;
}

	
	
	
	
	
</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGWSQLH"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	  <!---NAV START--->
	  <nav class="navbar navbar-expand-xl Navbar-Custom sticky-top">
		<a href="https://kids-up.jp/" class="navbar-brand d-flex w-50 mr-auto"><img src="https://pup.box.com/shared/static/to0dcatvphlvea5zduonkt3brrn6isyl.png" class="NavLogo" alt=""/></a> 
		
	  <button class="navbar-toggler collapsed d-flex d-xl-none flex-column justify-content-around" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="toggler-icon TopBar"></span>
			<span class="toggler-icon MiddleBar1"></span>
			<span class="toggler-icon MiddleBar2"></span>
			<span class="toggler-icon BottomBar"></span>
	  </button>
		  
	 	<div class="collapse navbar-collapse justify-content-end flex-nowrap" id="navbarCollapse">
				<ul class="navbar-nav text-center">
					
  				  <li class="nav-item text-nowrap">
				    <a  class="nav-link js-scroll-trigger" href="#Content1" >メリット</a>
				  </li>
					<li class="nav-item text-nowrap">
					  <a class="nav-link js-scroll-trigger" href="#Content2" >お客様の声</a>
					</li>
					<li class="nav-item text-nowrap">
					  <a class="nav-link js-scroll-trigger" href="#Content3" >カレンダー&amp;料金表 </a>
					</li>
					<li class="nav-item text-nowrap">
					  <a  class="nav-link js-scroll-trigger" href="#Content4">ギャラリー</a></li>  
					<a class="Btn-Type1 text-nowrap" href="https://kids-up.jp/inquiry" role="button">お問い合わせ</a>  
	  			</ul>
			</div>
  </nav> 
  <!---NAV END---> 

   <div class="row" style="background: #05425c">
    <div class="col-xl-6 Auto-Margin padding-top-25" >
<div class="container padding-top-70">
	  <h1>サマースクール2022<br>お申込み受付開始</h1>
        </div>
        <div class="container padding-top-25 padding-bottom-25">
          <h3>
            Kids UPサマースクール2022の <br> 「WEBお申込み」<br>を開始します！	
          </h3>
			<p1-white>（スクールで直接お申込みも可）</p1-white>
			
        </div>
			
		  
	    <div class="container padding-bottom-75">
			<div class="col-md-12 text-center  padding-25">

		  <a class="Btn-Type2 text-nowrap" href="https://docs.google.com/forms/d/e/1FAIpQLSdow5U7ysmGyokH8kq3Jm5lRDts-2YgFMYzFqmne7AN1XI7-w/viewform" role="button">参加申込み</a> </div>
			</div>
	    </div>

		
		
    <div class="col-xl-6">
    	<img src="https://pup.box.com/shared/static/rysbbtk7ghomt8ec7gexhzv8p9grmgl9.jpg" width="100%" alt="Placeholder image">
    </div>
  </div>

	  
  <div id = "Content1" class="row padding-top-25">
    <div class="col-lg-4"><img src="https://pup.box.com/shared/static/jrrnw057ofucyypudyq30n95mjrdk1cv.jpg" class="img-fluid mx-auto d-block" alt="Placeholder image">
	  <div class="container padding-25 DesktopSales">
		
		<div> <p4-left>最短8時30分～の事前お預かりも承ります！<br>
	      午後の通常レッスンも サーマースクール<br> 期間中はどなたでも利用できます。<br>
		  ※事前お預かりできる時間帯は、<br>スクールによって条件が異なります<br></p4-left></div>
	
      </div>
    </div>
	  
	    <div class="col-lg-4"><img src="https://pup.box.com/shared/static/qprf7t9q0lgo78q78cuya5f58w9ret3f.jpg" class="img-fluid mx-auto d-block" alt="Placeholder image">
	   <div class="container padding-25 DesktopSales">
		
		  <div> <p4-left>満3歳～小学6年生までのお子さまは<br>
		   	通学生や予約生だけでなく、<br>どなたでもご参加が可能です。<br>
	     </p4-left></div>
       </div>
	  
    </div>
	    <div class="col-lg-4"><img src="https://pup.box.com/shared/static/3eg3axgf9c5odblp0vm4esb2twjavcen.jpg" class="img-fluid mx-auto d-block" alt="Placeholder image">
	 <div class="fluid-container padding-25 DesktopSales">
		
		<div><p4-left>アクティビティを<br>5回以上お申し込みいただくと<br>お得な割引料金になります。</p4-left></div>
     </div>
	  
	  
    </div>
  </div>
	  
	  
	  
<div id = "Content2" class="container-fluid padding-25"></div>
 <h2>2021年度サマースクール参加者様より<br>
 こんなお声をいただきました。</h2>
  <div class="container-fluid CarouselTestemonial">
    <div id="carouselExampleIndicators1" class="carousel slide carousel-fade padding-top-25 justify-content-center " data-ride="carousel">
 
      <div class="carousel-inner " role="listbox"  width="100%">
		  
        <div class="carousel-item active"> <img class="d-block mx-auto img-fluid " src="https://pup.box.com/shared/static/9dc01uet2zjk3ks70ph9la4faj357a9k.jpg" alt="First slide"  width="100%">
        <div class="carousel-caption"></div>
        </div>
		  
        <div class="carousel-item"> <img class="d-block mx-auto img-fluid" src="https://pup.box.com/shared/static/88nt8fmih48gzeee9lj8rqj0sdqr81fe.jpg" alt="Second slide" width="100%">
        <div class="carousel-caption"></div>
		</div>
		  
        <div class="carousel-item"> <img class="d-block mx-auto img-fluid" src="https://pup.box.com/shared/static/f3s3rimw6p1xn4x65byjonihvz0019dh.jpg.jpg" alt="Third slide" width="100%">
        <div class="carousel-caption"></div>
        </div>
		
		<div class="carousel-item"> <img class="d-block mx-auto img-fluid" src="https://pup.box.com/shared/static/77s64psb5ed4rh6ibao5lh0yhf4l30e4.jpg" alt="Fourth slide" width="100%">
        <div class="carousel-caption"></div>
        </div>
		  
		<div class="carousel-item"> <img class="d-block mx-auto img-fluid" src="https://pup.box.com/shared/static/nxar4r8nl5v8aju4579isrn78hm7n6yk.jpg" alt="Fifth slide" width="100%">
        <div class="carousel-caption"></div>
        </div>
		    
		  
		  
      </div>
    </div>
   
      
		  
</div>
	  
<div class="row justify-content-center padding-top-bottom-25"> <a class="Btn-Type4 text-nowrap align-content-center" href="https://docs.google.com/forms/d/e/1FAIpQLSdow5U7ysmGyokH8kq3Jm5lRDts-2YgFMYzFqmne7AN1XI7-w/viewform" role="button">参加申込み</a> </div>
	
	
	  
 
	
	 
 <!---Desktop Display---> 	
	    <div class="row padding-bottom-25 Auto-Margin " width="100%">
		
	    <div class="col-lg-3 padding-Top-Bottom-10">
		   <div class="container-fluid MiniContainer Auto-Margin justify-content-center"><img src="https://pup.box.com/shared/static/l4rupqe281bckd71056e7pm938jgppxj.png" alt="Placeholder image" class="benefit-icons"></div>
		   <div class="container-fluid DesktopSales"><div><p4-left>ネイティブスピーカーから<br>
	       本物の英語が学べます！</p4-left></div></div>
		   </div>
	    
		
		
		
	    <div class="col-lg-3 padding-Top-Bottom-10">
	      <div class="container-fluid MiniContainer Auto-Margin justify-content-center"><img src="https://pup.box.com/shared/static/erfsbz04no5wvdn5p6vi4s2ncn50l13p.png" alt="Placeholder image" class="benefit-icons"></div>
			<div class="container-fluid DesktopSales">
				<div><p4-left>バイリンガル講師も在籍<br> ※どうしても困った時には<br>
			  日本語でSOSも可能なので、<br>初心者のお子様も安心</p4-left></div></div>
		  <br></div>
           
		
		
		
      <div class="col-lg-3 padding-Top-Bottom-10 " > 
			<div class="container-fluid MiniContainer justify-content-center text"><img src="https://pup.box.com/shared/static/63rq12nvnzkoe915y2nbfqx6ebz1snkf.png" alt="Placeholder image" class="benefit-icons"></div>
		  <div class="container-fluid DesktopSales"><div><p4-left>長時間一緒に過ごすことで、<br> 先生と強い絆をつくることができる</p4-left></div></div>
	  </div>
		
	    <div class="col-lg-3 padding-Top-Bottom-10 ">
		  <div class="container-fluid MiniContainer justify-content-center"><img src="https://pup.box.com/shared/static/16hkxpfxveeiyzqdu8rziif2x7602wjk.png" alt="Placeholder image" class="benefit-icons"></div>
			<div class="container-fluid DesktopSales"><div><p4-left>日替わりで<br>様々なアクティビティを実施</p4-left></div></div>
		  </div>
		</div>
	

  <div id = "Content3" class="container-fluid"></div>
    <h2>人気アクティビティ</h2>
    <div class="container-fluid accordion-padding">
 <div class="Automatic-Horizontal-slider">
	<div class="Automatic-Horizontal-slide-track">
		
	 
		<!-- 9 Slides -->
		
		<div class="Automatic-Horizontal-slide">
			<img class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/gykahp1be3eq5y2zd1by47bfshuwgf9u.jpg" alt="Slider 1">
		</div>
		
	 		<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/e2knp2m941pgu334bgbq3obe5qci4q2l.jpg" alt="Slider 2">
		</div>
		
	 	<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/m3wcr5p5j08cmgrowahzrgp7z5j64oqk.jpg" alt="Slider 3">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/tbfoos6qqhvtz1157cr9vlfl9cc8o5km.jpg" alt="Slider 4">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/p2p5khr4tb1d6cp80e2e3ztrzrur0g4b.jpg" alt="Slider 5">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/xgpax436tv878l9c4jrlm4nfzvfaxox1.jpg" alt="Slider 6">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/znswx2zq4jabykd6r3emth5khfbvvfdw.jpg" alt="Slider 7">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/87skfixzud2tkdvohbs0atvgkv5042lh.jpg" alt="Slider 8">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/tjg19rxu272cu0ob25bzqvb6wyrmlyii.jpg" alt="Slider 9">
		</div>
		
		<!-- 9 Slides Repeated -->
		
		<div class="Automatic-Horizontal-slide">
			<img class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/gykahp1be3eq5y2zd1by47bfshuwgf9u.jpg" alt="Slider 1">
		</div>
		
	 		<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/e2knp2m941pgu334bgbq3obe5qci4q2l.jpg" alt="Slider 2">
		</div>
		
	 	<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/m3wcr5p5j08cmgrowahzrgp7z5j64oqk.jpg" alt="Slider 3">
		</div>
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/tbfoos6qqhvtz1157cr9vlfl9cc8o5km.jpg" alt="Slider 4">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/p2p5khr4tb1d6cp80e2e3ztrzrur0g4b.jpg" alt="Slider 5">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/xgpax436tv878l9c4jrlm4nfzvfaxox1.jpg" alt="Slider 6">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/znswx2zq4jabykd6r3emth5khfbvvfdw.jpg" alt="Slider 7">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/87skfixzud2tkdvohbs0atvgkv5042lh.jpg" alt="Slider 8">
		</div>
		
			<div class="Automatic-Horizontal-slide">
			<img  class="Automatic-Horizontal-SlideItem" src="https://pup.box.com/shared/static/c5vk04q1wmmv9vdmxvsn6j3t7s1hg39s.jpg" alt="Slider 9">
		</div>	
		
    </div> 
</div>
</div>
	  


<div class="padding-top-10" id="main">
  <div class="container">
<div class="accordion" id="Info">
                    <div class="card">
                        <div class="card-header" id="Infohead1">
                            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#Info1"
                            aria-expanded="true" aria-controls="Info1">カレンダー</a>
                        </div>

                        <div id="Info1" class="collapse show" aria-labelledby="Infohead1" data-parent="#Info">
                            <div class="card-body">
                                <div class="card-body align-content-center"> <img src="https://pup.box.com/shared/static/vwosolnth2p1gsjcz2ww3kfg4ng5slhs.jpg" class="img-fluid AccordionCalendarContainer" alt="Placeholder image">
								<div class="align-content-center"><a href="https://pup.box.com/shared/static/m54chhzmq9i0ixkstmr6j4cy3t7r32v2.pdf" ><p1>カレンダーをダウンロード</p1></a></div>
								</div>
								
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="Infohead2">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#Info2"
                            aria-expanded="true" aria-controls="Info2">一日のスケジュール</a>
                        </div>

                        <div id="Info2" class="collapse" aria-labelledby="Infohead2" data-parent="#Info">
                                     <div>
			    <div class="card-body">
                <div><div class="container-fluid AccordionText"><span style="font-family: '新丸ゴ DB"><span style="color: #f48000">10:00</span> Kids UPにようこそ！</span><br>まずは自己紹介をして先生とお友達と仲良くなろう！ そのあとはチームに分かれていろんなゲームをするよ♪ </div></div></div>
				<div class="card-body AccordionContainer2">
                <div>
                  <div class="container-fluid AccordionText"><span style="font-family: '新丸ゴ DB"><span style="color: #f48000">10:30</span> English Class</span><br>
				    <div class="row padd">
					    <div class="col-md-6 AccordionText padding-top-10">
							<span style="font-family: '新丸ゴ DB"><span style="color: #f48000">小学生</span> </span><br>
							ワークブックを使ってフォニックス
							や単語を学ぼう！習った単語でお友達や先生とお話ししよう♪初めて
							でも大丈夫！ハイレベルな内容
							もあるよ♪</div>
					    <div class="col-md-6 AccordionText padding-top-10">
							<span style="font-family: '新丸ゴ DB"><span style="color: #f48000">幼児クラス</span> </span><br>
							一緒に英語で遊ぼう！みんなで
							お歌を歌ったり、お天気や動物などを学ぶよ！ワークブックでライティングの練習もしてみよう♫</div>
						
					</div>
			      </div>
                  </div></div></div>
			  <div class="card-body">
                <div>
                  <div class="container-fluid AccordionText"><span style="font-family: '新丸ゴ DB"><span style="color: #f48000">11:00</span> 日替りアクティビティ</span><br>
                  毎日違うアクティビティをするよ！ Kids UPのアクティビティ をおもいっきり楽しもう！<br> <span style="font-size: 0.8rem">※アクティビティの日程はスクールごとに異なります。</span></div></div></div>
				<div class="card-body AccordionContainer2">
                <div><div class="container-fluid AccordionText"><span style="font-family: '新丸ゴ DB"><span style="color: #f48000">12:00</span> ランチ</span><br>
				たくさん学んだあとは、<br>
				先生やお友達とお弁当を一緒に食べよう！ </div></div></div>
			  <div class="card-body">
                <div><div class="container-fluid AccordionText"><span style="font-family: '新丸ゴ DB"><span style="color: #f48000">13:00</span> スクラップブック</span><br>
				楽しかった1日の思い出をアルバムにするよ！<br>
				自分だけの特別なスクラップブックを作ろう♪ </div></div></div>
				<div class="card-body AccordionContainer2">
                <div><div class="container-fluid AccordionText"><span style="font-family: '新丸ゴ DB"><span style="color: #f48000">13:30</span> レッスンの報告</span><br>
					午後は通常コースも行っております！ </div></div>
                        </div>
                    </div>
                  </div>
                    <div class="card">
                        <div class="card-header" id="Infohead3">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#Info3"
                            aria-expanded="true" aria-controls="Info3">料金表</a>
                        </div>

                        <div id="Info3" class="collapse" aria-labelledby="Infohead3" data-parent="#Info">
                                     <div>
			    <div class="card-body align-content-center"> <img src="https://pup.box.com/shared/static/sz2ixfrmj1uek41gczph6lu96jkia55g.svg" class="img-fluid AccordionCalendarContainer" width="100%" alt="Placeholder image">
					<div class="align-content-center"><a href="https://pup.box.com/shared/static/3s7h0lfmi3rcgbov2wizsifqsirnq507.pdf" ><p1>シーズナルスクール料金表をダウンロード</p1></a></div>
								
                </div>
                    </div>
                  </div>
                       
             
    </div>     

  </div>
</div>
</div>	

  <div id = "Content4" class="container-fluid" style="padding-top: 25px;"></div>
    <h2>ギャラリー</h2> 

      <div id="carouselExampleIndicators2" class="carousel slide carousel-fade padding-top-25" data-ride="carousel" style="background-color: rgba(0,0,0,0.0)">
   
        <div class="carousel-inner Auto-Margin d-block mx-auto" role="listbox">
			
			
          <div class="carousel-item active justify-content-center"> <img class="d-block mx-auto img-fluid d-flex justify-content-center" src="https://pup.box.com/shared/static/i5ycspqwbpereoyz9u4xcsadytgzg020.jpg" alt="First slide">
		  </div>
          
		  <div class="carousel-item justify-content-center"> <img class="d-block mx-auto img-fluid d-flex center-block Auto-Margin" src="https://pup.box.com/shared/static/acrum7ydeoaubbyijka2i9wcli0leqws.jpg" alt="Second slide">
		  </div>
			
          <div class="carousel-item justify-content-center"> <img class="d-block mx-auto img-fluid d-flex center-block Auto-Margin" src="https://pup.box.com/shared/static/cuwpwrq7isra8rj5wgto96d2u4ocqz0l.jpg" alt="Third slide">
          </div>
			
		  <div class="carousel-item justify-content-center"> <img class="d-block mx-auto img-fluid d-flex justify-content-center Auto-Margin" src="https://pup.box.com/shared/static/0x4j0f1twvaivierg2axtqmw6d94ajon.jpg" alt="Fourth slide">
          </div>
			
		  <div class="carousel-item justify-content-center"> <img class="d-block mx-auto img-fluid d-flex justify-content-center Auto-Margin" src="https://pup.box.com/shared/static/sktji1sydbb0dcs010ye6sz395h46vr7.jpg" alt="Fifth slide" >
          </div>
			
		  <div class="carousel-item justify-content-center"> <img class="d-block mx-auto img-fluid d-flex justify-content-center Auto-Margin" src="https://pup.box.com/shared/static/7zz534gumfmeeeuqvcm87l1abvl6xum1.jpg" alt="Sixth slide" >
          </div>			

		  <div class="carousel-item justify-content-center"> <img class="d-block mx-auto img-fluid d-flex justify-content-center Auto-Margin" src="https://pup.box.com/shared/static/7kz0o88batxm3pb7tnq89z90kbw1ai3g.jpg" alt="Seventh slide" >
          </div>		
			
		  <div class="carousel-item justify-content-center"> <img class="d-block mx-auto img-fluid d-flex justify-content-center Auto-Margin" src="https://pup.box.com/shared/static/s9ftktk7hc41yyrjbgtyp1n0jvmgbe5n.jpg" alt="Eighth slide">
          </div>	
		
		  <div class="carousel-item justify-content-center"> <img class="d-block mx-auto img-fluid d-flex justify-content-center Auto-Margin" src="https://pup.box.com/shared/static/1k7o8h9vw6pgsf4cf8xbm6zfk1q7g5tk.jpg" alt="Ninth slide">
          </div>	

		  <div class="carousel-item justify-content-center"> <img class="d-block mx-auto img-fluid d-flex justify-content-center Auto-Margin width=100%" src="https://pup.box.com/shared/static/iq74cew3fyi981tvcuuu8c1kghkw1mz6.jpg" alt="Tenth slide">
          </div>	
			
			
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev"> <span class="carousel-control-prev-icon CarouselControl position-fixed-10%" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next " href="#carouselExampleIndicators2" role="button" data-slide="next"> <span class="carousel-control-next-icon CarouselControl position-fixed-90%" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>

 
  <div class="container-fluid padding-top-bottom-75 footer-banner">
	<div class="container text-center">
	  <h2-white>サマースクール参加までの流れ</h2-white>
	  </div>
	  </div>
<div class="container-fluid InfoBoxPre padding-top-25">

		  <div>
        	<p3>❶ カレンダー及びスケジュールのチェック</p3><br>
         	<p1-left>アクティビティカレンダー、及び一日のスケジュールの流れをご覧いただき、<br>参加希望のプログラムをお選びください。<br><br></p1-left>
			
			<p3>❷ WEBフォームよりお申込み</p3><br>		
  			<p1-left>WEBフォームよりサマースクールのお申込みが可能です。参加希望するスクールを選択し、<br>アクティビティを選択の上、お申込みを確定してください。<br><br></p1-left>
		  
			<p3>❸ お申込案内のご確認手続き</p3><br>
		 	<p1-left>WEBフォーム送信後、スクールからメールにてお申込内容の確認をさせていただきます。<br>お申込内容に相違があった場合には、お気軽にお申し出ください。<br><br></p1-left>
		  
		    <p3>❹ サマースクール開始</p3><br>
		    <p1-left>フレンドリーな先生たちがお子様の参加をお待ちしています！<br>
		     ※各アクティビティ満員になりましたら受付を締め切らせていただきます。<br><br></p1-left>
	
			</div>  
</div>  	
   <div class="container-fluid InfoBox padding-top-25">  
    <div class="row justify-content-center accordion-padding">
	
    <div class="col-lg-6 padding-Top-Bottom-20"> <a class="Btn-Type3" href="https://docs.google.com/forms/d/e/1FAIpQLSdow5U7ysmGyokH8kq3Jm5lRDts-2YgFMYzFqmne7AN1XI7-w/viewform" role="button">参加申込み</a> </div>
    <div class="col-lg-6 padding-Top-Bottom-20">  <a class="Btn-Type3" href="https://kids-up.jp/inquiry" role="button">お問い合わせ</a> </div></div>

	  <div class="container-fluid">
	  <div class="justify-content-center AutoMargin PhoneBox">
		  		<div class="padding-Top-Bottom-10"><h2>CONTACT</h2></div>
		  		<p4>お問い合わせ・資料請求はこちら</p4><br><tel>
                <a href="tel:0120378056" style="color: #000"><i class="fas fa-phone-square"></i> 0120-378-056</a></tel><br>
				<div class="padding-Top-Bottom-10"><p4 class=>受付時間　10:00 - 20:00 <br>
			    （土日・祝日も受付中）
					<br></p4></div>
	  </div><br><br>
	  </div>
  </div>
  <div class="container-fluid FooterBox">
	  <div class="row padding-50 ">
	 
	    <div class="col-lg-4" style= "align-content-center"><a href="https://kids-up.jp/"> <img src="https://pup.box.com/shared/static/bkmugi4mq1gicg5di12y80d9kn7612xa.png" class="padding-Top-Bottom-10 img-fluid d-flex Auto-Margin sns-buttons" alt="Website"></a></div>
	    
		<div class="col-lg-4" style="align-content-center"><a href="https://www.youtube.com/c/Kids-upJp"> <img src="https://pup.box.com/shared/static/uda87ynum362mj9cdbxz8nl3t6q8nss5.png" class="padding-Top-Bottom-10 img-fluid d-flex Auto-Margin" alt="YouTube"></a></div>
	    
		  <div class="col-lg-4" style="align-content-center"><a href="https://www.instagram.com/kidsup.jp/"> <img src="https://pup.box.com/shared/static/sk36iq0dme4mpiv8a6ns9o52lzavhx5p.png" class="padding-Top-Bottom-10 img-fluid d-flex Auto-Margin"  alt="Instagram"></a></div>

    </div>
  </div>


</body>

</html>
