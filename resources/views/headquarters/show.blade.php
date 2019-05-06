@extends('PruebaLayaud.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información De La Sede</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Sede Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nit</td>
                  <td>{{ $headquarters->nit }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Razón Social</td>
                  <td>{{ $headquarters->businessName }}</td>
                </tr>
                <td>Dirección</td>
                  <td>{{ $headquarters->address }}</td>
                </tr>
                <td>Telefono</td>
                  <td>{{ $headquarters->phone }}</td>
                </tr>
                <td>Barberia</td>
                  <td>{{ $headquarters->barbershop->businessName }}</td>
                </tr>
                <td>Departamento</td>
                  <td>{{ $headquarters->department_id }}</td>
                </tr>
                <td>City</td>
                  <td>{{ $headquarters->city_id }}</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $headquarters->created_at }}</td>
                </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $headquarters->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('headquarters.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('headquarters.edit', $headquarters->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['headquarters.destroy', $headquarters->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar esta sede?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection