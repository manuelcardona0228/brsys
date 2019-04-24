@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Lista de barberias</h1>
    <hr>
    <a href="{!! url('barberias/create') !!}" class="btn btn-success btn-block">Crear Barberia</a></p>
    <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nit</th>
                <th scope="col">Razón Social</th>
                <th scope="col">Departamento</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Administrador</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
                @foreach($barbershops as $barbershop)
                <tbody>
                <tr>
                <th scope="row">{{ $barbershop->id }}</th>
                <td>{{ $barbershop->nit }}</td>
                <td>{{ $barbershop->businessName }}</td>
                <td>{{ $barbershop->department_id }}</td>
                <td>{{ $barbershop->city_id }}</td>
                <td>{{ $barbershop->barbershop_administrator_id }}</td>
                <td>{{ $barbershop->updated_at }}</td>
                <td><a href="{{ route('barbershops.show', $barbershop->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('barbershops.edit', $barbershop->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['barbershops.destroy', $barbershop->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar esta barberia?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
        
    @endforeach
            </tbody>
        </table>
        {{ $barbershops->links() }}
    </div>
@endsection
