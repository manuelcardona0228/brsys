@extends('PruebaLayaud.app')

@section('content')
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1 class="lines-effect">Información De Turno</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barberia Seleccionada') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
              <tr>
                <td>Servicio</td>
                <td>Corte + Barba</td>
              </tr>
              <tr>
                <td>Barbero</td>
                  <td>Jose</td>
                </tr>
                <td>Fecha</td>
                  <td>06/02/2019</td>
                </tr>
                <td>Hora</td>
                  <td>5:30</td>
                </tr>
              <tr>
                <td>Creado en</td>
                <td>03/04/2019</td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>05/03/2019</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('turnos.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="/editarTurno" class="btn btn-warning btn-block">Editar</a>
              </br>
              <a href="{{ route('turnos.index')}}" class="btn btn-danger btn-block">Borrar</a>
          </div>
        </div>  
    </div>
@endsection