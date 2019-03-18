@extends('PruebaLayaud.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información De La Barberia</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barberia Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nombre</td>
                  <td>Administrador Barberia</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Descripción</td>
                  <td>Usuario que tiene acceso solo a sus barberias y sedes</td>
                </tr>
                <tr>
                  <td>Creado en</td>
                  <td>02/28/2019</td>
                </tr>
              <tr>
                <td>Actualizado en</td>
                <td>04/03/2019</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('cargos.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="/editarCargo" class="btn btn-warning btn-block">Editar</a>
              </br>
              <a href="{{ route('cargos.index')}}" class="btn btn-danger btn-block">Borrar</a>
          </div>
        </div>  
    </div>
@endsection