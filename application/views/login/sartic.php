<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SAR-TIC</title>
	<link href="css/sartic.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
	<div id="contenedor">
		<div id="cabecera">
			<img id="logo" src="img/sartic-logo2.png"/>
		</div>
	
		<div id="cuerpo">
			<div id="ventana_login">
				<div class="titulo"><img src="img/icono_ventana.jpg"/> Login</div>
				<div id="llave"><img src="img/llave.png"/></div>
				<div id="cuerpo_registro1">
				<?= form_open("Sartic/valida_login") ?>
				<?php	
					$usuario=array(
						'name' => 'usuario',
						'placeholder' => 'Escribe tu Usuario',
						);
					$clave=array(
						'name' => 'clave',
						'type' => 'password',
						'placeholder'=>'Escribe tu Clave',
						);
					$boton=array(
						'name' => 'login',
						'id' => 'boton',
						'value' => 'LOGIN',
						);
				?>
				<?= form_label('Nombre de Usuario: ', 'usuario') ?>
				<?= form_input($usuario) ?><br>
				<?= form_label('Clave: ', 'clave') ?>
				<?= form_input($clave) ?>
				<?= form_submit($boton) ?>
				<?= form_close() ?> 
				</div>
			</div>
			<div id="ventana_registro">
				<div class="titulo"><img src="img/icono_ventana.jpg"/> Registro - Nuevo Usuario</div>
				<div id="cuerpo_registro2">
					<div id="centro_registro">
						<?php echo anchor('Sartic/registro','Click <span id="colorazul">Aqui</span> para Registrarte') ?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	</body>
</html>