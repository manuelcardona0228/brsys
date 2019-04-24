@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información Del Servicio</h1>
        <div class="card">
          <div class="card-header text-white bg-dark">{{ __('Servicio Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Descripción</td>
                  <td>Por los lados con el numero cero y arriba con tijeras.</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Nombre</td>
                  <td>El siete</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Valor</td>
                  <td>12000</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Barberia</td>
                  <td>Jungla</td>
                </tr>
              <tr>
                <td>Creado en</td>
                <td>23/02/2019</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>18/03/2019</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('servicios.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="/editarServicio" class="btn btn-warning btn-block">Editar</a>
              </br>
              <a href="{{ route('servicios.index')}}" class="btn btn-danger btn-block">Borrar</a>
            </div>
        </div>  
    </div>
@endsection