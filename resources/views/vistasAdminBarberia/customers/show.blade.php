@extends('vistasAdminBarberia.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información Del Cliente</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Cliente Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                    <td style="width: 200px;">Nombres</td>
                    <td>{{ $customerAdmin->name }}</td>
                </tr>
                <tr>
                <td style="width: 200px;">Apellidos</td>
                <td>{{ $customerAdmin->lastName }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $customerAdmin->email }}</td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>{{ $customerAdmin->phone }}</td>
                </tr>
                <tr>
                <tr>
                    <td>Dirección</td>
                    <td>{{ $customerAdmin->address }}</td>
                </tr>
                    <td>Creado en</td>
                    <td>{{ $customerAdmin->created_at }}</td>
                </tr>
                <tr>
                    <td>Actualizado en</td>
                    <td>{{ $customerAdmin->updated_at }}</td>
                </tr>
              </table>

                <hr>

                <a href="{{ route('customerAdmins.index') }}" class="btn btn-info btn-block">Volver al listado</a>
                </br>
                <a href="{{ route('customerAdmins.edit', $customerAdmin->id) }}" class="btn btn-warning btn-block">Editar</a>
                </br>
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['customerAdmins.destroy', $customerAdmin->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este cliente?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection