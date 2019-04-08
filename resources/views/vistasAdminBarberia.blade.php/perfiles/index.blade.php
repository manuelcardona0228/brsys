@extends('PruebaLayaud.app')

@section('content')
        <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
            <h1>Lista De Perfiles</h1>
            <hr>
            <p class="lead"> 
            <a href="{!! url('perfiles/create') !!}" class="btn btn-success btn-block">Crear Perfil</a></p>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">iD</th>
                    <th scope="col">Nombre Del Perfil</th>
                    <th scope="col">Barbero</th>
                    <th scope="col">Fecha De Creación</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                    <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Perfil De Pedro</td>
                    <td>Pedro</td>
                    <td>18/03/2019</td>
                    <td><a href="/verPerfil" class="btn btn-outline-primary btn-sm">Ver</a></td>
                    <td><a href="/editarPerfil" class="btn btn-outline-dark btn-sm">Editar</a></td>
                    <td><a href="{{ route('perfiles.index') }}" class="btn btn-outline-danger btn-sm">Borrar</a></td>
                </tbody>
            </table>
        </div>
@endsection