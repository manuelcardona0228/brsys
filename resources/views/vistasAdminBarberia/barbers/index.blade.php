@extends('vistasAdminBarberia.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1>Lista de Barberos</h1>
        <hr>
        <p class="lead"> 
        <a href="{!! url('barberAdmins/create') !!}" class="btn btn-success btn-block">Crear Barbero</a></p>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">iD</th>
                <th scope="col">Nombres</th>
                <th scope="col">Calificación</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Fecha Actualizacion</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
                @foreach($barbers as $barber)
                <tbody>
                <tr>
                <th scope="row">{{ $barber->id }}</th>
                <td>{{ $barber->name }}</td>
                <td>{{ $barber->qualification }}</td>
                <td>{{ $barber->phone }}</td>
                <td>{{ $barber->email }}</td>
                <td><a href="{{ route('barberAdmins.show', $barber->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('barberAdmins.edit', $barber->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['barberAdmins.destroy', $barber->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este barbero?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection