@extends('vistasBarbero.app')

@section('content')
<div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Turnos Pendientes</h1>
        <hr>
        <a href="{!! url('turnBarbers/create') !!}" class="btn btn-success btn-block">Crear Cliente</a></p>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Barbero</th>
                <th scope="col">Servicio</th>
                <th scope="col">Cliente</th>
                <th scope="col">Estado</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
                </tr>
            </thead>
                @foreach($turns as $turn)
                <tbody>
                <tr>
                <th scope="row">{{ $turn->id }}</th>
                <td>{{ $turn->day }}</td>
                <td>{{ $turn->hour }}</td>
                <td>{{ $turn->barber_id }}</td>
                <td>{{ $turn->service_id }}</td>
                <td>{{ $turn->customer_id }}</td>
                <td>{{ $turn->state }}</td>
                <td><a href="{{ route('turnBarbers.show', $turn->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('turnBarbers.edit', $turn->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['turns.destroy', $turn->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este turno?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $turns->links() }}
    </div>
@endsection