@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Editar Barbero</h1>
        <hr>

        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del barbero a editar.') }}</div>
                <div class="card-body">
                <div class="form-group">
                        <label for="Documento">Documento</label>
                        <input type="text" placeholder="Documento" class="form-control" name="documento">
                    </div>

                    <div class="form-group">
                        <label for="Nombres">Nombres</label>
                        <input type="text" placeholder="Nombres" class="form-control" name="nombres">
                    </div>

                    <div class="form-group">
                        <label for="Apellidos">Apellidos</label>
                        <input type="text" placeholder="Apellidos" class="form-control" name="apellidos">
                    </div>

                    <div class="form-group">
                        <label for="Telefono">Telefono</label>
                        <input type="text" placeholder="Telefono" class="form-control" name="telefono">
                    </div>

                    <div class="form-group">
                        <label for="E-mail">E-mail</label>
                        <input type="email" placeholder="Dirección E-mail" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="Fecha De Nacimiento">Fecha De Nacimiento</label>
                        <input type="date" placeholder="Fecha De Nacimiento" class="form-control" name="fechaNac">
                    </div>

                    <div class="form-group">
                        <label for="Calificiacion">Calificación</label>
                        <input type="text" placeholder="Calificiación" class="form-control" name="calificacion">
                    </div>

                    <div class="form-group">
                        <label for="Nombre De Usuario">Nombre De Usuario</label>
                        <input type="text" placeholder="Nombre De Usuario" class="form-control" name="nameUser">
                    </div>

                    <div class="form-group">
                        <label for="Contraseña">Contraseña</label>
                        <input type="password" placeholder="Contraseña" class="form-control" name="pass">
                    </div>

                    <div class="form-group">
                        <label for="Barberia">Barberia</label>
                        <input type="select" placeholder="Barberia" class="form-control" name="barberia">
                    </div>

                    <div class="form-group">
                        <a href="{{ route('barberos.index') }}" class="btn btn-primary">Actualizar Barbero</a>
                        <a href="{{ route('barberos.index') }}" class="btn btn-secondary">Volver</a>
                    </div>
            </div>
    </div>

@endsection