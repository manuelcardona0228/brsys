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
                    <td>{{ $profile->name }}</td>
                </tr>
                <tr>
                    <td style="width: 200px;">Barbero</td>
                    <td>{{ $profile->barber_id }}</td>
                </tr>
                <tr>
                <td>Creado en</td>
                <td>{{ $profile->created_at }}</td>
                </tr>
                <tr>
                <td>Actualizado en</td>
                <td>{{ $profile->updated_at }}</td>
                </tr>
                </table>

                <hr>

                <a href="{{ route('profiles.index') }}" class="btn btn-info btn-block">Volver al listado</a>
                </br>
                <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning btn-block">Editar</a>
                </br>
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['profiles.destroy', $profile->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este perfil?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>  
    </div>
@endsection