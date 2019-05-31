
$("#barbershop_id").change(function(event){
    console.log($(this).val());
    $.get(`/headquarter/${event.target.value}`, function(res, sta){
        console.log(res);
        $("#headquarter_id").empty();
        $("#headquarter_id").append("<option value=''>Seleccione Una Sede</option>");
        res.forEach(element => {
            $("#headquarter_id").append(`<option value=${element.id}> ${element.businessName} <option/>`);
        });
    });
});