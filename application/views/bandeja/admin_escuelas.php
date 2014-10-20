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
				<legend>Registro de Nuevas Escuelas al Sistema SAR-TIC</legend>
				<?= form_open("Sartic/escuelas") ?>
				<label class="etiq" for="nombre">Nombre: </label>
				<input type="text" name="nombre" placeholder="Nombre de la Escuela" size="50"/>
				<br>
				<label class="etiq" for="nomdirector">Director: </label>
				<input type="text" name="nomdirector" placeholder="Nombre del Director" size="35"/>
				<br>
				<label class="etiq" for="nomvice">Vice-Director: </label>
				<input type="text" name="nomvice" placeholder="Nombre del Vice-Director" size="35"/>
				<br>
				<label class="etiq" for="telefono">Telefono: </label>
				<input type="text" name="telefono" placeholder="Numero Telefonico" size="30"/>
				<br>
				<label class="etiq" for="correo">Correo: </label>
				<input type="text" name="correo" placeholder="Direccion de Correo" size="35"/>
				<br>
				<input type="submit" name="btncargar" value="enviar"/>
				</form>
			</fieldset>
			<fieldset id="ventana2">
				<legend>Opciones</legend>

			</fieldset>
		  </div>
			<fieldset id="ventana3">
				<legend>Escuelas Registradas en el Sistema</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>ID</th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Director</th>
						<th><img src="../img/email 32x32.png"/> Correo</th>
						<th>Actualizar</th>
						<th><img src="../img/error.png"/> Eliminar</th>
					</tr>
				<?php foreach($escuelas->result() as $escuela):?>
				<?= form_open("Sartic/escuelas") ?>
					<tr class="tablacuerpo">
						<th><input type="text" name='idescuela' value="<?= $escuela->idescuela; ?>" size="1"/></th>
						<th><input type="text" name='nombre' value="<?= $escuela->nombre; ?>" size="60"/></th>
						<th><input type="text" name='telefono' value="<?= $escuela->telefono; ?>" size="8"/></th>
						<th><input type="text" name='director' value="<?= $escuela->director; ?>" size="20"/></th>
						<th><input type="text" name='correo' value="<?= $escuela->correo; ?>" size="10"/></th>
						<th><input type="submit" name="btnactualizarcampos" value="Modificar"/></th>
				</form>
						<th><?php echo anchor('Sartic/escuela_borrar/'.$escuela->idescuela,'Eliminar') ?></th>
					</tr>

				<?php endforeach; ?>
				</table>
			</fieldset>

	</body>
</html>