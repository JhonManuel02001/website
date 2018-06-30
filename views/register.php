<fieldset>
<legend>Formulario De Registro</legend>
<form name="register" method="post"  action="http://localhost/website/app/Http/Controllers/registrocontroller.php">
		<input type="text" name="nombre" placeholder="Nombre Completo:" required>
	</p>
	<p>
		<input type="email" name="correo" palceholder="Correo electronico:" required>
	</p>
		<input type="pasword" name="password" palceholder="Contraseña:" required>
	</p>
	<p>
	<input type="password" name="conf_pass" placeholder="Confirmar Contraseña:" required>
	</p>

	<p>
	<input type="submit" name="btn-register" value="Registrar Usuario">
	<input type="reset" value="Limpiar datos">
	</p>	
</form>	
</fieldset>