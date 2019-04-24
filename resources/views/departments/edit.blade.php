@extends('PruebaLayaud.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Editar Cargo</h1>
        <hr>

        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del cargo a editar.') }}</div>
                <div class="card-body">
                {!! Form::model($cargo, [
                        'method' => 'PUT',
                        'route' => ['typeUsers.update', $cargo->id]
                    ]) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Descripción', ['class' => 'control-label']) !!}
                        {!! Form::text('description', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('state', 'Estado', ['class' => 'control-label']) !!}
                        {!! Form::text('state', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('typeUsers.index') }}" class="btn btn-secondary">Volver</a>

                    {!! Form::close() !!}
            </div>
    </div>

@endsection