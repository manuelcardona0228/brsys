@include('Llamados.links')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body id="body-register">
   <!-- NavBar -->
   <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img src="../plugins/bootstrap/img/BarberSys 1.0 Logo Icono.png" width="40" height="40" class="d-inline-block align-top" alt="">
            <a class="navbar-brand" href="/">Sistema Barberias</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/login"> Iniciar Sesión </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card-block">
                <div class="content-card-register">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="Nombre" placeholde="Nombres">{{ __('Nombres') }}</label>

                                
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="form-group row">
                                <label for="lastName" placeholde="Apellidos">{{ __('Apellidos') }}</label>

                                
                                    <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                    @if ($errors->has('apellido'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('apellido') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="form-group row">
                                <label for="Telefono" placeholde="Telefono">{{ __('Telefono') }}</label>

                                
                                    <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('telefono') }}" required autofocus>

                                    @if ($errors->has('telefono'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="form-group row">
                                <label for="birthdate" >{{ __('Fecha De Nacimiento') }}</label>

                                    <input id="birthdate" type="date" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" value="{{ old('birthdate') }}" required>

                                    @if ($errors->has('birthdate'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('birthdate') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="form-group row">
                                <label for="address" >{{ __('Dirección') }}</label>

                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                    @if ($errors->has('addres'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="form-group row">
                                <label for="Email" >{{ __('Dirección E-Mail') }}</label>

                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="form-group row">
                                <label for="NameUser" placeholde="Nombre De Usuario">{{ __('NameUser') }}</label>

                                
                                    <input id="nameUser" type="text" class="form-control{{ $errors->has('nameUser') ? ' is-invalid' : '' }}" name="nameUser" value="{{ old('nameUser') }}" required autofocus>

                                    @if ($errors->has('telefono'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="form-group row">
                                <label for="Pass">{{ __('Password') }}</label>

                                
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                        
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm">{{ __('Confirmar Password') }}</label>

                                
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                
                            </div>

                            <div class="form-group row mb-0">
                                
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                                </br>
                                <a class="btn btn-secondary" href="/login">Cancelar</a>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="header-content-login">
                <img src="../plugins/bootstrap/img/ImgRegistro.jpg" style="height: 0%; width:108%;">
            </div>
        </div>
    </div>
</div>
</body>
</html>
