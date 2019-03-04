@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Crear Barbero</h1>
        <hr>

        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del barbero a crear.') }}</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="Nit">Nit</label>
                        <input type="text" placeholder="Nit" class="form-control" name="nit">
                    </div>

                    <div class="form-group">
                        <label for="RazonSocial">Razón Social</label>
                        <input type="text" placeholder="Razón Social" class="form-control" name="razonSocial">
                    </div>

                    <div class="form-group">
                        <label for="Direccion">Dirección</label>
                        <input type="text" placeholder="Dirección" class="form-control" name="direccion">
                    </div>

                    <div class="form-group">
                        <label for="Telefono">Telefono</label>
                        <input type="text" placeholder="Telefono" class="form-control" name="telefono">
                    </div>

                    <div class="form-group">
                        <label for="SitioWeb">Sitio Web</label>
                        <input type="text" placeholder="Sitio Web" class="form-control" name="sitioWeb">
                    </div>

                    <div class="form-group">
                        <label for="Admin">Administrador</label>
                        <input type="select" placeholder="Administrador" class="form-control" name="admin">
                    </div>

                    <div class="form-group">
                        <a href="{{ route('barberos.index') }}" class="btn btn-primary">Crear Barbero</a>
                        <a href="{{ route('barberos.index') }}" class="btn btn-secondary">Volver</a>
                    </div>
            </div>
    </div>

@endsection