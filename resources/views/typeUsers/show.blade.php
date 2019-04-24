@extends('PruebaLayaud.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información Del Cargo</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Cargo Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nombre</td>
                  <td>{{ $cargo->name }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Descripción</td>
                  <td>{{ $cargo->description }}</td>
                </tr>
                <tr>
                  <td>Estado</td>
                  <td>{{ $cargo->state }}</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $cargo->created_at }}</td>
                </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $cargo->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('typeUsers.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              <br>
              <a href="{{ route('typeUsers.edit', $cargo->id) }}" class="btn btn-warning btn-block">Editar</a>
              <br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['typeUsers.destroy', $cargo->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar este cargo?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection