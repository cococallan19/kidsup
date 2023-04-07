<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>写真一覧 | 学童保育型英会話スクール・幼児クラス「KidsUP」</title>
        <meta name="description" content="写真一覧を表示いたします。"/>
        <meta name="keywords" content="KidsUP,キッズアップ,写真一覧"/>
        <meta name="author" content="Codrops"/>
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="stylesheet" type="text/css" href="/photos/css/style.css"/>
		<script src="/photos/js/modernizr.custom.70736.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="/photos/css/noJS.css"/></noscript>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">

			<!-- Codrops top bar -->
            <div class="codrops-top clearfix">
                <a href="/">
                    <strong>&laquo; KidsUP: </strong>サイトに戻る
                </a>
                <span class="right">
                	<a href="/photo/view/logout">ログアウトはこちら</a>
                    <a href="/photo/view/logout">
                        <strong>LOGOUT</strong>
                    </a>
                </span>
            </div><!--/ Codrops top bar -->

			<div class="main">
				<header class="clearfix">

					<h1><img src="/images/logo.png" alt="KisUP（キッズアップ）ロゴ"><span>2016年3月20日（日）の撮影写真です。</span></h1>

					<div class="support-note">
						<span class="note-ie">Sorry, only modern browsers.</span>
					</div>

				</header>

				<div class="gamma-container gamma-loading" id="gamma-container">

					<ul class="gamma-gallery">
            @for($i=1; $i < $num; $i++)
            <li>
							<div data-alt="img0{{$i}}" data-description="<h3>{{$i}}</h3>" data-max-width="1920" data-max-height="1350">
								<div data-src="//s3-ap-northeast-1.amazonaws.com/photo.kids-up.jp/xxxlarge/{{$i}}.jpg" data-min-width="1300"></div>
								<div data-src="//s3-ap-northeast-1.amazonaws.com/photo.kids-up.jp/xxlarge/{{$i}}.jpg" data-min-width="1000"></div>
								<div data-src="//s3-ap-northeast-1.amazonaws.com/photo.kids-up.jp/xlarge/{{$i}}.jpg" data-min-width="700"></div>
								<div data-src="//s3-ap-northeast-1.amazonaws.com/photo.kids-up.jp/large/{{$i}}.jpg" data-min-width="300"></div>
								<div data-src="//s3-ap-northeast-1.amazonaws.com/photo.kids-up.jp/medium/{{$i}}.jpg" data-min-width="200"></div>
								<div data-src="//s3-ap-northeast-1.amazonaws.com/photo.kids-up.jp/small/{{$i}}.jpg" data-min-width="140"></div>
								<div data-src="//s3-ap-northeast-1.amazonaws.com/photo.kids-up.jp/xsmall/{{$i}}.jpg"></div>
								<noscript>
									<img src="//s3-ap-northeast-1.amazonaws.com/photo.kids-up.jp/xsmall/{{$i}}.jpg" alt="img03"/>
								</noscript>
							</div>
						</li>
            @endfor

					</ul>

					<div class="gamma-overlay"></div>

					<!-- <div id="loadmore" class="loadmore">Example for loading more items...</div> -->

				</div>

			</div><!--/main-->
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="/photos/js/jquery.masonry.min.js"></script>
		<script src="/photos/js/jquery.history.js"></script>
		<script src="/photos/js/js-url.min.js"></script>
		<script src="/photos/js/jquerypp.custom.js"></script>
		<script src="/photos/js/gamma.js"></script>
		<script type="text/javascript">

			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, {
							width : 320,
							columns : 2
						}, {
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):

				var page = 0,
					items = [

          ]

				function fncallback() {

					$( '#loadmore' ).show().on( 'click', function() {

						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {

							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );

				}

			});

		</script>
	</body>
</html>
