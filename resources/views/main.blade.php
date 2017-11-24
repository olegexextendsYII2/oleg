<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>услуги програмиста laravel</title>

	<!-- CSS includes -->
	<link href={{asset('asset/css/bootstrap.min.css')}} rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href={{asset('asset/fonts/font-awesome/css/font-awesome.min.css')}} rel="stylesheet">
    <link href={{asset('asset/css/theme.css')}} rel="stylesheet">
        

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" title="Investment Business Bootstrap Theme">
               <h3> laraMen</h3>
            </a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="{{route('home.page')}}" class="smooth-scroll">главная</a></li>
				<li><a href="{{route('about.page')}}">услуги</a></li>
				{{-- <li><a href="services.html">услуги</a></li> --}}
				<li><a href="{{route('portfolio')}}">мои работы</a></li>
				<li><a href="{{route('contact')}}">контакты</a></li>

				<li><a href="{{route('home.page.admin')}}"> <button class="btn btn-danger">Админка</button></a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<!-- Carousel -->	
<div id="theme-carousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#theme-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#theme-carousel" data-slide-to="1"></li>
		<li data-target="#theme-carousel" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src={{asset('asset/images/carousel1.jpg')}} alt="carousel1" style="width:100%" />
			<div class="carousel-caption">
				<h1 class="text-warning">добросовестно</h1>
				<h2></h2>
			</div>
		</div>
		<div class="item">
			<img src={{asset('asset/images/carousel2.jpg')}} alt="carousel2" style="width:100%" />
			<div class="carousel-caption">
				<h1 class="text-warning">честно</h1>
				<h2></h2>
			</div>
		</div>
		<div class="item">
			<img src={{asset('asset/images/carousel3.jpg')}} style="width:100%">
			<div class="carousel-caption">
				<h1 class="text-warning">не дорого</h1>
				<h2></h2>
			</div>
		</div>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#theme-carousel" role="button" data-slide="prev">
        <div class="carousel-control-arrow">&#8249;</div>
	</a>
	<a class="right carousel-control" href="#theme-carousel" role="button" data-slide="next">
        <div class="carousel-control-arrow">&#8250;</div>
	</a>
</div>
<div class="container">
        
		
		
		@yield('content')
		
		
		
    </div>


<footer id="subfooter" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>
                    <a class="fa fa-twitter footer-socialicon" target="_blank" href="https://twitter.com/"></a>
                    <a class="fa fa-facebook footer-socialicon" target="_blank" href="https://www.facebook.com/"></a>
                    <a class="fa fa-google-plus footer-socialicon" target="_blank" href="https://plus.google.com/"></a>
                    <a class="fa fa-linkedin footer-socialicon" target="_blank" href="https://plus.google.com/"></a>
                </p>
            </div>
			<div class="col-md-8">
                <p style="font-size:18px;"><span class="fa fa-envelope-o text-color:#fff"></span> NEWSLETTER</p>
                <p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter your email..." />
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </span>
                    </div>
                </p>
            </div>
        </div>
    </div>
</footer>

<footer id="footer" class="clearfix">
    <div class="container">
        <div class="row">
			<div class="col-md-3">
				<h4 class="text-warning"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; Contact Us</h4>
				<ul>
					<li>54, North Road, PA 45086, USA</li>
					<li>+1 888 455 6677</li>
					<li><a href="mailto:mail@example.com">mail@example.com</a></li>
				</ul> 
			</div>
			<div class="col-md-3">
				<h4 class="text-warning"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp; Archive</h4>
				<p>
				<ul>
					<li>May, 2015</li>
					<li>April, 2015</li>
					<li>March, 2015</li>
					<li>February, 2016</li>
					<li>January, 2016</li>
				</ul> 	
				</p>
			</div>
			<div class="col-md-3">
				<h4 class="text-warning"><i class="fa fa-info" aria-hidden="true"></i>&nbsp; License</h4>
				<p>
				<ul>
					<li>Online verification</li>
					<li>Renewal License</li>
					<li>Report illegal</li>
					<li>More information</li>
					<li>FAQs</li>
				</ul> 	
				</p>
			</div>
            <div class="col-md-3">
                <p style="padding-top: 40px;">Created by <a href="https://www.shieldui.com" title="Shield UI">Shield UI</a> and hosted <br /> by <a href="https://www.prepbootstrap.com" title="PrepBootstrap">PrepBootstrap</a></p>
            </div>
        </div>
    </div>
</footer>

<script src={{asset('asset/js/jquery.min.js')}}></script>
<script src={{asset('asset/bootstrap/js/bootstrap.min.js')}}></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src={{asset('asset/js/theme.js')}}></script>

<script type="text/javascript">
    jQuery(function($) {

    });
</script>

</body>
</html>



		
  
		
		
		

	