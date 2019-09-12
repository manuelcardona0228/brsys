@extends('vistasCliente.app')


@section('content')

    <div class="col-md-5 offset-md-2 main cuerpo-dos">
        <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title">Pedir Turno</h5>
                {!! Form::open(['route' => 'users.store']) !!}
                <div class="form-group">
                    {!! Form::label('barbershop_id', 'Seleccione Barberia', ['class' => 'control-label']) !!}
                    {!! Form::select('barbershop_id', $barbershops, $barbershops,['class' => 'form-control', 'placeholder' => 'Seleccione']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('headquarter_id', 'Seleccione Sede', ['class' => 'control-label']) !!}
                    {!! Form::select('headquarter_id', ['placeholder' => 'Seleccione'], null, ['id' => 'headquarter_id' ,'class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('barber_id', 'Seleccione Barbero', ['class' => 'control-label']) !!}
                    {!! Form::select('barber_id', ['placeholder' => 'Seleccione'], null, ['id' => 'barber_id' ,'class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('service_id', 'Seleccione Servicio', ['class' => 'control-label']) !!}
                    {!! Form::select('service_id', ['placeholder' => 'Seleccione'], null, ['id' => 'service_id' ,'class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('day', 'Seleccione Dia', ['class' => 'control-label']) !!}
                    {!! Form::date('day', null, ['class' => 'calendario form-control', 'date-format' => 'd-m-y']) !!}
                </div>

                <script>
                    $('.calendario').flatpickr({
                        minDate:"today",
                        maxDate:new Date().fp_incr(3)
                    });
                </script>

            </div>
        </div>
    </div>

    <div class="col-md-5 mt-1">
        <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <span><i class="fas fa-circle" style="color:blue"></i> <label for="nombre" class="text-primary">Disponibles</label></span>
                <span><i class="fas fa-circle" style="color:red"></i> <label for="nombre" class="text-danger">No Disponibles</label></span>
                <h4>Hora: </h4>

                <div class="form-check form-check-inline">
                    {{ Form::radio('hour', '06:30' , false) }}
                    {!! Form::label('hour', '6:30 AM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '07:00' , false) }}
                    {!! Form::label('hour', '7:00 AM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '07:30' , false) }}
                    {!! Form::label('hour', '7:30 AM ', ['class' => 'form-check-label']) !!}
                </div>
                
                <hr size="30">

                <div class="form-check form-check-inline">
                    {{ Form::radio('hour', '08:00' , false) }}
                    {!! Form::label('hour', '8:00 AM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '08:30' , false) }}
                    {!! Form::label('hour', '8:30 AM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '09:00' , false) }}
                    {!! Form::label('hour', '9:00 AM ', ['class' => 'form-check-label']) !!}
                </div>
                
                <hr size="30">

                <div class="form-check form-check-inline">
                    {{ Form::radio('hour', '09:30' , false) }}
                    {!! Form::label('hour', '9:30 AM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '10:00' , false) }}
                    {!! Form::label('hour', '10:00 AM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '10:30' , false) }}
                    {!! Form::label('hour', '10:30 AM ', ['class' => 'form-check-label']) !!}
                </div>

                <hr size="30">

                <div class="form-check form-check-inline">
                    {{ Form::radio('hour', '11:00' , false) }}
                    {!! Form::label('hour', '11:00 AM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '11:30' , false) }}
                    {!! Form::label('hour', '11:30 AM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '12:00' , false) }}
                    {!! Form::label('hour', '12:00 PM ', ['class' => 'form-check-label']) !!}
                </div>

                <hr size="30">

                <div class="form-check form-check-inline">
                    {{ Form::radio('hour', '12:30' , false) }}
                    {!! Form::label('hour', '12:30 PM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '13:00' , false) }}
                    {!! Form::label('hour', '1:00 PM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '13:30' , false) }}
                    {!! Form::label('hour', '1:30 PM ', ['class' => 'form-check-label']) !!}
                </div>

                <hr size="30">

                <div class="form-check form-check-inline">
                    {{ Form::radio('hour', '14:00' , false) }}
                    {!! Form::label('hour', '2:00 PM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '14:30' , false) }}
                    {!! Form::label('hour', '2:30 PM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '15:00' , false) }}
                    {!! Form::label('hour', '3:00 PM ', ['class' => 'form-check-label']) !!}
                </div>

                <hr size="30">

                <div class="form-check form-check-inline">
                    {{ Form::radio('hour', '15:30' , false) }}
                    {!! Form::label('hour', '3:30 PM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '16:00' , false) }}
                    {!! Form::label('hour', '4:00 PM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '16:30' , false) }}
                    {!! Form::label('hour', '4:30 PM ', ['class' => 'form-check-label']) !!}
                </div>

                <hr size="30">

                <div class="form-check form-check-inline">
                    {{ Form::radio('hour', '17:00' , false) }}
                    {!! Form::label('hour', '5:00 PM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '17:30' , false) }}
                    {!! Form::label('hour', '5:30 PM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '18:00' , false) }}
                    {!! Form::label('hour', '6:00 PM ', ['class' => 'form-check-label']) !!}
                </div>

                <hr size="30">

                <div class="form-check form-check-inline">
                    {{ Form::radio('hour', '18:30' , false) }}
                    {!! Form::label('hour', '6:30 PM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '19:00' , false) }}
                    {!! Form::label('hour', '7:00 PM ', ['class' => 'form-check-label']) !!}  

                    {{ Form::radio('hour', '19:30' , false) }}
                    {!! Form::label('hour', '7:30 PM ', ['class' => 'form-check-label']) !!}
                </div>

                <hr size="30">

                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('turns.index') }}" class="btn btn-secondary">Volver</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection