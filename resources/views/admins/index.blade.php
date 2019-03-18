@extends('PruebaLayaud.app')

@section('content')

    <div class="col-md-10 offset-md-2 mt-4 main cuerpo-dos">
            <h1>Lista de Administradores</h1>
            <hr>
            <p class="lead"> 
            <a href="{!! url('admins/create') !!}" class="btn btn-success btn-block">Crear Administrador</a></p>
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
                    <td>Carlos Alberto</td>
                    <td>16/02/2019</td>
                    <td><a href="/verAdmin" class="btn btn-outline-primary btn-sm">Ver</a></td>
                    <td><a href="/editarAdmin" class="btn btn-outline-dark btn-sm">Editar</a></td>
                    <td><a href="{{ route('admins.index') }}" class="btn btn-outline-danger btn-sm">Borrar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection
