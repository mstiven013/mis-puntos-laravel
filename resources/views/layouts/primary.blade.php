<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<!--MATERIALIZE STYLES-->
	<link rel="stylesheet" href="{{ asset('libs/materialize/css/materialize.min.css') }}">
	<link rel="stylesheet" href="{{ asset('libs/icomoon/icomoon.css') }}">

	<link rel="stylesheet" href="{{ asset('css/common.css') }}">
	@yield('styles')

</head>
<body>

	@include('layouts.partials.header')

	@include('layouts.partials.modals.auth')

	<main class="main-content">
		@yield('content')
	</main>

	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('libs/materialize/js/materialize.min.js') }}"></script>
	<script src="{{ asset('js/common.js') }}"></script>
	<script src="{{ asset('js/auth-form.js') }}"></script>
	@yield('scripts')

</body>
</html>
