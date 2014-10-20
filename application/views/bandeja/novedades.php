<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../css/novedades.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
		<div id="contenedor">
			<div id="encabezado">
				<img src="../img/banner.jpg"/>
			</div>
			<br><br>
			<div id="cuerpo">
			<?php foreach($tareas->result() as $tarea):?>
				<div class="novedad">
					<div id="logo_novedad">
						<img src="../img/icono-novedad.jpg"/>
					</div>
					
					<div id="tabla_novedad">
						<table border="0" width="100%">
							<tr>
								<td colspan="2" align="center" class="titulo"><?= $tarea->nombre; ?></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><?= $tarea->lugar.' - '.$tarea->nomesc; ?></td>
							</tr>		
							<tr>
							<?php 
								/*list($y,$m,$y)=explode("/",$tarea->fecha);
								list($dd,$mm,$yy)=explode("/",$hoy);//fecha actual 06 06 2013
								$fecha=$d.'/'.$m.'/'.$y;*/
							?>
								<td><?= $tarea->fecha; ?></td>
								<td><?= $tarea->hora_inicio; ?></td>
							</tr>
							<tr>
								<td><?= $tarea->descripcion; ?></td>
								<td><?= $tarea->hora_fin; ?></td>
							</tr>
						</table>
					</div>
				</div>
				<?php endforeach; ?>	
			</div>
		</div>
	</body>
</html>