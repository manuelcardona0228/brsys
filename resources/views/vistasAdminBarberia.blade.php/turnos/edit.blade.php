@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Editar Turno</h1>
        <hr>

        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información de a turno a editar.') }}</div>
                <div class="card-body">
                <div class="form-group">
                        <label for="Servicio">Servicio</label>
                        <input type="text" placeholder="Servicio" class="form-control" name="servicio">
                    </div>

                    <div class="form-group">
                        <label for="Hora">Hora</label>
                        <input type="text" placeholder="Hora" class="form-control" name="Hora">
                    </div>

                    <div class="form-group">
                        <label for="Fecha">Fecha</label>
                        <input type="text" placeholder="Fecha" class="form-control" name="fecha">
                    </div>

                    <div class="form-group">
                        <label for="Valor">Valor</label>
                        <input type="text" placeholder="Valor" class="form-control" name="valor">
                    </div>

                    <div class="form-group">
                        <label for="Sede">Sede</label>
                        <input type="select" placeholder="Sede..." class="form-control" name="sede">
                    </div>

                    <div class="form-group">
                        <label for="Barbero">Barbero</label>
                        <input type="select" placeholder="Barbero..." class="form-control" name="barbero">
                    </div>

                    <div class="form-group">
                        <a href="{{ route('turnos.index') }}" class="btn btn-primary">Actualizar Turnos</a>
                        <a href="{{ route('turnos.index') }}" class="btn btn-secondary">Volver</a>
                    </div>
            </div>
    </div>

@endsection