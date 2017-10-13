<!DOCTYPE html>
<html>
<head>
<title>МвАиСзТаЕжР</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //for-mobile-apps -->
<link href= {{asset('asset/css/bootstrap.css')}} rel="stylesheet" type="text/css" media="all" />
<link href={{asset('asset/css/style.css')}} rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src={{asset('asset/js/jquery-1.11.1.min.js')}}></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src={{asset('asset/js/move-top.js')}}></script>
		<script type="text/javascript" src={{asset('asset/js/easing.js')}}></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
</head>
<body>
<!-- banner -->

	<div class="container">
		<div class="header">
			<div class="logo">
				<h2>
					<a class="link link--yaku" href={{route('home.page')}}>
						<span><h3>м</h3></span><span><h3>в</h3></span><span>а</span><span><h3>и</h3></span><span>с</span><span><h3>з</h3></span>т<span><h3>а</h3></span><span>е</span><span><h3>ж</h3></span><span><h3>р</h3></span>					
					</a>
				</h2>
			</div>
			<div class="navigation">
				<span class="menu"><img src={{asset('asset/images/menu.png')}} alt=""/></span>
				<ul class="nav1">
					<li><a class="hvr-overline-from-center button2 active" href={{route('home.page')}}>Главная</a></li>
					<li><a class="hvr-overline-from-center button2" href={{route('about.page')}}>Обо мне</a></li>
					<li><a class="hvr-overline-from-center button2" href={{route('portfolio')}}>Портфолио</a></li>
					<li><a class="hvr-overline-from-center button2" href="contact.html">Контакты</a></li>
				</ul>
				
			</div>
	</div>		
			<div class="clearfix"></div>
	</div>
		
  <div class="container">
        @yield('views_portfolio')
		@yield('portfolio')
		@yield('index_page')
		@yield('about_me')
		@yield('home_page_admin')
		@yield('categorys_create')
		@yield('categorys')
		@yield('show_category')
		@yield('show_portfolio')
		@yield('show_category_portfolio')
    </div>
<!-- copy right -->
<div class="copy-right">
	<div class="container">
		<p> &copy; 2016 SpaSol. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
</div>
<!-- //copy right -->
<!-- for bootstrap working -->
	<script src={{asset('asset/js/bootstrap.js')}}""></script>
<!-- //for bootstrap working -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

		
		
		

	