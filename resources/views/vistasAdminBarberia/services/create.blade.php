@extends('vistasAdminBarberia.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect">Crear Servicio</h1>
        <hr>
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información de el servicio a crear.') }}</div>
                <div class="card-body">
                    
                {!! Form::open(['route' => 'serviceAdmins.store']) !!}
                    
                    <div class="form-group">
                        {!! Form::label('description', 'Descripción', ['class' => 'control-label']) !!}
                        {!! Form::text('description', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('value', 'Valor', ['class' => 'control-label']) !!}
                        {!! Form::text('value', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('img', 'Image', ['class' => 'control-label']) !!}
                        {!! Form::file('img', null, ['class' => 'form-control-file']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('barbershop_id', 'Barberia', ['class' => 'control-label']) !!}
                        {!! Form::select('barbershop_id', $barbershop, $barbershop,['class' => 'form-control']) !!}
                    </div>


		        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('serviceAdmins.index') }}" class="btn btn-secondary">Volver</a>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection