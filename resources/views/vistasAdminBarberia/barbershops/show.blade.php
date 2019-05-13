@extends('vistasAdminBarberia.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información De La Barberia</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barberia Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nit</td>
                  <td>{{ $barbershopAdmin->nit }}</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Razón Social</td>
                  <td>{{ $barbershopAdmin->businessName }}</td>
                </tr>
                <td>Dirección</td>
                  <td>{{ $barbershopAdmin->address }}</td>
                </tr>
                <td>E-mail</td>
                  <td>{{ $barbershopAdmin->email }}</td>
                </tr>
                <td>Sitio Web</td>
                  <td>{{ $barbershopAdmin->website }}</td>
                </tr>
                <td>Departamento</td>
                  <td>{{ $barbershopAdmin->department->name }}</td>
                </tr>
                <td>City</td>
                  <td>{{ $barbershopAdmin->city->name }}</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>{{ $barbershopAdmin->created_at }}</td>
                </tr>
              <tr>
                <td>Actualizado en</td>
                <td>{{ $barbershopAdmin->updated_at }}</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('barbershopAdmins.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="{{ route('barbershopAdmins.edit', $barbershopAdmin->id) }}" class="btn btn-warning btn-block">Editar</a>
              </br>
              {!! Form::open([
                  'method' => 'DELETE',
                  'route' => ['barbershopAdmins.destroy', $barbershopAdmin->id],
                  'onsubmit' => 'return confirm("¿Esta seguro de borrar esta barberia?");'
              ]) !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection