@extends('PruebaLayaud.app')

@section('content')

    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Editar Perfil</h1>
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del perfil a editar.') }}</div>
                <div class="card-body">

                    {!! Form::model($profile, [
                        'method' => 'PUT',
                        'route' => ['profiles.update', $profile->id],
                        'files' => 'true'
                    ]) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('imageProfile', 'Imagen De Perfil', ['class' => 'control-label']) !!}
                        {!! Form::file('imageProfile', null, ['class' => 'form-control-file']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('barber_id', 'Barbero', ['class' => 'control-label']) !!}
                        {!! Form::select('barber_id', $barber, $barber,['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('description', 'Descripción', ['class' => 'control-label']) !!}
                        {!! Form::text('description', null, ['class' => 'form-control']) !!}
                    </div>

		            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Volver</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection