{!! Form::open([ 'method' => 'get', 'action' => 'HomeController@register', 'id' => 'auth-form', 'class' => 'auth-form']) !!}
	<div class="form-group logo">
		<img src="https://www.webussines.com/wp-content/themes/WeBussines/images/logo.png" alt="">
	</div>

	<div id="first-step">
		<div class="form-group instruction">
			<p>Ingresa tu documento</p>
		</div>

		<div class="form-group input-field">
			<select class="center-align required" name="document-type" id="document-type">
				<option value="CEDULA_CIUDADANIA" selected>Cédula de ciudadanía</option>
				<option value="CEDULA_EXTRANJERIA">Cédula de extranjería</option>
				<option value="PASAPORTE">Pasaporte</option>
				<option value="NIT">NIT</option>
			</select>
		</div>

		<div class="form-group">
			<input class="center-align required" type="text" name="document" id="document" placeholder="Número de documento">
		</div>

		<div class="form-group">
			<p class="error" id="first-step-error"></p>
		</div>

		<div class="form-group">
			<!--Next button-->
			<input class="waves-effect waves-light button primary" type="button" id="continue" value="Continuar">
			<!--Loader-->
			<div id="loader" class="preloader-wrapper big">
				<div class="spinner-layer spinner-blue-only">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="register-step">
		<p>Con tu documento <strong id="document-id"></strong>, estás a un paso de pertenecer al programa de puntos que llenará tu vida de nuevas experiencias.</p>

		<!--Submit button-->
		<input class="waves-effect waves-light button primary" type="submit" id="register" value="Comenzar">
	</div>

	<div class="form-group need-help">
		<a href="#">¿Necesitas nuestra ayuda?</a>
	</div>
{!! Form::close() !!}
