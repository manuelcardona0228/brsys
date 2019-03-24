@extends('vistasCliente.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-3 cuerpo-dos">
        <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title">Servicios Por Barberias</h5>
                <hr size="30">
                <div class="form-group">
                    <label for="barber">Seleccione Barberia</label>
                    <input type="select" placeholder="Seleccione Barberia..." class="form-control" name="barber">
                </div>

                <div class="form-group">
                    <label for="sede">Seleccione Sede</label>
                    <input type="select" placeholder="Seleccion Sede..." class="form-control" name="sede">
                </div>
                <a href="" class="btn bServicio-btn">Buscar Servicios</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 offset-md-2 mt-1 cuerpo-dos">
            <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title">Servicios</h5>
                    <hr size="30">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Nombre Del Servicio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection