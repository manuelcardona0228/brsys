@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Lista De Departamentos</h1>
    <hr>
    <a href="{!! url('typeUsers/create') !!}" class="btn btn-success btn-block">Crear Cargo</a></p>
    <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
                @foreach($departments as $department)
                <tbody>
                <tr>
                <th scope="row">{{ $department->id }}</th>
                <td>{{ $department->name }}</td>
                <td>{{ $department->description }}</td>
                <td>{{ $department->state }}</td>
                <td>{{ $department->updated_at }}</td>
                <td><a href="{{ route('departments.show', $department->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('departments.edit', $department->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['departments.destroy', $department->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este departamento?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $departments->links() }}
    </div>
@endsection
