@extends('PruebaLayaud.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Crear Cliente</h1>
        <div class="card mt-2">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del cliente a crear.') }}</div>
            <div class="card-body">

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" placeholder="Nombre" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="lastName">Apellidos</label>
                    <input type="text" placeholder="Apellidos" class="form-control" name="lastName">
                </div>

                <div class="form-group">
                    <label for="phone">Telefono</label>
                    <input type="text" placeholder="Telefono" class="form-control" name="phone">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" placeholder="Dirección E-mail" class="form-control" name="email">
                </div>
                
                <div class="form-group">
                    <label for="nameUser">Nombre De Usuario</label>
                    <input type="text" placeholder="Nombre De Usuario" class="form-control" name="nameUser">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" placeholder="Contraseña" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <label for="fechaNac">Fecha De Nacimiento</label>
                    <input type="date" placeholder="Fecha De Nacimiento" class="form-control" name="fechaNac">
                </div>

                <div class="form-group">
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Crear Cliente</a>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection