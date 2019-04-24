@extends('PruebaLayaud.app')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Crear Cargo</h1>
        <hr>

        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información de la ciudad a crear.') }}</div>
                <div class="card-body">
                {!! Form::open(['route' => 'cities.store']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('department_id', 'Departamento', ['class' => 'control-label']) !!}
                        {!! Form::select('department_id', $department, department,['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Crear', ['class' => 'btn btn-primary btn-block']) !!}
                    <a class="btn btn-secondary btn-block" href="{{ route('cities.index') }}">Volver</a></p>
                    {!! Form::close() !!}
            </div>
    </div>

@endsection