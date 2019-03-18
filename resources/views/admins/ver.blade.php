@extends('PruebaLayaud.app')

@section('content')
      <div class="col-md-10 offset-md-2 mt-4 main cuerpo-dos">
        <h1 class="lines-effect">Información Del Administrador</h1>
        <hr>
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Administrador Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
              <tr>
              <td style="width: 200px;">Nombres</td>
                <td>Carlos Alberto</td>
                </tr>
                <td style="width: 200px;">Apellidos</td>
                <td>Angulo</td>
                </tr>
                <tr>
                  <td>Cargo</td>
                  <td>Administrador Barberia</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>03/04/2019</td>
                </tr>
                <tr>
                  <td>Actualizado en</td>
                  <td>07/04/2019</td>
                </tr>
                </table>

                <hr>

                <a href="{{ route('admins.index') }}" class="btn btn-info btn-block">Volver al listado</a>
                </br>
                <a href="/editarAdmin" class="btn btn-warning btn-block">Editar</a>
                </br>
                <a href="{{ route('admins.index')}}" class="btn btn-danger btn-block">Borrar</a>
          </div>
        </div>  
      </div>
@endsection
