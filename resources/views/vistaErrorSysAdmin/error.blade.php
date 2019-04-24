@extends('PruebaLayaud.app')

@section('content')


    <div class="col-md-10 offset-md-2 mt-5 main">
        <div class="card mt-5 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <div class="alert alert-danger" role="alert">
                    No cuentas con los permisos para ver esta pagina.
                </div>
                <a class="btn btn-primary" href="{{ url()->previous() }}">Volver</a></p>
            </div>
        </div>
    </div>

@ensection