<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	@yield('styles')
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

	<header class="header">
		<div class="logo">
			Aquí va el logo
		</div>

		<nav class="nav">
			<ul class="hmenu">
				<li>
					<a href="#">Inicio</a>
				</li>
				<li>
					<a href="#">Aliados</a>
				</li>
				<li>
					<a href="#">Viajes</a>
				</li>
				<li>
					<a href="#">Bonos</a>
				</li>
			</ul>
		</nav>

		<nav class="auth-menu">
			<ul>
				<li><a href="#">Iniciar sesión / Registrarse</a></li>
				<li><a href="#"></a></li>
			</ul>
		</nav>
	</header>

	@yield('content')
	
</body>
</html>