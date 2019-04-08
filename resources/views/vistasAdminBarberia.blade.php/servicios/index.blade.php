@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Lista de servicios</h1>
        <hr>
        <p class="lead"> 
        <a href="{!! url('servicios/create') !!}" class="btn btn-success btn-block">Crear Servicio</a></p>
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
                <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Con la uno por los lados, arriba con tijeras, etc.</td>
                <td>El siete</td>
                <td>12000</td>
                <td>Jungla</td>
                <td>12/03/2019</td>
                <td><a href="/verServicio" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="/editarServicio" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td><a href="{{ route('servicios.index') }}" class="btn btn-outline-danger btn-sm">Borrar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection