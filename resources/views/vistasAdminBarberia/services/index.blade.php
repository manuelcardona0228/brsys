@extends('vistasAdminBarberia.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Lista de servicios</h1>
        <hr>
        <p class="lead"> 
        <a href="{!! url('serviceAdmins/create') !!}" class="btn btn-success btn-block">Crear Servicio</a></p>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Descripción Del Servicio</th>
                <th scope="col">Nombre Del Servicio</th>
                <th scope="col">Valor Del Servicio</th>
                <th scope="col">Barberia</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
            @foreach($services as $service)
                <tbody>
                <tr>
                <th scope="row">{{ $service->id }}</th>
                <td>{{ $service->description }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->value }}</td>
                <td>{{ $service->barbershop->businessName }}</td>
                <td>{{ $service->updated_at }}</td>
                <td><a href="{{ route('serviceAdmins.show', $service->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('serviceAdmins.edit', $service->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['serviceAdmins.destroy', $service->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este servicio?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $services->links() }}
    </div>
@endsection