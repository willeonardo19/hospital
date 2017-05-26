<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p>
<img class="photo" src="img/logo_amg.jpg" alt="" align="left" /><br><br><br>
CENTRO MÉDICO CRISTIANO
"SEÑORITA ELENA"
</p>
<br>
<br>
<br>
<hr>

<p style="text-align: right;">Cubulco, Baja Verapaz, {{Carbon\Carbon::now()->format('d')}} de 

@if (Carbon\Carbon::now()->format('M')=='Jan')
	enero
@elseif (Carbon\Carbon::now()->format('M')=='Feb')
	febrero
@elseif (Carbon\Carbon::now()->format('M')=='Mar')
	marzo
@elseif (Carbon\Carbon::now()->format('M')=='Apr')
	abril
@elseif (Carbon\Carbon::now()->format('M')=='May')
	mayo
@elseif (Carbon\Carbon::now()->format('M')=='Jun')
	junio
@elseif (Carbon\Carbon::now()->format('M')=='Jul')
	julio
@elseif (Carbon\Carbon::now()->format('M')=='Aug')
	agosto
@elseif (Carbon\Carbon::now()->format('M')=='Sep')
	septiembre
@ielsef (Carbon\Carbon::now()->format('M')=='Oct')
	octubre
@elseif (Carbon\Carbon::now()->format('M')=='Nov')
	noviembre
@elseif (Carbon\Carbon::now()->format('M')=='Dec')
	diciembre	
@endif	


de {{Carbon\Carbon::now()->format('Y')}}</p>
<br>
<br>
<br>

<br>
<h3 align="center"><strong>CONSTANCIA MÉDICA</strong></h3>
<br>
<br>
<br>

<strong>A quien interese:</strong>

<p>Quien suscribe, médico tratante, certifica que examinó a: <strong>{!!$consulta->paciente->apellido.', '.$consulta->paciente->nombre!!}</strong>, documento de identificación personal número:<strong> {!!$consulta->paciente->dpi!!}</strong>, quien presenta: <strong>{!!$consulta->diagnostico->imp_clinica!!}</strong>. Se le indicó tratamiento y reposo por (X) días a partir de la presente fecha {{Carbon\Carbon::now()->format('d')}} de 
@if (Carbon\Carbon::now()->format('M')=='Jan')
	enero
@elseif (Carbon\Carbon::now()->format('M')=='Feb')
	febrero
@elseif (Carbon\Carbon::now()->format('M')=='Mar')
	marzo
@elseif (Carbon\Carbon::now()->format('M')=='Apr')
	abril
@elseif (Carbon\Carbon::now()->format('M')=='May')
	mayo
@elseif (Carbon\Carbon::now()->format('M')=='Jun')
	junio
@elseif (Carbon\Carbon::now()->format('M')=='Jul')
	julio
@elseif (Carbon\Carbon::now()->format('M')=='Aug')
	agosto
@elseif (Carbon\Carbon::now()->format('M')=='Sep')
	septiembre
@ielsef (Carbon\Carbon::now()->format('M')=='Oct')
	octubre
@elseif (Carbon\Carbon::now()->format('M')=='Nov')
	noviembre
@elseif (Carbon\Carbon::now()->format('M')=='Dec')
	diciembre	
@endif	
de {{Carbon\Carbon::now()->format('Y')}} debiendo volver a control el día (dia/mes/año).</p>

<p>Constancia que se expide a petición de la persona interesada.</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

Atentamente:


<p align="center">
@if($consulta->diagnostico->users->personal->sexo=='masculino')
	Dr. 
@else
	Dra.
@endif
{!!$consulta->diagnostico->users->personal->nombre.' '.$consulta->diagnostico->users->personal->apellido!!}<br>
<strong><label align="center">Médico General</label></strong>
</p>



</body>
</html>