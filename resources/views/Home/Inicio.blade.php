@include('Llamados.links')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><i class="fas fa-bars"></i></a>
            <img src="/plugins/bootstrap/img/BarberSys 1.0 Logo Icono.png" width="40" height="40" class="d-inline-block align-top" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/inicio">BarberSys</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
        <div class="accordion" id="accordionExample">
        <div class="card" id="card-accordion">
                <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-block accordion-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <a><i class="fas fa-users"></i> Cargos</a> 
                    </button>
                </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                        <a href="{{ route('cargos.create') }}"><li>Agregar Cargo</li></a>
                        <a href="{{ route('cargos.index') }}"><li>Ver Cargos</li></a>
                    </ul>
                </div>
                </div>
            </div>
                <div class="card" id="card-accordion">
                <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       <a><i class="fas fa-toolbox"></i> Administradores</a> 
                    </button>
                </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                        <a href="{{ route('admins.create') }}"><li>Agregar Administrador</li></a>
                        <a href="{{ route('admins.index') }}"><li>Ver Administradores</li></a>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card" id="card-accordion">
                <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <a><i class="fas fa-cut"></i> Barberos</a> 
                    </button>
                </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                    <a href="{{ route('barberos.create') }}"><li>Agregar Barbero</li></a>
                    <a href="{{ route('barberos.index') }}"><li>Ver Barberos</li></a>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card" id="card-accordion">
                <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                     <a><i class="fas fa-user"></i> Clientes</a> 
                    </button>
                </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                        <a href="{{ route('users.create') }}"><li>Agregar Cliente</li></a>
                        <a href="{{ route('users.index') }}"><li>Ver Clientes</li></a>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card" id="card-accordion">
                <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                    <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <a><i class="fas fa-hotel"></i> Barberias</a>
                    </button>
                </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                        <a href="{{ route('barberias.create') }}"><li>Agregar Barberia</li></a>
                        <a href="{{ route('barberias.index') }}"><li>Ver Barberias</li></a>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="card" id="card-accordion">
                <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                    <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                       <a><i class="fas fa-city"></i> Sedes</a>
                    </button>
                </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                    <a href="{{ route('sedes.create') }}"><li>Agregar Sede</li></a>
                    <a href="{{ route('sedes.index') }}"><li>Ver Sedes</li></a>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card" id="card-accordion">
                <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                    <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                       <a><i class="fas fa-boxes"></i> Servicios</a>
                    </button>
                </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                        <a href="{{ route('servicios.create') }}"><li>Agregar Servicios</li></a>
                        <a href="{{ route('servicios.index') }}"><li>Ver Servicios</li></a>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card" id="card-accordion">
                <div class="card-header" id="headingEight">
                <h5 class="mb-0">
                    <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                       <a><i class="fas fa-address-card"></i> Turnos</a> 
                    </button>
                </h5>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                    <a href="{{ route('turnos.create') }}"><li>Agregar Turno</li></a>
                    <a href="{{ route('turnos.index') }}"><li>Ver Turnos</li></a>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card" id="card-accordion">
                <div class="card-header" id="headingNine">
                <h5 class="mb-0">
                    <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                       <a><i class="fas fa-images"></i> Perfiles</a>
                    </button>
                </h5>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                        <a href="{{ route('perfiles.create') }}"><li>Agregar Perfil</li></a>
                        <a href="{{ route('perfiles.index') }}"><li>Ver Perfiles</li></a>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 offset-md-2 mt-5 main">
            <h2 class="h2-carrusel mt-2" style="text-align: center;">Promociones</h2>
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
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>