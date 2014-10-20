<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../css/admin_tec.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
			<fieldset id="ventana1">
				<legend>Adminstrar un Tecnico</legend>
				<?= form_open("Sartic/tecnicos") ?>
				<label class="etiq" for="nombre">Tecnico: </label>
				<select name="usuario">
				<?php foreach($usuarios->result() as $usuario):?>
					<option value="<?= $usuario->idusuario; ?>"><?= "$usuario->Nombre  $usuario->Apellido"; ?></option>
				<?php endforeach; ?>	
				</select>
				<br>
				<label class="etiq" for="nomdirector">Escuelas: </label>
				<select name="escuela">
				<?php foreach($escuelas->result() as $escuela):?>
					<option value="<?= $escuela->idescuela; ?>"><?= $escuela->nombre; ?></option>
				<?php endforeach; ?>	
				</select>
				<br>
				<label class="etiq" for="nomvice">Fecha Ingreso: </label>
				<input type="date" name="fecha_ing" />	
				<br><br>
				<label class="etiq" for="nomvice">Turno: </label>
				<select name="turno">
					<option value="Mañana">Mañana</option>
					<option value="Tarde">Tarde</option>
				</select>
				<br>
				<label class="etiq" for="nomvice">Puesto: </label>
				<input type="text" name="puesto" placeholder="Indique Puesto"  />	
				<br>
				<input type="submit" name="btntecnico" value="Agregar"/>
				</form>
			</fieldset>
			
			<fieldset id="ventanadatos">
				<legend>Asignar Recursos al Tecnico:</legend>
					<?= form_open("Sartic/tecnicos") ?>
					<label class="etiq" for="nombre">Tecnico: </label>
					<select name="usuario">
					<?php foreach($usuarios->result() as $usuario):?>
						<option value="<?= $usuario->idusuario; ?>"><?= "$usuario->Nombre  $usuario->Apellido"; ?></option>
					<?php endforeach; ?>	
					</select>
					<br>
					<label class="etiq" for="nombre">Recurso: </label>
					<select name="recurso">
					<?php foreach($recursos->result() as $recurso):?>
						<option value="<?= $recurso->idrecurso; ?>"><?= "$recurso->nombre"; ?></option>
					<?php endforeach; ?>	
					</select>
					<br>
					<label class="etiq" for="nombre">Cantidad Otorgada: </label>
					<input type="text" name="cantidad" placeholder="Asignar Cantidad" size="15"/>
					<br><br>
					<label class="etiqs" for="nomvice">Fecha Ingreso: </label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="fecha_ing" />	
					<br>
					<label class="etiqs" for="nomvice">Fecha de Devolucion: </label>
					<input type="date" name="fecha_dev" />	
					<br>
					<input type="submit" name="btnrecurso" value="Asignar"/>
				</form>
			</fieldset>
			<fieldset id="ventana3">
				<legend>Datos de Tecnico - Destino</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>Destino</th>
						<th>Nombre y Apellido</th>
						<th>Escuela</th>
						<th>Turno</th>
						<th>Recursos en Destino</th>
						<th><img src="../img/error.png"/> Eliminar</th>
					</tr>
				<?php foreach($destinos->result() as $destino):?>
					<tr class="tablacuerpo">
						<th><?= $destino->iddestino; ?></th>
						<th><?= "$destino->nomtec $destino->apetec"; ?></th>
						<th><?= $destino->nomesc; ?></th>
						<th><?= $destino->turno; ?></th>
						<th><?php echo anchor('Sartic/info_destino/'.$destino->iddestino,'VER') ?></th>
						<th><?php echo anchor('Sartic/destino_borrar/'.$destino->iddestino,'Eliminar') ?></th>
					</tr>
				<?php endforeach; ?>
				</table>
			</fieldset>
			<fieldset id="ventana5">
				<legend>Recursos en los Tecnicos</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>ID</th>
						<th>Nombre y Apellido</th>
						<th>Recurso</th>
						<th>Cantidad</th>
						<th><img src="../img/error.png"/>Eliminar</th>
						<th>Asignar Recurso</th>
					</tr>
				<?php foreach($recursos_usuarios->result() as $datosuser):?>
				<?= form_open("Sartic/tecnicos/".$datosuser->idusuario) ?>
					<tr class="tablacuerpo">
						<th><?= $datosuser->idusuario; ?></th>
						<th><?= "$datosuser->nomuser $datosuser->nomape"; ?></th>
						<th><?= $datosuser->nomrec; ?></th>
						<th><?= $datosuser->cantidad; ?></th>
						<th><?php echo anchor('Sartic/recurso_user_borrar/'.$datosuser->idusuario.'/'.$datosuser->transaccion.'/'.$datosuser->cantidad,'Eliminar') ?></th>
						
						<?php
							if($datosuser->asignado==1)
							{
						?>
						<th>Ya Asignado</th>
						<?php	
							}
							else
							{
						?>
						<th><input type="submit" name="btnconfirmarasignar" value="Asignar Recurso"/></th>
						<?php		
							}
							
						?>
						
					</tr>
				</form>
				<?php endforeach; ?>
				</table>
			</fieldset>
	

	</body>
</html>