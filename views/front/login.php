<?php include ('templates/head.php'); ?>

	<div class="container spacing-top">
		<div class="row">

			<div class="col-10 bg-info" id="borde">
				<center>
				<fieldset>
					<legend>Formulario de Ingreso</legend>
						<form name="login" method="post"  action="http://localhost/website/app/Http/Controllers/Auth/AuthController.php">
							<p>
								<input type="email" id="bordecuadro" name="correo_log" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input type="password" id="bordecuadro" name="pass_log" placeholder="Contraseña.." required>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="password" value="<?php echo $password; ?>">

								<input type="submit" name="btn-login" value="Ingresar" id="bordecuadro">
								<input type="reset" value="Cancelar" id="bordecuadro">
							</p>
						</form>
					</fieldset>
					</center>

			</div>

		</div>
	</div>

<?php include ('templates/foot.php'); ?>