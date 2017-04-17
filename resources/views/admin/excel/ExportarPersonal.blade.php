<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Personal</title>
</head>
<body>
	<table>
		<tr>
			<td><strong>nombre</strong></td>
			<td><strong>apellido</strong></td>
			<td><strong>telefono</strong></td>
			<td><strong>direccion</strong></td>
		</tr>
		@for($i=0;$i<10;$i++)
		<tr>
			<td>wilson</td>
			<td>leonardo</td>
			<td>123678</td>
			<td>aqui</td>
		</tr>
		@endfor
	</table>
	
</body>
</html>