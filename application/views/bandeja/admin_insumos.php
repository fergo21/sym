<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../css/admin_insumos.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
		<div id="contenedor">
			<fieldset id="ventana1">
				<legend>Registro de Insumos en SAR-TIC</legend>
				<?= form_open("Sartic/insumos") ?>
				<label class="etiq" for="nombre">Nombre: </label>
				<input type="text" name="nombre" placeholder="Nombre del insumo" size="50"/>
				<br>
				<label class="etiq" for="nomdirector">Proveedor: </label>
				<select name="proveedor">
				<?php foreach($proveedores->result() as $proveedor):?>
					<option value="<?= $proveedor->idproveedor; ?>"><?= $proveedor->nombre; ?></option>
				<?php endforeach; ?>	
				</select>
				<br>
				<label class="etiq" for="nomvice">Categoria: </label>
				<select name="categoria">
				<?php foreach($categorias->result() as $categoria):?>
					<option value="<?= $categoria->idcategoria; ?>"><?= $categoria->nombre; ?></option>
				<?php endforeach; ?>	
				</select>
				<br>
				<label class="etiq" for="telefono">Recurso: </label>
				<select name="recurso">
				<?php foreach($recursos->result() as $recurso):?>
					<option value="<?= $recurso->idrecurso; ?>"><?= $recurso->nombre; ?></option>
				<?php endforeach; ?>	
				</select>
				<br>
				<input type="submit" name="btninsumo" value="enviar"/>
				</form>
			</fieldset>
			<fieldset id="ventana2">
				<legend>Registrar Recurso</legend>
				<?= form_open("Sartic/insumos") ?>
				<label class="etiq" for="nombre">Nombre: </label>
				<input type="text" name="nombre" placeholder="Nombre del Recurso" size="50"/>
				<br>
				<input type="submit" name="btnrecurso" value="enviar"/>
				</form>
			</fieldset>
			<fieldset id="ventana2">
				<legend>Registrar Categoria</legend>
				<?= form_open("Sartic/insumos") ?>
				<label class="etiq" for="nombre">Nombre: </label>
				<input type="text" name="nombre" placeholder="Nombre de la Categoria" size="50"/>
				<br>
				<input type="submit" name="btncategoria" value="enviar"/>
				</form>
			</fieldset>
		  </div>
			<fieldset id="ventana3">
				<legend>Insumos Registrados</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>ID</th>
						<th>Nombre</th>
						<th>Proveedor</th>
						<th>Categoria</th>
						<th>Recurso</th>
						<th><img src="../img/error.png"/> Eliminar</th>
					</tr>
				<?php foreach($insumos->result() as $insumo):?>
					<tr class="tablacuerpo">
						<th><?= $insumo->idinsumo; ?></th>
						<th><?= $insumo->nomins; ?></th>
						<th><?= $insumo->nomprov; ?></th>
						<th><?= $insumo->nomcat; ?></th>
						<th><?= $insumo->nomrec; ?></th>
						<th><?php echo anchor('Sartic/insumo_borrar/'.$insumo->idinsumo,'Eliminar') ?></th>
					</tr>
				<?php endforeach; ?>
				</table>
			</fieldset>
			<fieldset id="ventana5">
				<legend>Categorias</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>ID</th>
						<th>Nombre</th>
						<th><img src="../img/error.png"/> Eliminar</th>
					</tr>
				<?php foreach($categorias->result() as $categoria):?>
					<tr class="tablacuerpo">
						<th><?= $categoria->idcategoria; ?></th>
						<th><?= $categoria->nombre; ?></th>
						<th><?php echo anchor('Sartic/categoria_borrar/'.$categoria->idcategoria,'Eliminar') ?></th>
					</tr>
				<?php endforeach; ?>
				</table>
			</fieldset>
			<fieldset id="ventana5">
				<legend>Recursos</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>ID</th>
						<th>Nombre</th>
						<th><img src="../img/error.png"/> Eliminar</th>
					</tr>
				<?php foreach($recursos->result() as $recurso):?>
					<tr class="tablacuerpo">
						<th><?= $recurso->idrecurso; ?></th>
						<th><?= $recurso->nombre; ?></th>
						<th><?php echo anchor('Sartic/recurso_borrar/'.$recurso->idrecurso,'Eliminar') ?></th>
					</tr>
				<?php endforeach; ?>
				</table>
			</fieldset>

	</body>
</html>