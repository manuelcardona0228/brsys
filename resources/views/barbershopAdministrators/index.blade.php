@extends('PruebaLayaud.app')

@section('content')

    <div class="col-md-10 offset-md-2 mt-4 main cuerpo-dos">
            <h1>Lista de Administradores</h1>
            <hr>
            <p class="lead"> 
            <a href="{!! url('barbershopAdministrators/create') !!}" class="btn btn-success btn-block">Crear Administrador</a></p>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">iD</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Barberia Propia</th>
                    <th scope="col">Fecha Actualizacion</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                    @foreach($barbershopAdministrators as $barbershopAdministrator)
                    <tbody>
                    <tr>
                    <th scope="row">{{ $barbershopAdministrator->id }}</th>
                    <td>{{ $barbershopAdministrator->name }}</td>
                    <td>{{ $barbershopAdministrator->phone }}</td>
                    <td>{{ $barbershopAdministrator->email }}</td>
                    <td>{{ $barbershopAdministrator->barbershop->businessName }}</td>
                    <td>{{ $barbershopAdministrator->updated_at }}</td>
                    <td><a href="{{ route('barbershopAdministrators.show', $barbershopAdministrator->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                    <td><a href="{{ route('barbershopAdministrators.edit', $barbershopAdministrator->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                    <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['barbershopAdministrators.destroy', $barbershopAdministrator->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este admin?");'
                    ]) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                    {!! Form::close() !!}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $barbershopAdministrators->links() }}
        </div>
@endsection
