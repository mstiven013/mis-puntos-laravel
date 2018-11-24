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
	@yield('styles')

</head>
<body>

	<header class="header">
		<div class="logo">
			Aquí va el logo
		</div>

		<nav class="nav">
			<ul class="hmenu">
				<li>
					<a class="waves-effect waves-light" href="#">Inicio</a>
				</li>
				<li>
					<a class="waves-effect waves-light" href="#">Aliados</a>
				</li>
				<li>
					<a class="waves-effect waves-light" href="#">Viajes</a>
				</li>
				<li>
					<a class="waves-effect waves-light" href="#">Bonos</a>
				</li>
			</ul>
		</nav>

		<nav class="auth-menu">
			<ul>
				<li><a class="waves-effect waves-light modal-trigger" href="#authmodal">Iniciar sesión / Registrarse</a></li>
			</ul>
		</nav>
	</header>

	<!-- Modal Structure -->
	<div id="authmodal" class="modal" action="/registro" method="POST">
		<div class="modal-content">
			<a href="#!" class="modal-close">
				<span class="icon-close"></span>
			</a>

			@include('forms.auth-form')

		</div>
	</div>

	<div class="content">
		@yield('content')
	</div>
	
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('libs/materialize/js/materialize.min.js') }}"></script>
	<script src="{{ asset('js/common.js') }}"></script>
	<script src="{{ asset('js/auth-form.js') }}"></script>
	@yield('scripts')
	
</body>
</html>