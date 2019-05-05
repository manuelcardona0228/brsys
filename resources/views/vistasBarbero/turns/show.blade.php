@extends('vistasBarbero.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información De Turno</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barberia Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
              <tr>
                <td>Servicio</td>
                <td>{{ $turnBarber->service_id }}</td>
              </tr>
              <tr>
                <td>Barbero</td>
                  <td>{{ $turnBarber->barber_id }}</td>
                </tr>
                <td>Cliente</td>
                  <td>{{ $turnBarber->customer_id }}</td>
                </tr>
                <td>Fecha</td>
                  <td>{{ $turnBarber->day }}</td>
                </tr>
                <td>Hora</td>
                  <td>{{ $turnBarber->hour }}</td>
                </tr>
                <td>Estado</td>
                @if($turnBarber->state = 1)
                  <td>Pendiente</td>
                @else
                  <td>Realizado</td>
                @endif
                </tr>
              <tr>
                <td>Creado en</td>
                <td>{{ $turnBarber->created_at }}</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $turnBarber->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('turnBarbers.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('turnBarbers.edit', $turnBarber->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['turns.destroy', $turnBarber->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar esta turno?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection