@extends('vistasCliente.app')


@section('content')

    <div class="col-md-5 mt-5">  
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
                    <label for="service">Seleccione Dia</label>
                    <input type="text" name="birthday" class="form-control" value="10/24/1984" />
                </div>

                <script>
                $(function() {
                $('input[name="birthday"]').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    minYear: 1901,
                    maxYear: parseInt(moment().format('YYYY'),10)
                }, function(start, end, label) {
                    var years = moment().diff(start, 'years');
                    alert("You are " + years + " years old!");
                });
                });
                </script>

                <div class="form-group">
                    <label for="service">Seleccione Dia</label>
                    <input class="calendario form-control" date-date-format="d-m-y" />
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

                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('turns.index') }}" class="btn btn-secondary">Volver</a>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

    <div class="col-md-5 mt-5">
        <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <span><i class="fas fa-circle" style="color:blue"></i> <label for="nombre" class="text-primary">Disponibles</label></span>
                <span><i class="fas fa-circle" style="color:red"></i> <label for="nombre" class="text-danger">No Disponibles</label></span>
                <h4>Hora: </h4>
                <a href="#" class="btn btn-primary">8:00 AM</a>
                <a href="#" class="btn btn-primary">8:30 AM</a>
                <hr size="30">
                <a href="#" class="btn btn-danger">9:00 AM</a>
                <a href="#" class="btn btn-danger">9:30 AM</a>
                <hr size="30">
                <a href="#" class="btn btn-danger">10:00 AM</a>
                <a href="#" class="btn btn-primary">10:30 AM</a>
                
                <hr size="30">

                <a href="#" class="btn btn-outline-success pTurno-btn">Pedir Turno</a>
                <a href="#" class="btn btn-secondary vTurno-btn">Cancelar</a>

                
            </div>
        </div>
    </div>
@endsection