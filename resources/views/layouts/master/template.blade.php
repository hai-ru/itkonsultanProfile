<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>IT Konsultan Software and Solutions | Technology and Businees Applications</title>	

		<meta name="keywords" content="It konsultan, IT Consultant, Technology, Innovation, Applications, Mobile Developer, Software Engineer" />
		<meta name="title" content="@yield('seo_title','IT Konsultan Software and Solutions | Technology and Businees Applications')">
		<meta name="description" content="@yield('seo_description','Pengadaan barang dan jasa instalasi jaringan internet, CCTV serta membangun Infrastruktur IT terbaik dan berkualitas untuk bisnis anda')">
		<meta name="author" content="Muhammad Khairudin">
		<meta property="og:url" content="{{env('APP_URL')}}" />
		<meta property="og:image" content="@yield('og_image',env('APP_URL').'/images/bg-full.jpg')" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
		{{-- <link rel="apple-touch-icon" href="/img/apple-touch-icon.png"> --}}

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/css/theme.css">
		<link rel="stylesheet" href="/css/theme-elements.css">
		<link rel="stylesheet" href="/css/theme-blog.css">
		<link rel="stylesheet" href="/css/theme-shop.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="/css/demos/demo-it-services.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="/css/skins/skin-it-services.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/css/custom.css">

		<!-- Head Libs -->
		<script src="/vendor/modernizr/modernizr.min.js"></script>

		@yield('css')

	</head>
	<body>

		<div class="body m-0">

			@include('layouts.master.navigation')

			<div role="main" class="main">

                @yield('main')

			</div>

			@include('layouts.master.footer')
		</div>

		<!-- Vendor -->
		<script src="/vendor/jquery/jquery.min.js"></script>
		<script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/vendor/lazysizes/lazysizes.min.js"></script>
		<script src="/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/vendor/vide/jquery.vide.min.js"></script>
		<script src="/vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="/js/theme.js"></script>

		<!-- Demo -->
		<script src="/js/demos/demo-it-services.js"></script>

		<!-- Theme Custom -->
		<script src="/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="/js/theme.init.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"></script>
		<script>moment.locale('id')</script>

		@yield('js')

	</body>
</html>
