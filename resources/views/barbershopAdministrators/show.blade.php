@extends('PruebaLayaud.app')

@section('content')
      <div class="col-md-10 offset-md-2 mt-4 main cuerpo-dos">
        <h1 class="lines-effect">Información Del Administrador</h1>
        <hr>
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Administrador Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
              <tr>
              <td style="width: 200px;">Nombres</td>
                <td>{{ $administrator->name }}</td>
                </tr>
                <td style="width: 200px;">Apellidos</td>
                <td>{{ $administrator->lastName }}</td>
                </tr>
                <tr>
                  <td>E-mail</td>
                  <td>{{ $administrator->email }}</td>
                </tr>
                <tr>
                  <td>Telefono</td>
                  <td>{{ $administrator->phone }}</td>
                </tr>
                <tr>
                  <td>Dirección</td>
                  <td>{{ $administrator->address }}</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $administrator->created_at }}</td>
                </tr>
                <tr>
                  <td>Actualizado en</td>
                  <td>{{ $administrator->updated_at }}</td>
                </tr>
                </table>

                <hr>

                <a href="{{ route('barbershopAdministrators.index') }}" class="btn btn-info btn-block">Volver al listado</a>
                </br>
                <a href="{{ route('barbershopAdministrators.edit', $administrator->id) }}" class="btn btn-warning btn-block">Editar</a>
                </br>
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['barbershopAdministrators.destroy', $admin->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este admin?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
          </div>
        </div>  
      </div>
@endsection
