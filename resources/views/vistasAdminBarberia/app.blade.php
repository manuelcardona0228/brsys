@include('Llamados.links')
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.css') }}">

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- CSS Personalizados -->
    <link rel="stylesheet" href="/css/main.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" ></a>
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
                    <a href="{{ route('barberAdmins.create') }}"><li>Agregar Barbero</li></a>
                    <a href="{{ route('barberAdmins.index') }}"><li>Ver Barberos</li></a>
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
                        <a href="{{ route('barbershopAdmins.create') }}"><li>Agregar Barberia</li></a>
                        <a href="{{ route('barbershopAdmins.index') }}"><li>Ver Barberias</li></a>
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
                    <a href="{{ route('headquarterAdmins.create') }}"><li>Agregar Sede</li></a>
                    <a href="{{ route('headquarterAdmins.index') }}"><li>Ver Sedes</li></a>
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
                        <a href="{{ route('serviceAdmins.create') }}"><li>Agregar Servicios</li></a>
                        <a href="{{ route('serviceAdmins.index') }}"><li>Ver Servicios</li></a>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card" id="card-accordion">
                <div class="card-header" id="headingNine">
                <h5 class="mb-0">
                    <button class="btn btn-block collapsed accordion-btn" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                       <a><i class="fas fa-images"></i> Usuarios</a>
                    </button>
                </h5>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="botones">
                        <a href="{{ route('customerAdmins.create') }}"><li>Agregar Usuario</li></a>
                        <a href="{{ route('customerAdmins.index') }}"><li>Ver Usuarios</li></a>
                    </ul>
                </div>
                </div>
            </div>
        </div>            
        <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
            <main class="py-1">
                    @if(Session::has('estado'))
                        <article class="alert alert-success">
                        {{ Session::get('estado') }}
                        </article>
                    @endif
            </main>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
                @yield('content')
            </div>
        </div>
        </div>
    </div>
</div>
</body>
