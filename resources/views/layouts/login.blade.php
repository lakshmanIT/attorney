<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Attorney') }}</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->
	<!--   Core JS Files   -->
	<script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>


    <!-- Styles -->
    <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
	
</head>
<body class="wrapper wrapper-full-page">
    <div id="app">
        <!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
		  <div class="container">
			<div class="navbar-wrapper"> <a class="navbar-brand" href="#pablo">Attorney</a> </div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation"> <span class="sr-only">Toggle navigation</span> <span class="navbar-toggler-icon icon-bar"></span> <span class="navbar-toggler-icon icon-bar"></span> <span class="navbar-toggler-icon icon-bar"></span> </button>			
		  </div>
		</nav>

        <main class="main-content">
            @yield('content')
        </main>
    </div>
	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<!-- Chartist JS -->
	<script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
	<!--  Notifications Plugin    -->
	<script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="{{ asset('assets/js/material-dashboard.js?v=2.1.0') }}" type="text/javascript"></script>
	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ asset('assets/demo/demo.js') }}"></script>
	<script src="{{ asset('js/login.js') }}"></script>
	
</body>
</html>
