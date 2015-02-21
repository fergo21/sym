<?php

?>
<html>
	<body>
	<?= form_open("index.php/Sym/validaradmin") ?>
				<label>Usuario</label><br>
				<input 	type="text" name="usuario"/>
				<br>
				<label>Clave</label><br>
				<input type="password" name="clave"/>
				<br>
				<input type="checkbox"/><label>Recordar password</label><br>
				<input type="submit" value="Entrar" name="btn_validar" />
				<button><a href="<?php echo site_url('index.php/Sym/muestraregistro') ?>" target="marco" style="text-decoration:none">Registrarse</a></button>
	</form>
	</body>
</html>