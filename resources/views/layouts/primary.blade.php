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
	<div id="authmodal" class="modal">
		<div class="modal-content">
			<a href="#!" class="modal-close">
				<span class="icon-close"></span>
			</a>

			<form action="">
				<div class="form-group logo">
					<img src="https://www.webussines.com/wp-content/themes/WeBussines/images/logo.png" alt="">
				</div>

				<div class="form-group instruction">
					<p>Ingresa tu documento</p>
				</div>

				<div class="form-group input-field">
					<select class="center-align" name="document-type" id="document-type">
						<option value="CEDULA_CIUDADANIA" selected>Cédula de ciudadanía</option>
						<option value="CEDULA_EXTRANJERIA">Cédula de extranjería</option>
						<option value="PASAPORTE">Pasaporte</option>
						<option value="NIT">NIT</option>
					</select>
				</div>

				<div class="form-group">
					<input class="center-align" type="text" name="document" id="document" placeholder="Número de documento">
				</div>

				<div class="form-group">
					<input class="waves-effect waves-light button primary" type="button" id="continue" value="Continuar">
				</div>

				<div class="form-group need-help">
					<a href="#">¿Necesitas nuestra ayuda?</a>
				</div>

			</form>

		</div>
	</div>

	@yield('content')
	
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('libs/materialize/js/materialize.min.js') }}"></script>
	<script src="{{ asset('js/common.js') }}"></script>
	@yield('scripts')
	
</body>
</html>