<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../css/admin_escuelas.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
		<div id="contenedor">
			<fieldset id="ventana1">
				<legend>Registro de Proveedores en SAR-TIC</legend>
				<?= form_open("Sartic/proveedores") ?>
				<label class="etiq" for="nombre">Nombre: </label>
				<input type="text" name="nombre" placeholder="Nombre del Proveedor" size="50"/>
				<br>
				<label class="etiq" for="telefono">Telefono: </label>
				<input type="text" name="telefono" placeholder="Numero Telefonico" size="30"/>
				<br>
				<label class="etiq" for="correo">Correo: </label>
				<input type="text" name="correo" placeholder="Direccion de Correo" size="35"/>
				<br>
				<input type="submit" name="enviar" value="enviar"/>
				</form>
			</fieldset>
			<fieldset id="ventana2">
				<legend>Opciones</legend>

			</fieldset>
		  </div>
			<fieldset id="ventana3">
				<legend>Proveedores Registrado en el Sistema</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>ID</th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th><img src="../img/email 32x32.png"/> Correo</th>
						<th><img src="../img/error.png"/> Eliminar</th>
					</tr>
				<?php foreach($proveedores->result() as $proveedor):?>
					<tr class="tablacuerpo">
						<th><?= $proveedor->idproveedor; ?></th>
						<th><?= $proveedor->nombre; ?></th>
						<th><?= $proveedor->telefono; ?></th>
						<th><?= $proveedor->correo; ?></th>
						<th><?php echo anchor('Sartic/proveedor_borrar/'.$proveedor->idproveedor,'Eliminar') ?></th>
					</tr>
				<?php endforeach; ?>
				</table>
			</fieldset>
	</body>
</html>