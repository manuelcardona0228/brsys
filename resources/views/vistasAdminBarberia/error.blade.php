@extends('vistasAdminBarberia.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-3 cuerpo-dos">
        <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <div class="alert alert-danger" role="alert">
                    No cuentas con los permisos para ver esta pagina.
                </div>
                <a class="btn btn-primary" href="{{ url()->previous() }}">Volver</a></p>
            </div>
        </div>
    </div>
@ensection