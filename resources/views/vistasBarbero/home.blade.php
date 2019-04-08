@extends('vistasBarbero.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main">
        <h2 class="h2-carrusel mt-2" style="text-align: center;">Información Para Los Barberos</h2>
        <div class="card">
            <div id="carruselPrincipal" class="carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carruselPrincipal" data-slide-to="0" class="active"></li>
                <li data-target="#carruselPrincipal" data-slide-to="1"></li>
                <li data-target="#CarruselPrincipal" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="plugins/bootstrap/img/banner1.png" alt="Promocion 1">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="plugins/bootstrap/img/banner2.png" alt="Promocion 2">
                    <div class="carousel-caption my-6">
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carruselPrincipal" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carruselPrincipal" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
@endsection
