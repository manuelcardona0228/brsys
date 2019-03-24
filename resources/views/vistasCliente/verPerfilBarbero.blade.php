@extends('vistasCliente.app')

@section('content')
    <div class="col-md-4 mt-5 cuerpo-dos">
        <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title">Perfil Barbero</h5>
                <hr size="30">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Foto De perfil</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 mt-5 cuerpo-dos">
        <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title">Información Del Barbero</h5>
                <hr size="30">
                <li style="line-height: 25px;" ><span><i class="fas fa-circle" style="color:black"></i> <label for="nombre" >Nombres:</label></li>
                <li style="line-height: 25px;" ><span><i class="fas fa-circle" style="color:red"></i> <label for="nombre" >Apellidos:</label></li>
                <li style="line-height: 25px;" ><span><i class="fas fa-circle" style="color:blue"></i> <label for="nombre" >Correo:</label></li>
                <li style="line-height: 25px;" ><span><i class="fas fa-circle" style="color:black"></i> <label for="nombre" >Telefono/Celular:</label></li>
                <li style="line-height: 25px;" ><span><i class="fas fa-circle" style="color:red"></i> <label for="nombre" >Calificación:</label></li>
                <li style="line-height: 25px;" ><span><i class="fas fa-circle" style="color:blue"></i> <label for="nombre" >Horario Habitual De Trabajo:</label></li>
                <a href="#" class="btn mTurno-btn">Pedir Turno</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 offset-md-2 mt-1 cuerpo-dos">
            <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title">Cortes Realizados</h5>
                    <hr size="30">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection