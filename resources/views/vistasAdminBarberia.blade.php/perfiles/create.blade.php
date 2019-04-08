@extends('PruebaLayaud.app')

@section('content')

    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Crear Perfil</h1>
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del perfil a crear.') }}</div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" placeholder="Nombre" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="imgPerfil">Imagen De Perfil</label>
                        <input type="text" placeholder="Imagen De Perfil" class="form-control" name="imgPerfil">
                    </div>

                    <div class="form-group">
                        <label for="barbero_id">Barbero</label>
                        <input type="select" placeholder="Barbero..." class="form-control" name="barbero_id">
                    </div>

                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="text" placeholder="Descripción" class="form-control" name="description">
                    </div>

                    <div class="form-group">
                        <a href="{{ route('perfiles.index') }}" class="btn btn-primary">Crear Perfil</a>
                        <a href="{{ route('perfiles.index') }}" class="btn btn-secondary">Volver</a>
                    </div>
            </div>
        </div>
    </div>
@endsection