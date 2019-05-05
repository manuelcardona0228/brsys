@extends('vistasAdminBarberia.app')

@section('content')
      <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1>Información Del Barbero</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barbero Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nombres</td>
                  <td>{{ $barberAdmin->name }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Apellidos</td>
                  <td>{{ $barberAdmin->lastName }}</td>
                </tr>
              <tr>
                <td>Dirección</td>
                <td>{{ $barberAdmin->address }}</td>
              </tr>
              <tr>
                <td>Telefono</td>
                <td>{{ $barberAdmin->phone }}</td>
              </tr>
              <tr>
                <td>Correo</td>
                <td>{{ $barberAdmin->email }}</td>
              </tr>
              <tr>
                <td>Fecha De Nacimiento</td>
                <td>{{ $barberAdmin->birthdate }}</td>
              </tr>
              <tr>
                <td>Calificación</td>
                <td>{{ $barberAdmin->qualification }}</td>
              </tr>
              <tr>
                <td>Nombre De Usuario</td>
                <td>{{ $barberAdmin->nameUser }}</td>
              </tr>
              <tr>
                <td>Sede</td>
                <td>{{ $barberAdmin->headquarter_id}}</td>
              </tr>
              <tr>
                <td>Cargo</td>
                <td>{{ $barberAdmin->type_user_id }}</td>
              </tr>
              <tr>
                <td>Creado en</td>
                <td>{{ $barberAdmin->created_at }}</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $barberAdmin->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('barberAdmins.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('barberAdmins.edit', $barberAdmin->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['barberAdmins.destroy', $barberAdmin->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar este barbero?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
      </div>
@endsection