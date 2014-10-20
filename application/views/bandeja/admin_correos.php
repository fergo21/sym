<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../css/admin_correo.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
		<div id="contenedor">
		<center><span style="font-size:15px;color:yellow;"><?= $mensaje;?></span></center>
			<fieldset id="ventana1">
				<legend>Mensajeria en SAR-TIC</legend>
				<?= form_open("Sartic/correo") ?>
				<label class="etiq" for="nombre">Destino: </label>
				<select name="aquien">
				<?php foreach($usuarios->result() as $usuario):?>
					<option value="<?= $usuario->idusuario; ?>"><?= "$usuario->Nombre  $usuario->Apellido"; ?></option>
				<?php endforeach; ?>	
				</select>
				<br>
				<label class="etiq" for="nomdirector">Asunto: </label>
				<input type="text" name="asunto" placeholder="Escribe un asunto..." size="35"/>
				<br>
				<input type="hidden" name="quien" value="<?= $this->session->userdata['idusuario'];?>"/>
				<label class="etiq" for="nomdirector">Mensaje: </label>
				<textarea name="mensaje" rows="5" cols="50" placeholder="Escribe un mensaje..."></textarea> 
				<input type="hidden" name="fecha" value="<?= date("Y/m/d");?>"/>
				<br>
				<input type="submit" name="btncorreoenviar" value="enviar"/>
				</form>
			</fieldset>
			<fieldset id="ventana2">
				<legend>Opciones</legend>

			</fieldset>
		  </div>
			<fieldset id="ventana3">
				<legend>Correos: </legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>ID</th>
						<th>Remitente</th>
						<th>Asunto</th>
						<th>Mensaje</th>
						<th>Fecha</th>
						<th>Visto</th>
						<th><img src="../img/error.png"/> Eliminar</th>
					</tr>
				<?php foreach($correos->result() as $correo):?>
					<tr class="tablacuerpo">
						<th><?= $correo->idmensajeria; ?></th>
						<th><?= $correo->nombre; ?></th>
						<th><?= $correo->asunto; ?></th>
						<th id="mensajecuerpo"><?= $correo->mensaje; ?></th>
						<th><?= $correo->fecha; ?></th>
						<?php
							if($correo->visto==1)
							{
						?>
<th><?php echo anchor('Sartic/marcar_correo/'.$correo->idmensajeria,'<img src=../img/correomarcado.png />') ?></th>						
						<?php	
							}
							else
							{
						?>
<th><?php echo anchor('Sartic/marcar_correo/'.$correo->idmensajeria,'<img src=../img/correo.png />') ?></th>						
						<?php		
							}
						?>
	
						<th><?php echo anchor('Sartic/eliminar_correo/'.$correo->idmensajeria,'Eliminar') ?></th>
					</tr>
				<?php endforeach; ?>
				</table>
			</fieldset>

	</body>
</html>