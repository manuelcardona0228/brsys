@extends('PruebaLayaud.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información De Turno</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barberia Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
              <tr>
                <td>Servicio</td>
                <td>{{ $turn->service_id }}</td>
              </tr>
              <tr>
                <td>Barbero</td>
                  <td>{{ $turn->barber_id }}</td>
                </tr>
                <td>Cliente</td>
                  <td>{{ $turn->customer_id }}</td>
                </tr>
                <td>Fecha</td>
                  <td>{{ $turn->day }}</td>
                </tr>
                <td>Hora</td>
                  <td>{{ $turn->hour }}</td>
                </tr>
              <tr>
                <td>Creado en</td>
                <td>{{ $turn->created_at }}</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $turn->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('turns.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('turns.edit', $turn->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['turns.destroy', $turn->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar esta turno?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection