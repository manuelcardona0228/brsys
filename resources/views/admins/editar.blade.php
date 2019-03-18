@extends('PruebaLayaud.app')

@section('content')

    <div class="col-md-10 offset-md-2 mt-4 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Editar Administrador</h1>
        <hr>
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('Especifique que información que va a editar.') }}</div>
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
                        <label for="Email">E-mail</label>
                        <input type="email" placeholder="E-mail" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="FechaNac">Fecha De Nacimiento</label>
                        <input type="date" placeholder="Fecha De Nacimiento" class="form-control" name="fechaNac">
                    </div>

                    <div class="form-group">
                        <label for="nameUser">Nombre De Usuario</label>
                        <input type="text" placeholder="Nombre De Usuario" class="form-control" name="nameUser">
                    </div>

                    <div class="form-group">
                        <label for="Password">Contraseña</label>
                        <input type="password" placeholder="Contraseña" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        <a href="{{ route('admins.index') }}" class="btn btn-primary">Actualizar</a>
                        <a href="{{ route('admins.index') }}" class="btn btn-secondary">Volver</a>
                    </div>
                </div>
            </div>
    </div>
@endsection