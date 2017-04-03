/*$("#departamento").change(function(event){
	$.get("municipios/"+event.target.value+"",function(response,departamento){
		$("#municipio").empty();
		for(i=0; i<response.length; i++){
			$("#municipio").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
//			console.log(response[i].id+response[i].nombre);
		}
	});
});
*/

$("#departamento").change(event	=>{
	$.get(`municipios/${event.target.value}`,function(response,departamento){
		$("#municipio").empty();
		response.forEach(element	=>{
			$("#municipio").append(`<option value=${element.id}> ${element.nombre} </option>`);
		});
	});
});

