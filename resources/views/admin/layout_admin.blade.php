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
               
               <h3>Админка</h3>
            </a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="{{route('home.page')}}" class="smooth-scroll">главная</a></li>
				<li><a href="{{route('about.page')}}">услуги</a></li>
				{{-- <li><a href="services.html">услуги</a></li> --}}
				<li><a href="{{route('portfolio')}}">мои работы</a></li>
				<li><a href="contact.html">контакты</a></li>
				<li><a href="{{route('portfolio.index')}}"> <button class="btn btn-danger">Работать с Портфолио</button></a></li>
				<li><a href="{{route('category.index')}}"> <button class="btn btn-danger">Работать с Категории</button></a></li>

			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
		@yield('content')		
	
		

</body>
</html>