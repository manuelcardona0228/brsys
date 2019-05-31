$("#headquarter_id").change(function(event){
    console.log($(this).val());
    $.get(`/barber/${event.target.value}`, function(res, sta){
        console.log(res);
        $("#barber_id").empty();
        $("#barber_id").append("<option value=''>Seleccione un barbero</option>");
        res.forEach(element => {
            $("#barber_id").append(`<option value=${element.id}> ${element.name} ${element.lastName} <option/>`);
        });
    });
});