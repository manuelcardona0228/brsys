@extends('vistasBarbero.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-5 main cuerpo-dos">
        <h1 class="lines-effect mt-2">Crear Turno</h1>
        <hr>

        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del Turno a crear.') }}</div>
                <div class="card-body">
                {!! Form::open(['route' => 'turnBarbers.store']) !!}
                    <div class="form-group">
                        {!! Form::label('day', 'Dia', ['class' => 'control-label']) !!}
                        {!! Form::date('day', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('hour', 'Hora', ['class' => 'control-label']) !!}
                        {!! Form::time('hour', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('barber_id', 'Barbero', ['class' => 'control-label']) !!}
                        {!! Form::select('barber_id', $barber, $barber,['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('service_id', 'Servicio', ['class' => 'control-label']) !!}
                        {!! Form::select('service_id', $service, $service,['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('customer_id', 'Cliente', ['class' => 'control-label']) !!}
                        {!! Form::select('customer_id', $customer, $customer,['class' => 'form-control']) !!}
                    </div>

		        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('turns.index') }}" class="btn btn-secondary">Volver</a>

                {!! Form::close() !!}
            </div>
    </div>

@endsection