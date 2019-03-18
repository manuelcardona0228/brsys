@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Editar Cargo</h1>
        <hr>

        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del cargo a editar.') }}</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" placeholder="Nombre del cargo" class="form-control" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="Descripcion">Descripción</label>
                        <input type="text" placeholder="Descripcion" class="form-control" name="descripcion">
                    </div>

                    <div class="form-group">
                        <a href="{{ route('cargos.index') }}" class="btn btn-primary">Actualizar Cargo</a>
                        <a href="{{ route('cargos.index') }}" class="btn btn-secondary">Volver</a>
                    </div>
            </div>
    </div>

@endsection