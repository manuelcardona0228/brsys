@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Lista De Tipos De Usuarios</h1>
    <hr>
    <a href="{!! url('typeUsers/create') !!}" class="btn btn-success btn-block">Crear Cargo</a></p>
    <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
                @foreach($typeUsers as $typeUser)
                <tbody>
                <tr>
                <th scope="row">{{ $typeUser->id }}</th>
                <td>{{ $typeUser->name }}</td>
                <td>{{ $typeUser->description }}</td>
                <td>{{ $typeUser->updated_at }}</td>
                <td><a href="{{ route('typeUsers.show', $typeUser->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('typeUsers.edit', $typeUser->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['typeUsers.destroy', $typeUser->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este cargo?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $typeUsers->links() }}
    </div>
@endsection
