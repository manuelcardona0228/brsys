@extends('PruebaLayaud.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información De La Barberia</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barberia Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
              <tr>
                    <td style="width: 200px;">Nombres</td>
                    <td>Manolo</td>
                </tr>
                <tr>
                <td style="width: 200px;">Apellidos</td>
                <td>Morales</td>
                </tr>
                <tr>
                    <td>Cargo</td>
                    <td>Cliente</td>
                </tr>
                <tr>
                    <td>Creado en</td>
                    <td>02/04/19</td>
                </tr>
                <tr>
                    <td>Actualizado en</td>
                    <td>03/05/19</td>
                </tr>
              </table>

              <hr>

              <a href="{{ route('users.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="/editarUser" class="btn btn-warning btn-block">Editar</a>
              </br>
              <a href="{{ route('users.index')}}" class="btn btn-danger btn-block">Borrar</a>
          </div>
        </div>  
    </div>
@endsection