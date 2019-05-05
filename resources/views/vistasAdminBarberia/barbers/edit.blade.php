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
        <h1 class="lines-effect mt-2">Editar Barbero</h1>
        <hr>

        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('Especifique la información del barbero a editar.') }}</div>
                <div class="card-body">
                {!! Form::model($barberAdmin, [
                    'method' => 'PUT',
                    'route' => ['barberAdmins.update', $barberAdmin->id]
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
                    {!! Form::label('qualification', 'Calificación', ['class' => 'control-label']) !!}
                    {!! Form::text('qualification', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('headquarter_id', 'Sede', ['class' => 'control-label']) !!}
                    {!! Form::select('headquarter_id', $headquarters, $headquarters,['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('barberAdmins.index') }}" class="btn btn-secondary">Volver</a>
                {!! Form::close() !!}

            </div>
    </div>

@endsection