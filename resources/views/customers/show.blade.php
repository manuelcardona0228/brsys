@extends('PruebaLayaud.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información Del Cliente</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Cliente Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                    <td style="width: 200px;">Nombres</td>
                    <td>{{ $customer->name }}</td>
                </tr>
                <tr>
                <td style="width: 200px;">Apellidos</td>
                <td>{{ $customer->lastName }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $customer->email }}</td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>{{ $customer->phone }}</td>
                </tr>
                <tr>
                <tr>
                    <td>Dirección</td>
                    <td>{{ $customer->address }}</td>
                </tr>
                <tr>
                    <td>Departamento</td>
                    <td>{{ $customer->department->name }}</td>
                </tr>
                <tr>
                    <td>Ciudad</td>
                    <td>{{ $customer->city->name }}</td>
                </tr>
                    <td>Creado en</td>
                    <td>{{ $customer->created_at }}</td>
                </tr>
                <tr>
                    <td>Actualizado en</td>
                    <td>{{ $customer->updated_at }}</td>
                </tr>
              </table>

                <hr>

                <a href="{{ route('customers.index') }}" class="btn btn-info btn-block">Volver al listado</a>
                </br>
                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-block">Editar</a>
                </br>
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['customers.destroy', $customer->id],
                    'onsubmit' => 'return confirm("¿Esta seguro de borrar este cliente?");'
                ]) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
          </div>
        </div>  
    </div>
@endsection