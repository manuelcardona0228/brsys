@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Lista de sedes</h1>
    <hr>
    <a href="{!! url('sedes/create') !!}" class="btn btn-success btn-block">Crear Sede</a></p>
    <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nit</th>
                <th scope="col">Razón Social</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
                <tbody>
                <tr>
                <th scope="row">1</th>
                <td>10239089</td>
                <td>Jungla</td>
                <td>04/03/2019</td>
                <td><a href="/verSede" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="/editarSede" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td><a href="{{ route('sedes.index') }}" class="btn btn-outline-danger btn-sm">Borrar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
