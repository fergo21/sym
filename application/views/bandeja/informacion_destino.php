<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../../css/informacion_destino.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
			<fieldset id="ventana3">
				<legend>Informacion del Destino</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>Codigo</th>
						<th>Tecnico</th>
						<th>Escuela</th>
						<th>Turno</th>
						<th>Puesto</th>
					</tr>
					<tr class="tablacuerpo">
						<th><?= $destino->row()->iddestino; ?></th>
						<th><?= $usuario->row()->Nombre." ".$usuario->row()->Apellido; ?></th>
						<th><?= $escuela->row()->nombre; ?></th>
						<th><?= $destino->row()->turno; ?></th>
						<th><?= $destino->row()->puesto; ?></th>
					</tr>
				</table>
				<?= form_open("Sartic/informacion_destino/".$destino->row()->iddestino) ?>
					<br>
					<?php
						if($alertabtn==0)
						{
					?>
						<input type="submit" name="btnconfirmar" value="CONFIRMAR: ASIGNAR RECURSOS A DESTINO"/>
					<?php
						}
					?>
					<br>
					<label class="etiq" for="nombre">Confirmacion de Recursos: </label>
					<span style="font-size:11px;color:red;"><?= $mensaje;?></span>
	
				</form>
			</fieldset>	
			<fieldset id="ventanadatos">
				<legend>Asignar Recursos al Destino:</legend>
					<?= form_open("Sartic/informacion_destino/".$destino->row()->iddestino) ?>
					<input type="hidden" name="codigodestino" value="<?= $destino->row()->iddestino; ?>"/>
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
					<br>
					<input type="submit" name="btnrecurso" value="Asignar"/>
				</form>
			</fieldset>
			<fieldset id="ventanadatos2">
				<legend>Asignar Tareas al Destino:</legend>
					<?= form_open("Sartic/informacion_destino/".$destino->row()->iddestino) ?>
					<input type="hidden" name="codigodestino" value="<?= $destino->row()->iddestino; ?>"/>
					<label class="etiq" for="nombre">Tarea: </label>
					<input type="text" name="nombre" placeholder="Nombre de la Tarea..." size="35"/>
					<br>
					<label class="etiq" for="nombre">Fecha: </label>
					<input type="date" name="fecha" placeholder="Fecha de Inicio..." size="15"/>
					<br>
					<label class="etiq" for="nombre">Lugar: </label>
					<input type="text" name="lugar" placeholder="Indique Lugar..."/>
					<br>
					<label class="etiq" for="nombre">Hora inicio: </label> 
					<input type="time" name="hora_inicio" placeholder="Indique Hora..." size="15"/>
					Hora Fin:
					<input type="time" name="hora_fin" placeholder="Indique Hora..." size="15"/>
					<br>					
					<label class="etiq" for="nombre">Descripcion: </label>
					<input type="text" name="descripcion" placeholder="Indique una Descripcion"/>
					<br>
					<input type="submit" name="btntarea" value="Asignar"/>
				</form>
			</fieldset>
			<fieldset id="ventana5">
				<legend>Tareas Otorgadas al Destino:</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>Nombre</th>
						<th>Fecha</th>
						<th>Lugar</th>
						<th>Hora Inicio</th>
						<th>Hora Fin</th>
						<th><img src="../../img/error.png"/>Eliminar</th>
					</tr>
				<?php foreach($tareas->result() as $tarea):?>
					<tr class="tablacuerpo">
						<th><?= $tarea->nombre; ?></th>
						<th><?= $tarea->fecha; ?></th>
						<th><?= $tarea->lugar; ?></th>
						<th><?= $tarea->hora_inicio; ?></th>
						<th><?= $tarea->hora_fin; ?></th>
						<th><?php echo anchor('Sartic/tarea_destino_borrar/'.$tarea->idtarea.'/'.$tarea->iddestino,'Eliminar') ?></th>
					</tr>
				<?php endforeach; ?>				
				</table>
			</fieldset>							
			<fieldset id="ventana5">
				<legend>Recursos Otorgados al Destino:</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>Escuela(destino)</th>
						<th>Recurso</th>
						<th>Cantidad</th>
						<th><img src="../../img/error.png"/>Eliminar</th>
					</tr>
				<?php foreach($misrecursos->result() as $recurso):?>
					<tr class="tablacuerpo">
						<th><?= $escuela->row()->nombre; ?></th>
						<th><?= $recurso->nomrec?></th>
						<th><?= $recurso->cant ?></th>
						<th><?php echo anchor('Sartic/recurso_destino_borrar/'.$recurso->transaccion.'/'.$destino->row()->iddestino,'Eliminar') ?></th>
					</tr>
				<?php endforeach; ?>				
				</table>
			</fieldset>
		

	</body>
</html>