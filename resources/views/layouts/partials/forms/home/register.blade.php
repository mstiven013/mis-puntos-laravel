{!! Form::open([
    'method' => 'post',
    'action' => 'HomeController@register',
    'id' => 'register-form',
    'class' => 'register-form'
]) !!}

    <div class="row">
        <div class="input-field col s12 m12 l6">
            {{ Form::text("nombre",
                 old("nombre") ? old("nombre") : (!empty($nombre) ? $nombre : null),
                 [
                    "id" => "nombre",
                    "required" => "required"
                 ])
            }}
            <label for="nombre">Nombres:</label>
        </div>

        <div class="input-field col s12 m12 l6">
            {{ Form::text("apellido",
                 old("apellido") ? old("apellido") : (!empty($apellido) ? $apellido : null),
                 [
                    "id" => "apellido",
                    "required" => "required"
                 ])
            }}
            <label for="apellido">Apellidos:</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 m12 l6">
			<select class="required" name="document-type" id="document-type">
				<option value="CEDULA_CIUDADANIA" @if($tipo_documento == 'CEDULA_CIUDADANIA') selected @endif>Cédula de ciudadanía</option>
				<option value="CEDULA_EXTRANJERIA" @if($tipo_documento == 'CEDULA_EXTRANJERIA') selected @endif>Cédula de extranjería</option>
				<option value="PASAPORTE" @if($tipo_documento == 'PASAPORTE') selected @endif>Pasaporte</option>
				<option value="NIT" @if($tipo_documento == 'NIT') selected @endif>NIT</option>
			</select>
            <label for="documento">Número de documento:</label>
        </div>

        <div class="input-field col s12 m12 l6">
            {{ Form::text("documento",
                 old("documento") ? old("documento") : (!empty($documento) ? $documento : null),
                 [
                    "id" => "documento",
                    "required" => "required"
                 ])
            }}
            <label for="documento">Número de documento:</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 m12 l6">
            {{ Form::text("correo",
                 old("correo") ? old("correo") : (!empty($correo) ? $correo : null),
                 [
                    "id" => "correo",
                    "required" => "required"
                 ])
            }}
            <label for="correo">Correo electrónico:</label>
        </div>

        <div class="input-field col s12 m12 l6">
            {{ Form::text("telefono",
                 old("telefono") ? old("telefono") : (!empty($telefono) ? $telefono : null),
                 [
                    "id" => "telefono",
                    "required" => "required"
                 ])
            }}
            <label for="telefono">Número de celular:</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 m12 l6">
            {{ Form::text("ciudad",
                 old("ciudad") ? old("ciudad") : (!empty($ciudad) ? $ciudad : null),
                 [
                    "id" => "ciudad",
                    "required" => "required"
                 ])
            }}
            <label for="ciudad">Ciudad:</label>
        </div>

        <div class="input-field col s12 m12 l6">
            {{ Form::text("direccion",
                 old("direccion") ? old("direccion") : (!empty($direccion) ? $direccion : null),
                 [
                    "id" => "direccion",
                    "required" => "required"
                 ])
            }}
            <label for="direccion">Dirección:</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 m12 l12">
            <input class="waves-effect waves-light button white" type="submit" id="register" value="Registrarse">
        </div>
    </div>

{!! Form::close() !!}
