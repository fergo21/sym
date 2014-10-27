<?php

?>
<html>
<head>

</head>
<body>
	<fieldset id="Registrarse">
		<legend>Registrarse</legend>
		<form>
		<label>Nombre</label><br>
		<input type="text" name="nombre"/><br>
		<label>Apellido</label><br>
		<input type="text" name="apellido"/><br>
		<label>Fecha de Nacimiento</label><br>
		<input type="date" name="fechadenacimiento"/><br>
		<label>Sexo</label><br>
		<input type="radio" name="sexo" value="masculino" /><label>Masculino</label><input type="radio" name="sexo" value="femenino"/><label>Fenenino</label><br>
		<label>DNI</label><br>
		<input type="text" name="dni"/> <label style="font-style:italic; color:red;"> Ej: 12345678</label><br> 
		<label>Mail</label><br>
		<input type="text" name="mail"/><br>
		<hr>
		<label>User</label><br>
		<input type="text" name="user"/><br>
		<label>Password</label><br>
		<input type="text" name="password"/>
		<br>
		<br>
		<center></center><input type="button" value="Confirmar" /></center>
		</form>
	</fieldset>
</body>
</html>