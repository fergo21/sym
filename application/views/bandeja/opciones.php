<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../css/admin_opciones.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
		<div id="contenedor">
			<center><span style="font-size:11px;color:yellow;"><?= $mensaje;?></span></center>
			<fieldset id="ventana1">
				<legend>Actualizar Mis datos personales</legend>
				<?php foreach($usuario->result() as $midato){?>
				<?= form_open("Sartic/opciones") ?>
				<input type="hidden" name="id" value="<?=$midato->idusuario; ?>"/>
				<label class="etiq" for="nombre">Nombre: </label>
				<input type="text" name="nombre" placeholder="Escribe tu nombre" size="50" value="<?=$midato->Nombre; ?>"/>
				<br>
				<label class="etiq" for="nombre">Apellido: </label>
				<input type="text" name="apellido" placeholder="Escribe tu apellido" size="50" value="<?=$midato->Apellido; ?>"/>
				<br>
				<label class="etiq" for="nombre">D.N.I: </label>
				<input type="text" name="dni" placeholder="Escribe tu DNI" size="50" value="<?=$midato->dni; ?>"/>
				<br>
				<label class="etiq" for="nombre">Fecha de Nacimiento: </label>
				<input type="date" name="fecha_nac" placeholder="Escribe tu Fecha de Nacimiento" size="50" value="<?=$midato->fecha_nac; ?>"/>
				<br><br>
				<label class="etiq" for="nombre">Domicilio: </label>
				<input type="text" name="domicilio" placeholder="Escribe tu domicilio" size="50" value="<?=$midato->domicilio; ?>"/>
				<br>
				<label class="etiq" for="nombre">Edad: </label>
				<input type="text" name="edad" placeholder="Escribe tu edad" size="50" value="<?=$midato->edad; ?>"/>
				<br>	
				<label class="etiq" for="nombre">Sexo: </label>
				<input type="text" name="sexo" placeholder="Escribe tu sexo" size="50" value="<?=$midato->sexo; ?>"/>
				<br>														
				<input type="submit" name="btnactualizar_datos" value="Actualizar Informacion"/>
				</form>
				<?php } ?>
			</fieldset>
			<fieldset id="ventana2">
				<legend>Opciones</legend>
				<?php foreach($login->result() as $midatologin){?>
				<?= form_open("Sartic/opciones") ?>
				<input type="hidden" name="id" value="<?=$midatologin->idusuario; ?>"/>
				<label class="etiq" for="nombre">Uuario: </label>
				<input type="text" name="usuario" placeholder="Escribe tu usuario" size="30" value="<?=$midatologin->user; ?>"/>
				<br>
				<label class="etiq" for="nombre">Clave: </label>
				<input type="text" name="clave" placeholder="Escribe tu clave" size="30" value="<?=$midatologin->pass; ?>"/>
				<br>
										
				<input type="submit" name="btnactualizar_datos_login" value="Actualizar Informacion de Logeo"/>
				</form>
				<?php } ?>
			</fieldset>
		  </div>


	</body>
</html>