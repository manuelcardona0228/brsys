@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Información Del Perfil</h1>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Perfil Seleccionado') }}</div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                <tr>
                    <td style="width: 200px;">Nombre Del Perfil</td>
                    <td>Cortes Personales</td>
                </tr>
                <tr>
                    <td style="width: 200px;">Barbero</td>
                    <td>Pedro</td>
                </tr>
                <tr>
                <td>Creado en</td>
                <td>23/03/2019</td>
                </tr>
                <tr>
                <td>Actualizado en</td>
                <td>25/03/2019</td>
                </tr>
                </table>

                <hr>

                <a href="{{ route('perfiles.index') }}" class="btn btn-info btn-block">Volver al listado</a>
                </br>
                <a href="/editarPerfil" class="btn btn-warning btn-block">Editar</a>
                </br>
                <a href="{{ route('perfiles.index')}}" class="btn btn-danger btn-block">Borrar</a>
            </div>
        </div>  
    </div>
@endsection