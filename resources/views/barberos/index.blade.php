@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1>Lista de Barberos</h1>
        <hr>
        <p class="lead"> 
        <a href="{!! url('barberos/create') !!}" class="btn btn-success btn-block">Crear Barbero</a></p>
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
                <td>Jose</td>
                <td></td>
                <td><a href="/ver" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="/editar" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td><a href="{{route('barberos.index')}}" class="btn btn-outline-danger btn-sm">Borrar</a></td></td>
                
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection