@extends('PruebaLayaud.app')

@section('content')

    <div class="col-md-10 offset-md-2 mt-4 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Editar Administrador</h1>
        <hr>
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('Especifique que información que va a editar.') }}</div>
                <div class="card-body">
                {!! Form::model($admin, [
                    'method' => 'PUT',
                    'route' => ['barbershopAdministrators.update', $admin->id]
                ]) !!}
                    
                <div class="form-group">
                    {!! Form::label('name', 'Nombres', ['class' => 'control-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('lastName', 'Apellidos', ['class' => 'control-label']) !!}
                    {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Telefono', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('birthdate', 'Fecha De Nacimiento', ['class' => 'control-label']) !!}
                    {!! Form::text('birthdate', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('address', 'Direccion', ['class' => 'control-label']) !!}
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('nameUser', 'Nombre De Usuario', ['class' => 'control-label']) !!}
                    {!! Form::text('nameUser', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
                    {!! Form::text('password', null, ['class' => 'form-control']) !!}
                </div>
                    
                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('barbershopAdministrators.index') }}" class="btn btn-secondary">Volver</a>

                {!! Form::close() !!}

                </div>
            </div>
    </div>
@endsection