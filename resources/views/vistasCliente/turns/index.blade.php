@extends('vistasCliente.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Historial De turnos</h1>
    <hr>
    <a href="/pedirTurno" class="btn btn-success btn-block">Pedir Turno</a></p>
    <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Dia</th>
                <th scope="col">Hora</th>
                <th scope="col">Servicio</th>
                <th scope="col">Valor</th>
                <th scope="col">Barbero</th>
                <th scope="col">Cliente</th>
                <th scope="col">Fecha Actualizacion</th>
                </tr>
            </thead>
            @foreach($turns as $turn)
                <tbody>
                <tr>
                <th scope="row">{{ $turn->id }}</th>
                <td>{{ $turn->day }}</td>
                <td>{{ $turn->hour }}</td>
                <td>{{ $turn->service->name }}</td>
                <td>{{ $turn->service->value }}</td>
                <td>{{ $turn->barber->name }}</td>
                <td>{{ $turn->customer->name }}</td>
                <td>{{ $turn->updated_at }}</td>
                </tr>
        
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
