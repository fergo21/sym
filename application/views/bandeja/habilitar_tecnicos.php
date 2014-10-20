<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../css/habilitar_tecnicos.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
			<fieldset id="ventana3">
				<legend>Informacion de los Tecnicos Registrados en el Sistema</legend>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>Id</th>
						<th>Tecnico</th>
						<th>DNI</th>
						<th>Edad</th>
						<th>Sexo</th>
						<th>Usuario</th>
						<th>Password</th>
						<th><img src="../img/conectarse.png" /> Activo(0=NO)</th>
					</tr>
				<?php foreach($usuarios->result() as $usuario):?>
					<tr class="tablacuerpo">
						<th><?= $usuario->idusuario; ?></th>
						<th><?= $usuario->Nombre.' '.$usuario->Apellido;?></th>
						<th><?= $usuario->dni; ?></th>
						<th><?= $usuario->edad; ?></th>
						<th><?= $usuario->sexo; ?></th>
						<th><?= $usuario->user; ?></th>
						<th><?= $usuario->pass; ?></th>
						<th><?= $usuario->activo; ?></th>
						<th><?php echo anchor('Sartic/activar_tecnico/'.$usuario->idusuario.'/'.$usuario->activo,'Activar/Desactivar') ?></th>
					</tr>
				<?php endforeach; ?>
				</table>
			</fieldset>	


	</body>
</html>