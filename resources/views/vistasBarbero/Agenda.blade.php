@extends('vistasBarbero.app')

@section('content')
    <div class="col-md-10 offset-md-2 mt-3 main cuerpo-dos">
        <div class="card mt-3 shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Agenda Del Barbero</h5>
                <hr size="30">
                <div id="CalendarioWeb">

                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#CalendarioWeb').fullCalendar({
                header:{
                    left: 'today,prev,next',
                    center: 'title',
                    right: 'month,basicWeek,basicDay,agendaWeek,agendaDay'
                },
                dayClick: function(date, jsEvent, view){
                    $('#txtFecha').val(date.format());
                    $("#modalEventos").modal();
                },

                events:[
                    <?php
                        foreach($events as $event){
                    ?>  
                        {
                            id:"<?php echo $event->id; ?>",
                            title: "<?php echo $event->title; ?>",
                            barber: "<?php echo $event->barber->name; ?>",
                            service: "<?php echo $event->turn->service->name; ?>",
                            customer: "<?php echo $event->turn->customer->name; ?>",
                            start: "<?php echo $event->turn->day; ?>",
                            hour: "<?php echo $event->turn->hour; ?>",
                            turn: "<?php echo $event->turn->id; ?>",
                            color: "<?php echo $event->color; ?>",
                            textColor: "<?php echo $event->textColor; ?>"
                        },
                    <?php
                    }
                    ?>
                ],

                eventClick: function(calEvent,jsEvent,view){
                    $('#tituloEvento').html(calEvent.title);
                    //
                    $('#txtBarber').val(calEvent.barber);
                    $('#txtCliente').val(calEvent.customer);
                    $('#txtService').val(calEvent.service);
                    $('#txtTitulo').val(calEvent.title);
                    $('#txtColor').val(calEvent.color);

                    //FechaHora= calEvent.start._i.split(" ");
                    $('#txtFecha').val(calEvent.start);//val(FechaHora[0]);
                    $('#txtHora').val(calEvent.hour)//val(FechaHora[1]);



                    $("#modalEventos").modal();
                }
            });
        })
    

    </script>

    <!-- Modal (Agregar, Modificar, Eliminar) -->
    <div class="modal fade" id="modalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloEvento"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="descripcionEvento"></div>
                    <div class="form-group mb-2">
                        <label for="titulo">Titulo</label>
                        <input type="text" placeholder="Titulo Del Evento" class="form-control" name="txtTitulo" id="txtTitulo">
                    </div>
                    <div class="form-group">
                        <label for="fechaTurno">Fecha</label>
                        <input type="text" placeholder="Fecha Del Turno" class="form-control" name="txtFecha" id="txtFecha">
                    </div>
                    <div class="form-group">
                        <label for="barber">Barbero</label>
                        <input type="text" placeholder="Nombre Del Barbero" class="form-control" name="txtBarber" id="txtBarber">
                    </div>
                    <div class="form-group">
                        <label for="service">Servicio</label>
                        <input type="text" placeholder="Nombre Del Servicio" class="form-control" name="txtService" id="txtService">
                    </div>
                    <div class="form-group">
                        <label for="hora">Hora</label>
                        <input type="text" placeholder="Hora Del Turno" class="form-control" name="txtHora" id="txtHora">
                    </div>
                    <div class="form-group">
                        <label for="client">Cliente</label>
                        <input type="text" placeholder="Nombre Del Cliente" class="form-control" name="txtCliente" id="txtCliente">
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="color" placeholder="Color Del Evento" class="form-control" name="txtColor" id="txtColor">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
                <button type="button" class="btn btn-warning">Modificar</button>
                <button type="button" class="btn btn-danger">Borrar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
    </div>
    <script>
        $('#btnAgregar').click(function(){

            var NuevoEvento= {
                title:$('#txtTitulo').val(),
                start:$('#txtFecha').val()+" "+$('#txtHora').val(),
                color:$('#txtColor').val(),
                cliente:$('#txtCliente').val(),
                barbero:$('#txtBarber').val(),
                servicio:$('#txtService').val(),
                textColor:"#FFFFFF"
            };
            $('#CalendarioWeb').fullCalendar('renderEvent',NuevoEvento );
            $("#modalEventos").modal('toggle');
        });

    </script>

@endsection