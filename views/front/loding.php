<fieldset>
		<legend>Formulario de Ingreso</legend>
			 <form name="login" method="post"  action="http://localhost/werbsite/app/Http/Controllers/Auth/AuthController.php">
			 	 <p>
			 				<input type="email" name="correo_log" placeholder="Correo electronico.." required>
			 	 </p>
			 	 <p>
			 	 	 <input type="password" name="pass_log" placeholder="Contraseña.." required>
			 	 </p>
			 	 <p>

			 	 		<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
			 	 		<input type="hidden" name="correo" value="<?php echo $correo; ?>">
			 	 		<input type="hidden" name="password" value="<?php echo $password; ?>">

            
            <input type="submit" name="btn-loding" value="<?php echo $nombre; ?>">
            <input type="reset" value="Cancelar">
          </p>
       </form>
</fieldser>