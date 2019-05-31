$("#barbershop_id").change(function(event){
    console.log($(this).val());
    $.get(`/service/${event.target.value}`, function(res, sta){
        console.log(res);
        $("#service_id").empty();
        $("#service_id").append("<option value=''>Seleccione Un Servicio</option>");
        res.forEach(element => {
            $("#service_id").append(`<option value=${element.id}> ${element.name} ${element.value} <option/>`);
        });
    });
});