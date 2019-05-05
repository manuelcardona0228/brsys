@extends('vistasAdminBarberia.app')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Crear Barberia</h1>
        <hr>

        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información de la barberia a crear.') }}</div>
                <div class="card-body">
                {!! Form::open(['route' => 'barbershopAdmins.store']) !!}
                    <div class="form-group">
                        {!! Form::label('nit', 'Nit', ['class' => 'control-label']) !!}
                        {!! Form::text('nit', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('businessName', 'Razón Social', ['class' => 'control-label']) !!}
                        {!! Form::text('businessName', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('address', 'Dirección', ['class' => 'control-label']) !!}
                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Telefono', ['class' => 'control-label']) !!}
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('website', 'Sitio Web', ['class' => 'control-label']) !!}
                        {!! Form::text('website', null, ['class' => 'form-control']) !!}
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
                    <a href="{{ route('vistasAdminBarberia.barbershopAdmins.index') }}" class="btn btn-secondary">Volver</a>
                    {!! Form::close() !!}
            </div>
    </div>

@endsection