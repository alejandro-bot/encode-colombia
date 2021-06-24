<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!--Bootstrap-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-theme.min.css')}}">
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="{{asset('assets/vendors/owl.carousel/owl.carousel.css')}}">
    <!--Magnific Popup-->
    <link rel="stylesheet" href="{{asset('assets/vendors/magnific-popup/magnific-popup.css')}}">
    <!-- RS5.0 Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/revolution/css/settings.css')}}">

	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/revolution/css/navigation.css')}}">

    <!--Theme Styles-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">

    <!--[if lt IE 9]>

        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<!--Header-->
  	<header class="top-bar row">
  		<div class="container">
  			<div class="welcome-message">Welcome to Digital Agency Theme</div>
  			<ul class="nav top-nav">
  				<li class="email"><a href="mailto:info@yoursite.com"><i class="fa fa-envelope-o"></i>info@yoursite.com</a></li>
  				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
  				<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
  				<li class="tel"><a href="#"><i class="fa fa-phone"></i>1 (234) 567-8901</a></li>
  			</ul>
  		</div>
  	</header>

  	<!--Navigation-->
  	<nav class="navbar navbar-default navbar-static-top">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			 	</button>
			 	<a href="index.html" class="navbar-brand"><img src="images/logo1.png" alt=""></a>
  			</div>
			<div class="collapse navbar-collapse" id="main_nav">
				<a href="#" class="btn btn-outline blue pull-right hidden-xs hidden-sm">free analysis</a>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown active">
						<a href="{{ url('/') }}">Inicio</a>
					</li>
					<li>
                        <a href="{{ url('nosotros') }}">Nosotros</a>
                    </li>
                    <li class="dropdown">
						<a href="{{ url('servicios') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('servicios') }}">Servicios</a></li>
							<li><a href="single-service.html">Desarrollo web</a></li>
							<li><a href="single-service3.html">Desarrollo movil</a></li>
							<li><a href="single-service2.html">Marketing Digital</a></li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="{{ url('portafolio') }}">Portafolio</a>
					</li>
					<li>
                        <a href="{{ url('contacto') }}">Contacto</a>
                    </li>
				</ul>
			</div>
  		</div>
  	</nav>

  	@yield('content')

  	<!--Footer-->
  	<footer class="row site-footer">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-7 col-md-push-5 half-side">
  					<div class="footer-contact row footer-widget right-box">
  						<h3 class="footer-title">Contact Us</h3>
  						<ul class="nav">
  							<li class="tel"><a href="#"><i class="fa fa-phone"></i>0 (877) 123-4567</a></li>
  							<li class="email"><a href="mailto:info@yoursite.com"><i class="fa fa-envelope-o"></i>info@yoursite.com</a></li>
  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
  							<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
  						</ul>
  					</div>
  					<div class="footer-newsletter row footer-widget right-box">
  						<h3 class="footer-title">newsletter sign up</h3>
  						<form class="form-inline newsletter-form">
							<input type="text" class="form-control" placeholder="Name">
							<input type="email" class="form-control" placeholder="Email">
							<button type="submit" class="btn btn-primary">submit</button>
						</form>
  					</div>
  				</div>
  				<div class="col-md-5 col-md-pull-7 half-side">
  					<div class="footer-about left-box footer-widget row">
  						<h3 class="footer-title">About Us</h3>
  						<p>Lorem ipsum dolor sit amet, consectetur  some dymmy adipiscing elit. Nam turpis quam, sodales in text she ante sagittis, varius efficitur mauris. Nam turpis quam, sodales in text should be able. to...</p>
  					</div>
  					<div class="copyright-row left-box footer-widget row">
  						©Copyright 2016 Digital Agency  Theme. All Rights Reserved. Designed by <a href="http://themedesigner.in/">Theme Designer</a>
  					</div>
  				</div>
  			</div>
  		</div>
  	</footer>

    <script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!--Magnific Popup-->
    <script src="{{asset('assets/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!--Owl Carousel-->
    <script src="{{asset('assets/vendors/owl.carousel/owl.carousel.min.js')}}"></script>
    <!--CounterUp-->
    <script src="{{asset('assets/vendors/couterup/jquery.counterup.min.js')}}"></script>
    <!--WayPoints-->
    <script src="{{asset('assets/vendors/waypoint/waypoints.min.js')}}"></script>
    <!-- RS5.0 Core JS Files -->
    <script src="{{asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js?rev=5.0')}}"></script>
    <script src="{{asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')}}"></script>
    <!--RS5.0 Extensions-->
    <script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
	<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('assetsvendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assetsvendors/isotope/isotope.min.js')}}"></script>
    <!--Theme Script-->
    <script src="{{asset('assets/js/theme.js')}}"></script>
</body>
</html>
