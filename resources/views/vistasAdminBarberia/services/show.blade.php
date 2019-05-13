@extends('vistasAdminBarberia.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información Del Servicio</h1>
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Servicio Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Descripción</td>
                  <td>{{ $serviceAdmin->description }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Nombre</td>
                  <td>{{ $serviceAdmin->name }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Valor</td>
                  <td>{{ $serviceAdmin->value }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Barberia</td>
                  <td>{{ $serviceAdmin->barbershop->businessName }}</td>
                </tr>
              <tr>
                <td>Creado en</td>
                <td>{{ $serviceAdmin->created_at }}</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $serviceAdmin->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('serviceAdmins.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('serviceAdmins.edit', $serviceAdmin->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['serviceAdmins.destroy', $serviceAdmin->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar esta servicio?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
            </div>
        </div>  
    </div>
@endsection