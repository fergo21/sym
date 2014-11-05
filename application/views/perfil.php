<?php

?>
	

<head>

</head>
<body>
<?php foreach($informacion->result() as $dato) {?>
	<fieldset id="Registrarse">
		<legend>Informacion de Perfil</legend>
		<?= form_open("index.php/Sym/muestraperfil") ?>
		<label>Nombre</label><br>
		<input type="text" name="nombre" value="<?php echo"$dato->nombre"; ?>"/><br>
		<label>Apellido</label><br>
		<input type="text" name="apellido" value="<?php echo"$dato->apellido"; ?>"/><br>
		<label>Fecha de Nacimiento</label><br>
		<input type="date" name="fechadenacimiento" value="value="<?php echo"$dato->fecha_de_nacimiento"; ?>""/><br>
		<label>Sexo</label><br>
		<input type="radio" name="sexo" value="masculino" /><label>Masculino</label><input type="radio" name="sexo" value="femenino"/><label>Fenenino</label><br>
		<label>DNI</label><br>
		<input type="text" name="dni" value="<?php echo"$dato->dni"; ?>"/> <label style="font-style:italic; color:red;"> Ej: 12345678</label><br> 
		<label>Email</label><br>
		<input type="text" name="email" value="<?php echo"$dato->mail"; ?>"/><br>
		<hr>
		<label>Password</label><br>
		<input type="text" name="password" value="<?php echo"$dato->clave"; ?>"/>
		<br>
		<br>
		<center></center><input type="submit" value="Modificar" /></center>
		
		</form>
	</fieldset>
<?php }?>
</body>
</html>
</html>