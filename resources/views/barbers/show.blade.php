@extends('PruebaLayaud.app')

@section('content')
      <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1>Información Del Barbero</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barbero Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nombres</td>
                  <td>{{ $barber->name }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Apellidos</td>
                  <td>{{ $barber->lastName }}</td>
                </tr>
              <tr>
                <td>Dirección</td>
                <td>{{ $barber->address }}</td>
              </tr>
              <tr>
                <td>Telefono</td>
                <td>{{ $barber->phone }}</td>
              </tr>
              <tr>
                <td>Correo</td>
                <td>{{ $barber->email }}</td>
              </tr>
              <tr>
                <td>Fecha De Nacimiento</td>
                <td>{{ $barber->birthdate }}</td>
              </tr>
              <tr>
                <td>Calificación</td>
                <td>{{ $barber->qualification }}</td>
              </tr>
              <tr>
                <td>Nombre De Usuario</td>
                <td>{{ $barber->nameUser }}</td>
              </tr>
              <tr>
                <td>Sede</td>
                <td>{{ $barber->headquarter_id}}</td>
              </tr>
              <tr>
                <td>Cargo</td>
                <td>{{ $barber->type_user_id }}</td>
              </tr>
              <tr>
                <td>Creado en</td>
                <td>{{ $barber->created_at }}</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $barber->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('barbers.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('barbers.edit', $barber->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['barbers.destroy', $barber->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar este barbero?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
      </div>
@endsection