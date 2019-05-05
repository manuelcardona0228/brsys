@extends('vistasAdminBarberia.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
    <h1 class="lines-effect">Lista de clientes</h1>
    <hr>
    <a href="{!! url('customerAdmins/create') !!}" class="btn btn-success btn-block">Crear Cliente</a></p>
    <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nombres</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha De Nacimiento</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Ver</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
            @foreach($customers as $customer)
                <tbody>
                <tr>
                <th scope="row">{{ $customer->id }}</th>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->birthdate }}</td>
                <td>{{ $customer->city_id }}</td>
                <td><a href="{{ route('customerAdmins.show', $customer->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['customerAdmins.destroy', $customer->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este cliente?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $customers->links() }}
    </div>
@endsection
