@extends('vistasBarbero.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Historial De Turnos</h1>
        <hr>
        <a href="{!! url('turnBarbers/create') !!}" class="btn btn-success btn-block">Crear Turno</a></p>
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
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $turns->links() }}
    </div>
@endsection