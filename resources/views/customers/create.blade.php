@extends('PruebaLayaud.app')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Crear Cliente</h1>
        <div class="card mt-2">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del cliente a crear.') }}</div>
            <div class="card-body">
                {!! Form::open(['route' => 'customers.store']) !!}

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
                    {!! Form::date('birthdate', null, ['class' => 'form-control']) !!}
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

                <div class="form-group">
                    {!! Form::label('department_id', 'Departamento', ['class' => 'control-label']) !!}
                    {!! Form::select('department_id', $department, $department,['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('city_id', 'Ciudad', ['class' => 'control-label']) !!}
                    {!! Form::select('city_id', $city, $city,['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                <a href="{{  route('customers.index')  }}" class="btn btn-secondary">Volver</a>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection