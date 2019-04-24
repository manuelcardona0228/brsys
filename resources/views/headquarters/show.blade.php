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
                  <td>{{ $headquarter->nit }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Razón Social</td>
                  <td>{{ $headquarter->businessName }}</td>
                </tr>
                <td>Dirección</td>
                  <td>{{ $headquarter->address }}</td>
                </tr>
                <td>Telefono</td>
                  <td>{{ $headquarter->phone }}</td>
                </tr>
                <td>Barberia</td>
                  <td>{{ $headquarter->barbershop_id }}</td>
                </tr>
                <td>Departamento</td>
                  <td>{{ $headquarter->department_id }}</td>
                </tr>
                <td>City</td>
                  <td>{{ $headquarter->city_id }}</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $headquarter->created_at }}</td>
                </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $headquarter->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('headquarters.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('headquarters.edit', $headquarter->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['headquarters.destroy', $headquarter->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar esta sede?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection