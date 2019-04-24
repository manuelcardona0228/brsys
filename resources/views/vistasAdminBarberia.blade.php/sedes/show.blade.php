@extends('PruebaLayaud.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información De La Sede</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Sede Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nit</td>
                  <td>105099090</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Razón Social</td>
                  <td>Jungla</td>
                </tr>
                <td>Dirección</td>
                  <td>Calle 6 # 6-48</td>
                </tr>
                <td>Telefono</td>
                  <td>8784534</td>
                </tr>
                <td>Sitio Web</td>
                  <td>www.jungleBarber.co</td>
                </tr>
                <td>Administrador</td>
                  <td>Jose</td>
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

              <a href="{{ route('sedes.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="/editarSede" class="btn btn-warning btn-block">Editar</a>
              </br>
              <a href="{{ route('sedes.index')}}" class="btn btn-danger btn-block">Borrar</a>
          </div>
        </div>  
    </div>
@endsection