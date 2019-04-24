@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Editar Imagen</h1>
        <hr>

        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información de la imagen a editar.') }}</div>
                <div class="card-body">
                {!! Form::model($city, [
                        'method' => 'PUT',
                        'route' => ['cities.update', $city->id]
                    ]) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('department_id', 'Departamento', ['class' => 'control-label']) !!}
                        {!! Form::select('department_id', $department, $department,['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('cities.index') }}" class="btn btn-secondary">Volver</a>

                    {!! Form::close() !!}
            </div>
    </div>

@endsection