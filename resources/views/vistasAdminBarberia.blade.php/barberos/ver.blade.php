@extends('PruebaLayaud.app')

@section('content')
      <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
      <h1>Información Del Barbero</h1>
        <div class="card mt-2">
          <div class="card-header text-white bg-dark">{{ __('Barbero Seleccionado') }}</div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <tr>
                  <td style="width: 200px;">Nombre</td>
                  <td>Jose</td>
                </tr>
                <tr>
                  <td style="width: 200px;">Documento</td>
                  <td>1010243910</td>
                </tr>
              <tr>
                <td>Apellidos</td>
                <td>Garcia Lopez</td>
              </tr>
              <tr>
                <td>Telefono</td>
                <td>3109800315</td>
              </tr>
              <tr>
                <td>Correo</td>
                <td>jose9021@example.com</td>
              </tr>
              <tr>
                <td>Fecha De Nacimiento</td>
                <td>05/02/1989</td>
              </tr>
              <tr>
                <td>Calificación</td>
                <td>4.5</td>
              </tr>
              <tr>
                <td>Nombre De Usuario</td>
                <td>joseLop</td>
              </tr>
              <tr>
                <td>Barberia</td>
                <td>Jungla</td>
              </tr>
              <tr>
                <td>Cargo</td>
                <td>Barbero</td>
              </tr>
              <tr>
                <td>Creado en</td>
                <td></td>
              </tr>
              <tr>
                <td>Actualizado en</td>
                <td>03/05/2019</td>
              </tr>
              </table>

              <hr>

              <a href="{{ route('barberos.index') }}" class="btn btn-info btn-block">Volver al listado</a>
              </br>
              <a href="/editarBarbero" class="btn btn-warning btn-block">Editar</a>
              </br>
              <div class="form-group">
                    <a href="{{ route('barberos.index') }}" class="btn btn-danger btn-block">Borrar Barbero</a>
              </div>
          </div>
        </div>  
      </div>
@endsection