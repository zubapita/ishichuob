<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<!-- BASICS -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>		
		<title>{block name="title"}{/block}</title>
		<meta property="fb:app_id" content="1628336467439967" />
		<meta property="og:type"   content="article" />
		<meta property="og:url"    content="http://ishichu-obog.com/" />
		<meta property="og:title"  content="そうだ 石中へ行こう！ | 大田区立石川台中学校同窓会" />
		<meta property="og:image"  content="http://ishichu-obog.com/ishichu/img/ogp/index.jpg" />
		<meta property="og:description"  content="大田区立石川台中学校同窓会による楽しい地域イベントを提供します。" />
		<meta property="og:site_name"  content="そうだ 石中へ行こう！ | 大田区立石川台中学校同窓会" />
		<meta property="article:publisher" content="https://www.facebook.com/millkeyweb" />
        <meta name="description" content="大田区立石川台中学校同窓会による楽しい地域イベントを提供します。">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/Green/css/isotope.css" media="screen" />
		<link rel="stylesheet" href="/Green/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/Green/css/bootstrap.css">
		<link rel="stylesheet" href="/Green/css/bootstrap-theme.css">
		<link href="/rs010/css/responsive-slider.css" rel="stylesheet">
		<link rel="stylesheet" href="/Green/css/animate.css">
    	<link rel="stylesheet" href="/Green/css/style.css">
		<link rel="stylesheet" href="/Green/css/font-awesome.min.css">
		<!-- skin -->
		<link rel="stylesheet" href="/Green/skin/default.css">
    </head>

<body>
<div id="wrapper" class="container">
{include file='cmn/includes/header.inc'}

{block name="body"}{/block}
</div><!-- /#wrapper -->

{include file='cmn/includes/footer.inc'}
	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

	<script src="/Green/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="/Green/js/jquery.js"></script>
	<script src="/rs010/js/jquery.event.move.js"></script>
	<script src="/Green/js/jquery.easing.1.3.js"></script>
	<script src="/Green/js/bootstrap.min.js"></script>
	<script src="/Green/js/jquery.isotope.min.js"></script>
	<script src="/Green/js/jquery.nicescroll.min.js"></script>
	<script src="/Green/js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="/Green/js/skrollr.min.js"></script>
	<script src="/Green/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="/Green/js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="/Green/js/stellar.js"></script>
	<script src="/rs010/js/responsive-slider.min.js"></script>
	<script>
	$( document ).ready( function() {
		$('.responsive-slider').responsiveSlider({
			autoplay: true,
			interval: 12000,
			transitionTime: 1000
		});
	});
	</script>
	<script src="/Green/js/jquery.appear.js"></script>
	<script src="/Green/js/validate.js"></script>
	<script src="/Green/js/grid.js"></script>
	  <script src="/Green/js/main.js"></script>
		<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
		<script type='text/javascript'>
		/* ページ読み込み時に地図を初期化 */
		function initialize() {
		  /* 緯度・経度：大田区立石川台中学校 */
		  var latlng=new google.maps.LatLng(35.5991504, 139.6814275);
		  /* 地図のオプション設定 */
		  var myOptions = {
		    zoom: 17, /*初期のズーム レベル */
		    center: latlng, /* 地図の中心地点 */
		    mapTypeId: google.maps.MapTypeId.ROADMAP /* 地図タイプ */
		  };
		  /* 地図オブジェクト生成 */
		  var map=new google.maps.Map(document.getElementById('map'), myOptions);
		}
		$(document).ready(function()
		{
			initialize();
		});
		</script>
		 <script src="/Green/js/wow.min.js"></script>
	 <script>
		wow = new WOW({}).init();
	</script>
	
	{block name="footer"}{/block}
</body>
</html>