<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
</head>
<body>
	<table>
		<tr>
			<td><strong>Usuario</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Rol</strong></td>
			<td><strong>Asignado a</strong></td>
		</tr>
		@foreach($usuarios as $user)
		<tr>
			<td>{{$user->user}}</td>
			<td>{{$user->email}}</td>
			@if($user->type=='admin')
				<td>{{'Leosoftadmin'}}</td>
			@elseif($user->type=='administracion')
				<td>{{'Administración'}}</td>
			@elseif($user->type=='doctor')
				<td>{{'Doctor'}}</td>
			@elseif($user->type=='enfermera')
				<td>{{'Enfermera'}}</td>
			@elseif($user->type=='laboratorio')
				<td>{{'Laboratorio'}}</td>
			@elseif($user->type=='secretaria')
				<td>{{'Secretaria'}}</td>
			@elseif($user->type=='member')
				<td>{{'Equipo'}}</td>
			@endif
			<td>{{$user->personal->nombre.','.$user->personal->nombre}}</td>
		</tr>
		@endforeach
	</table>
	
</body>
</html>