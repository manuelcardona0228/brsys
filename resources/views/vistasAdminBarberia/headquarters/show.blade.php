@extends('vistasAdminBarberia.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información De La Sede</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Sede Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nit</td>
                  <td>{{ $headquarterAdmin->nit }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Razón Social</td>
                  <td>{{ $headquarterAdmin->businessName }}</td>
                </tr>
                <td>Dirección</td>
                  <td>{{ $headquarterAdmin->address }}</td>
                </tr>
                <td>Telefono</td>
                  <td>{{ $headquarterAdmin->phone }}</td>
                </tr>
                <td>Barberia</td>
                  <td>{{ $headquarterAdmin->barbershop_id }}</td>
                </tr>
                <td>Departamento</td>
                  <td>{{ $headquarterAdmin->department_id }}</td>
                </tr>
                <td>City</td>
                  <td>{{ $headquarterAdmin->city_id }}</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $headquarterAdmin->created_at }}</td>
                </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $headquarterAdmin->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('headquarterAdmins.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('headquarterAdmins.edit', $headquarterAdmin->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['headquarterAdmins.destroy', $headquarterAdmin->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar esta sede?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection