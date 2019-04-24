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
                  <td>{{ $department->name }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Descripción</td>
                  <td>{{ $department->description }}</td>
                </tr>
                <tr>
                  <td>Estado</td>
                  <td>{{ $department->state }}</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $department->created_at }}</td>
                </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $department->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('departments.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              <br>
              <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning btn-block">Editar</a>
              <br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['departments.destroy', $department->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar este departamento?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection