<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Personal</title>
</head>
<body>
	<table>
		<tr>
			<td><strong>Apellido</strong></td>
			<td><strong>Nombre</strong></td>
			<td><strong>Teléfono</strong></td>
			<td><strong>Dirección</strong></td>
			<td><strong>Fecha de Nacimiento</strong></td>
			<td><strong>Género</strong></td>
			<td><strong>DPI</strong></td>
			<td><strong>Contacto de Emergencia</strong></td>
			<td><strong>Teléfono de Emergencia</strong></td>
		</tr>
		@foreach($personal as $persona)
		
		<tr>
			<td>{{$persona->apellido}}</td>
			<td>{{$persona->nombre}}</td>
			<td>{{$persona->telefono}}</td>
			<td>{{$persona->direccion}}</td>
			<td>{{$persona->fechna}}</td>
			<td>{{$persona->sexo}}</td>
			<td>{{$persona->dpi}}</td>
			<td>{{$persona->contacemer}}</td>
			<td>{{$persona->contacttel}}</td>
			
			
		</tr>
		@endforeach
	</table>
	
</body>
</html>