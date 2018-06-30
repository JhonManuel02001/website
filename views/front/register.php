<?php include ('templates/head.php'); ?>

	<div class="container spacing-top">
		<div class="row">

			<div class="col-10 bg-secondary">
				<center>
				<fieldset>
					<legend>Formulario de Registro</legend>
						<form name="register" method="post"  action="http://localhost/website/app/Http/Controllers/registroController.php">
								<select name="genre" id="bordecuadro" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input type="text" name="nombre" placeholder="Nombre completo.." id="bordecuadro" required>
							</p>
							<p>
								<input type="email" name="correo" placeholder="Correo electronico.." id="bordecuadro" required>
							</p>
							<p>
								<input type="password" name="password" placeholder="Contraseña.." id="bordecuadro" required>
							</p>
							<p>
								<input type="password" name="conf_pass" placeholder="Confirmar contraseña.." id="bordecuadro" required>
							</p>
							<p>
								<input type="submit" name="btn-register" value="Registrar usuario" id="bordecuadro">
								<input type="reset" value="Limpiar datos" id="bordecuadro">
							</p>
						</form>
					</fieldset>
					</center>

			</div>

		</div>
	</div>

<?php include ('templates/foot.php'); ?>