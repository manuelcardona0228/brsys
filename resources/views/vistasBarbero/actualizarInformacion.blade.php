@extends('vistasBarbero.app')

@section('content')

    <div class="col-md-10 offset-md-2 mt-3 main cuerpo-dos">
        <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Actualizar Información Personal</h5>
                <hr size="30">
                    <div class="card-body">
                    {!! Form::model($barber, [
                        'method' => 'PUT',
                        'route' => ['updateInformation', $barber->id]
                    ]) !!}
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
                        {!! Form::text('birthdate', null, ['class' => 'form-control']) !!}
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
                        {!! Form::label('headquarter_id', 'Sede', ['class' => 'control-label']) !!}
                        {!! Form::select('headquarter_id', $headquarters, $headquarters,['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="/inicioBarbero" class="btn btn-secondary">Volver</a>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection