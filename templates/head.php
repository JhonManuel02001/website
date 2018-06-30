<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Registro</title>
</head>
<body>
<center>
<nav>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<select name="menu">
			<option value="inicio">Inicio</option>
			<option value="acerca">Acerca</option>
			<option value ="registrarse">Registrarse</option>
			<option value="login">Login</option>
			<option value="sistema" selected>Manú del Sistema..</option>
		</select>
		<input type="submit" name="btn-menu" value="confirmar menú">	
	</form>
</nav>

<h1>SISTEMA DE PRUEBAS WEBS</h1>
</center>