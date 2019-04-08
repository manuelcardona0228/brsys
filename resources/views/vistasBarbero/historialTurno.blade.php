@extends('vistasBarbero.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Historial De Turnos</h1>
        <hr>
        <a href="{!! url('barberias/create') !!}" class="btn btn-success btn-block">Crear Cliente</a></p>
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
                <th scope="col">Calificación</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
                </tr>
            </thead>
                <tbody>
                <tr>
                <th scope="row">1</th>
                <td>25/03/2019</td>
                <td>5:30</td>
                <td>Pedro</td>
                <td>Corte + Barba</td>
                <td>Santiago</td>
                <td>Realizado</td>
                <td>5</td>
                <td><a href="/verUsers" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="/editarUsers" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td><a href="{{ route('users.index') }}" class="btn btn-outline-danger btn-sm">Borrar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection