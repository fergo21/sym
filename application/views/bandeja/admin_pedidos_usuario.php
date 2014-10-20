<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../css/admin_pedido_usuario.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
			<fieldset id="ventana5">
				<legend>Insumos en Destino:</legend>
				<center><span style="font-size:13px;color:green;"><?= $mensaje;?></span></center>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>Escuela</th>
						<th>Id Insumo</th>
						<th>Insumo</th>
						<th>Cantidad</th>
						<th>Faltantes</th>
						<th>Rotos</th>
						<th>Buenos</th>	
						<th>-</th>
						<th><img src="../img/loading.gif"/>Modificar</th>	
						<th>Cantidad a Pedir</th>					
						<th><img src="../img/error.png"/>Cargar Pedido</th>
					</tr>
				<?php foreach($pedidos->result() as $pedido):?>
					<tr class="tablacuerpo">
					<?= form_open("Sartic/pedido_usuario_tecnico") ?>
						<th><?= $pedido->nomesc; ?></th>
						<th><?= $pedido->idinsumo; ?></th>
						<th><?= $pedido->nomins; ?></th>
						<input type="hidden" name="iditem" value="<?= $pedido->iditem; ?>"/>
						<th><input type="text" name="cantidad" value="<?= $pedido->cantidad; ?>" size="3"/></th>
						<th><input type="text" name="faltantes" value="<?= $pedido->faltantes; ?>" size="3"/></th>
						<th><input type="text" name="rotos" value="<?= $pedido->rotos; ?>" size="3"/></th>
						<th><input type="text" name="buenos" value="<?= $pedido->buenos; ?>" size="3"/></th>
						<th>-</th>
						<th><input type="submit" name="btnmodificapedido" value="Modificar" size="3"/></th>
					</form>
					<?= form_open("Sartic/pedido_usuario_tecnico") ?>
						<input type="hidden" name="idinsumo" value="<?= $pedido->idinsumo; ?>"/>
						
						<input type="hidden" name="idusuario" value="<?= $this->session->userdata['idusuario']; ?>"/>
						<th><input type="text" name="cantidad_pedir" size="3"/></th>
						<th><input type="submit" name="btnpedido" value="Pedir" size="3"/></th>
					</form>
					</tr>
				<?php endforeach; ?>				
				</table>
			</fieldset>							
			<fieldset id="ventana5">
				<legend>Lista Previa A confirmarPedidos:</legend>
				<center><span style="font-size:13px;color:green;"><?= $mensaje;?></span></center>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>ID Pedido</th>
						<th>Usuario</th>
						<th>Insumo</th>
						<th>Cantidad</th>
						<th>Fecha</th>
						<th>Descripcion</th>
						<th><img src="../img/error.png"/>Eliminar</th>
					</tr>
				<?php foreach($pedidoespera->result() as $objetopedido):?>
					<tr class="tablacuerpo">
						<th><?= $objetopedido->idpedidos; ?></th>
						<th><?php echo anchor('Sartic/tecnicos',$objetopedido->nomuser.' '.$objetopedido->nomape) ?></th>
						<th><?= $objetopedido->nomisu; ?></th>
						<th><?= $objetopedido->cantidad; ?></th>
						<th><?= $objetopedido->fecha; ?></th>
						<th><?= $objetopedido->descripcion; ?></th>
						<th><?php echo anchor('Sartic/eliminar_pedidos/'.$objetopedido->idpedidos,'Eliminar') ?></th>
					</form>
					</tr>
				<?php endforeach; ?>				
				</table>
				
			</fieldset>	


	</body>
</html>