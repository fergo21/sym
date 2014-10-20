<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registro - SAR-TIC</title>
	<link href="../css/registro.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
	<div id="contenedor">
			<div id="cabecera">
				<img id="logo" src="../img/sartic-logo2.png"/>
			</div>
			<div id="cuerpo">
			<?= form_open("Sartic/registro") ?>
			<?php	
					$nombre=array(
						'name' => 'nombre',
						'placeholder' => 'Escribe tu Nombre',
						);
					$apellido=array(
						'name' => 'apellido',
						'placeholder'=>'Escribe tu Apellido',
						);
					$dni=array(
						'name' => 'dni',
						'placeholder'=>'Escribe tu D.N.I',
						);
					$domicilio=array(
						'name' => 'domicilio',
						'placeholder'=>'Escribe tu Domicilio',
						);
					$edad=array(
						'name' => 'edad',
						'placeholder'=>'Escribe tu Edad',
						);
					
					//para login
					
					$usuario=array(
						'name' => 'usuario',
						'placeholder'=>'Escribe tu Usuario',
						);
					$clave=array(
						'name' => 'clave',
						'placeholder'=>'Escribe tu Clave',
						);
					$boton=array(
						'name' => 'registro',
						'id' => 'boton',
						'value' => 'REGISTRAR',
						);
				?>
				<h2>Información de Registro</h2>
				<p id="mensaje_centro">Introduce tus datos personales. Esta Información se usa para registrarse en SAR-TIC. Una vez Creada, podrá acceder mediante el Panel de Login</p>
				<fieldset><legend>Datos del Usuario</legend>
				<table align="center">
					<tr>
						<td>
						<?= form_label('Nombre: ', 'nombre') ?>
						<?= form_input($nombre) ?>
						<?php if(form_error('nombre'))
						{
							echo "<img src='../img/error.png'/>"; 
						}
						?>
						</td>
						<td>
						<?= form_label('Fecha de Nacimiento: ', 'fecha_nac') ?>
						<input type="date" name="fecha_nac" placeholder="Selecciona tu Nacimiento"/>
						</td>
					</tr>
					<tr>
						<td>
						<?= form_label('Apellido: ', 'apellido') ?>
						<?= form_input($apellido) ?>
						<?php if(form_error('apellido'))
						{
							echo "<img src='../img/error.png'/>"; 
						}
						?>
						</td>
						<td>
						<?= form_label('Edad: ', 'edad') ?>
						<?= form_input($edad) ?>
						<?php if(form_error('edad'))
						{
							echo "<img src='../img/error.png'/>"; 
						}
						?>
						</td>
					</tr>
					<tr>
						<td>
						<?= form_label('Domicilio: ', 'domicilio') ?>
						<?= form_input($domicilio) ?>
						<?php if(form_error('domicilio'))
						{
							echo "<img src='../img/error.png'/>"; 
						}
						?>
						</td>
						<td>
						<?= form_label('Sexo: ', 'sexo') ?>
						<?= form_radio('sexo','varon',TRUE) ?>Varon
						<?= form_radio('sexo','mujer') ?>Mujer
						</td>
					</tr>
					<tr>
						<td>
						<?= form_label('DNI: ', 'dni') ?>
						<?= form_input($dni) ?>
						<?php if(form_error('dni'))
						{
							echo "<img src='../img/error.png'/>"; 
						}
						?>
						</td>
						<td>
						
						</td>
					</tr>
				</table>
				</fieldset>
				<br>
				<fieldset><legend>Datos de Login</legend>
				<table align="center">
					<tr>
						<td>
						<?= form_label('Usario: ', 'usuario') ?>
						<?= form_input($usuario) ?>
						<?php if(form_error('usuario'))
						{
							echo "<img src='../img/error.png'/>"; 
						}
						?>
						</td>
						<td>
						<?= form_label('Clave: ', 'clave') ?>
						<?= form_password($clave) ?>
						<?php if(form_error('clave'))
						{
							echo "<img src='../img/error.png'/>"; 
						}
						?>
						</td>
					</tr>
					<tr>
						<td colspan="2"><?= form_submit($boton) ?></td>
					</tr>
				</table>
				</fieldset>
				
			<?= form_close() ?> 
			</div>
			<br>
			<div id="ventana_registro">
				<div class="titulo"><img src="../img/icono_ventana.jpg"/> Registro - Nuevo Usuario</div>
				<div id="cuerpo_registro2">
					<div id="centro_registro">
						<?php echo anchor('sartic','Click <span id="colorazul"><img src="../img/flecha.png"/></span> para Regresar al LOGIN') ?>
					</div>
				</div>
			</div>
		
	</div>
	</body>
</html>