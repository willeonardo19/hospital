<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pacientes</title>
</head>
<body>
	<table>
		<tr>
			<td><strong>Código de Paciente</strong></td>
			<td><strong>DPI</strong></td>
			<td><strong>Apellido</strong></td>
			<td><strong>Nombre</strong></td>
			<td><strong>Teléfono</strong></td>
			<td><strong>Fecha de Nacimiento</strong></td>
			<td><strong>Género</strong></td>
			<td><strong>Estado civil</strong></td>
			<td><strong>Religión</strong></td>
			<td><strong>Ocupación </strong></td>
			<td><strong>Dirección</strong></td>
			<td><strong>Contacto de Emergencia</strong></td>
			<td><strong>Teléfono de Emergencia</strong></td>
		</tr>
		@foreach($pacientes as $paciente)
		
		<tr>
			<td>{{$paciente->cod_pac}}</td>
			<td>{{$paciente->dpi}}</td>
			<td>{{$paciente->apellido}}</td>
			<td>{{$paciente->nombre}}</td>
			<td>{{$paciente->telefono}}</td>
			<td>{{$paciente->fechna}}</td>
			<td>{{$paciente->sexo}}</td>
			<td>{{$paciente->est_civ}}</td>
			<td>{{$paciente->religion}}</td>
			<td>{{$paciente->ocupacion}}</td>
			<td>{{$paciente->direccion}}</td>
			<td>{{$paciente->contacemer}}</td>
			<td>{{$paciente->contacttel}}</td>
			
			
		</tr>
		@endforeach
	</table>
	
</body>
</html>
