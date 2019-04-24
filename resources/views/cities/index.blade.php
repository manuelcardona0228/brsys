@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Lista de cargos</h1>
    <hr>
    <a href="{!! url('cities/create') !!}" class="btn btn-success btn-block">Crear Cargo</a></p>
    <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nombre</th>
                <th scope="col">Departamento</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
                @foreach($cities as $city)
                <tbody>
                <tr>
                <th scope="row">{{ $city->id }}</th>
                <td>{{ $city->name }}</td>
                <td>{{ $city->department_id }}</td>
                <td>{{ $city->updated_at }}</td>
                <td><a href="{{ route('cities.show', $city->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('cities.edit', $city->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['cities.destroy', $city->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar esta ciudad?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $cities->links() }}
    </div>
@endsection
