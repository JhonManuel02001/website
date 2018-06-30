<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>

<div class="container spacing-top">
	<div class="row">
		<div class="col-6 bg-info">

			<center>
				<h1 class="title-h1">METAL SLUG</h1>
				<figure>
					<img src="http://localhost/website/public/images/metalslug.png" class="img-email">
				</figure>
			</center>

		</div>
		<div class="col-6 bg-dark">
			<center>
			<fieldset>
					<legend> <h1 class="title-h1s">Formulario de Registro</h1></legend>
						<form name="register" method="post"  action="http://localhost/website/app/Http/Controllers/registrocontroller.php">

							<p>
								<select name="genre" id="bordecuadro" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input type="text" id="bordecuadro" name="nombre" placeholder="Nombre completo.." required>
							</p>
							<p>
								<input type="email" id="bordecuadro" name="correo" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input type="password" name="password" class="boton3" placeholder="Contraseña.." id="bordecuadro"
			pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
			onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres: 
			(Digitos, minúsculas, mayúsculas y símbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;"
			required>
							</p>
							<p>
								<input type="password" name="conf_pass" class="boton4" placeholder="Confirmar contraseña.." id="bordecuadro"
			pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
			onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Por favor, ingresa la misma contraseña de arriba' : '');"
			required>
							</p>
							<p>
								<input type="submit" id="bordecuadro" name="btn-register" value="Registrarse">
								<input type="reset" id="bordecuadro" value="Borrar Datos">
							</p>
						</form>
		  	</fieldset>		    
			<p><a href="http://localhost/website/views/front/login.php" class="registrado">!Ya Tengo Una Cuenta¡</a></p>
		</div>
		</center>
	</div>
</div>

<?php include ('views/front/templates/foot.php'); ?>