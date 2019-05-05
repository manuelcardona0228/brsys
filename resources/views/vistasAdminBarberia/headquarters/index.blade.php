@extends('vistasAdminBarberia.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Lista de sedes</h1>
    <hr>
    <a href="{!! url('headquarterAdmins/create') !!}" class="btn btn-success btn-block">Crear Sede</a></p>
    <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nit</th>
                <th scope="col">Razón Social</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Dirección</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
            @foreach($headquarters as $headquarter)
                <tbody>
                <tr>
                <th scope="row">{{ $headquarter->id }}</th>
                <td>{{ $headquarter->nit }}</td>
                <td>{{ $headquarter->businessName }}</td>
                <td>{{ $headquarter->phone }}</td>
                <td>{{ $headquarter->email }}</td>
                <td>{{ $headquarter->address }}</td>
                <td>{{ $headquarter->updated_at }}</td>
                <td><a href="{{ route('headquarterAdmins.show', $headquarter->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('headquarterAdmins.edit', $headquarter->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['headquarterAdmins.destroy', $headquarter->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar esta sede?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $headquarters->links() }}
    </div>
@endsection
