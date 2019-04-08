@extends('PruebaLayaud.app')

    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Crear Servicio</h1>
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información de el servicio a crear.') }}</div>
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="text" placeholder="Descripción" class="form-control" name="description">
                    </div>

                    <div class="form-group">
                        <label for="price">Valor</label>
                        <input type="text" placeholder="Valor" class="form-control" name="price">
                    </div>

                    <div class="form-group">
                        <label for="name">Nombre Del Servicio</label>
                        <input type="text" placeholder="Nombre Del Servicio" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="barberia_id">Barberia</label>
                        <input type="select" placeholder="Barberias..." class="form-control" name="barberia_id">
                    </div>

                    <div class="form-group">
                        <a href="{{ route('servicios.index') }}" class="btn btn-primary">Crear Servicio</a>
                        <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Volver</a>
                    </div>
            </div>
        </div>
    </div>
@endsection