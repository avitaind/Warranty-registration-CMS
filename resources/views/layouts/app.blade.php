<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="NOVITA GLOBAL WARRANTY REGISTRATION">

		<title>@yield('title')</title>

		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

		<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

		<!-- novita CSS -->
		<link id="novita-css" rel="stylesheet" href="{{ asset('assets/css/novita.css ') }}" />

		<!-- FAVICON -->
		<link href="{{ asset('assets/img/NOVITA-logo.ico  ') }}" rel="shortcut icon" />

        @yield('css')
	</head>

	<body class="sign-inup" id="body">

        <!-- CONTENT WRAPPER -->
		@yield('content')
        <!-- End CONTENT WRAPPER -->

		<!-- Javascript -->
		{{-- <script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js ') }}"></script> --}}
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js ') }}"></script>
		{{-- <script src="{{ asset('assets/plugins/jquery-zoom/jquery.zoom.min.js ') }}"></script> --}}
		{{-- <script src="{{ asset('assets/plugins/slick/slick.min.js ') }}"></script> --}}

		<!-- novita Custom -->
		{{-- <script src="{{ asset('assets/js/novita.js ') }}"></script> --}}
        @yield('js')

	</body>
</html>
