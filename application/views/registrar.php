<?php

?>
<html>
<head>

</head>
<body>
	<fieldset id="Registrarse">
		<legend>Registrarse</legend>
		<?= form_open("index.php/Sym/muestraregistro") ?>
		<label for="nombre">Nombre</label><br>
		<input type="text" name="nombre"/>
		<?php if(form_error('nombre'))
		{
			echo "<img src='../../img/error.png'>";
		} ?><br>
		<label>Apellido</label><br>
		<input type="text" name="apellido"/><br>
		<label>Fecha de Nacimiento</label><br>
		<input type="date" name="fechadenacimiento"/><br>
		<label>Sexo</label><br>
		<input type="radio" name="sexo" value="masculino" /><label>Masculino</label><input type="radio" name="sexo" value="femenino"/><label>Fenenino</label><br>
		<label>DNI</label><br>
		<input type="text" name="dni"/> <label style="font-style:italic; color:red;"> Ej: 12345678</label><br> 
		<label>Email</label><br>
		<input type="text" name="email"/><br>
		<hr>
		<label>User</label><br>
		<input type="text" name="user"/><br>
		<label>Password</label><br>
		<input required="true" type="text" name="password"/>
		<br>
		<br>
		<center></center><input type="submit" value="Confirmar" /></center>
		
		</form>
		<hr>
		<label>Errores: </label>
		<?php echo validation_errors(); ?>
	</fieldset>
</body>
</html>