@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Lista de clientes</h1>
    <hr>
    <a href="{!! url('barberias/create') !!}" class="btn btn-success btn-block">Crear Cliente</a></p>
    <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nombres</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
                <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Manolo</td>
                <td>04/05/2019</td>
                <td><a href="/verUsers" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="/editarUsers" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td><a href="{{ route('users.index') }}" class="btn btn-outline-danger btn-sm">Borrar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
