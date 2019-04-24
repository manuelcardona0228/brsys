@extends('PruebaLayaud.app')

@section('content')
        <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
            <h1>Lista De Perfiles</h1>
            <hr>
            <p class="lead"> 
            <a href="{!! url('profiles/create') !!}" class="btn btn-success btn-block">Crear Perfil</a></p>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">iD</th>
                    <th scope="col">Nombre Del Perfil</th>
                    <th scope="col">Barbero</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha De Creación</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                @foreach($profiles as $profile)
                <tbody>
                <tr>
                <th scope="row">{{ $profile->id }}</th>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->barbero_id }}</td>
                <td>{{ $profile->description }}</td>
                <td>{{ $profile->updated_at }}</td>
                <td><a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-outline-primary btn-sm">Ver</a></td>
                <td><a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                <td>{!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['profiles.destroy', $profile->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este perfil?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                {!! Form::close() !!}</td>
                </tr>        
                @endforeach
                </tbody>
            </table>
            {{ $profiles->links() }}
        </div>
@endsection