
$("#department_id").change(function(event){
    console.log($(this).val());
    $.get(`/city/${event.target.value}`, function(res, sta){
        console.log(res);
        $("#city_id").empty();
        $("#city_id").append("<option value=''>Seleccione una ciudad</option>");
        res.forEach(element => {
            $("#city_id").append(`<option value=${element.id}> ${element.name} <option/>`);
        });
    });
    //$.get("departments/cities/"+event.target.value+"",function(response, state){
     //   console.log(response);
     //   for(i=0; i < response.length; i++)
     //   {
        //    $("#city_id").append("<option value='"+response[i].id+"'> "+response[i].name+"</option>");
       // }
    //});
});
 /**
$("#department_id").change(event => {
    $.get(`/cities/${event.target.value}`, function(res, sta){
        $("#city_id").empty();
        console.log(res);
        res.forEach(element => {
            $("#city_id").append(`<option value=${element.id}> ${element.name} </option>`);
        });
    });
});
 */