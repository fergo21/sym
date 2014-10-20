<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ERROR - SAR-TIC</title>
	<link href="../../css/error_db.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
	<div id="contenedor">
		<div id="cuerpo_exito">
			<div id="ventana_registro">
				<div class="titulo"><img src="../../img/icono_ventana.jpg"/> Error de Borrado </div>
				<div id="cuerpo_registro2">
					<div id="centro_registro">
						<span style="color:yellow;font-size:11px;">No se puedo borrar, el dato existe todavia en otra tabla</span><br>
						<?php echo anchor($dondevolver,'Click <span id="colorazul">Aqui</span> para regresar al Menu Anterior') ?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	</body>
</html>