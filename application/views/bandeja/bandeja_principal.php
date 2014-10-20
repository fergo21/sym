<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link href="../css/bandeja_principal.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
	<div id="contenedor">
		<iframe id="ifra" src="<?php echo site_url('Sartic/novedades');?>" name="centro" height="100%" width="100%" frameborder="0"></iframe>
	</div>
	<div id="pie">
		<div class="menu">
			<a href="<?php echo site_url('Sartic/novedades');?>" target="centro"><img class="menu_ima" src="../img/sartic.png" title="INICIO"/></a>
		</div>
		<div class="menu">
			<a href="<?php echo site_url('Sartic/muestra_default');?>" target="centro"><img class="menu_ima" src="../img/Control Panel 3.png" title="Video Conferencia a Futuro..."/></a>
		</div>
		<div class="menu">
			<a href="<?php echo site_url('Sartic/ver_pedidos_usuarios/');?>" target="centro"><img class="menu_ima" src="../img/NotePad.png" title="ADMINISTRAR"/></a>
		</div>
		<?php if($correo==0): ?>
		<div class="menu">
			<a href="<?php echo site_url('Sartic/correo');?>" target="centro"><img class="menu_ima" src="../img/MIcrosoft-Outlook-Icon-Akkasone.png" title="MENSAJERIA"/></a>
		</div>		
		<?php else: ?>
		<div class="menu">
			<a href="<?php echo site_url('Sartic/correo');?>" target="centro"><img class="menu_ima" src="../img/envelope_A_urgent.png" title="MENSAJERIA"/></a>
		</div>	
		<?php endif; ?>
		<div class="menu">
			<a href="<?php echo site_url('Sartic/backup');?>" target="centro"><img class="menu_ima" src="../img/busqueda.png" title="BACK UP"/></a>
		</div>
		<div class="menu">
			<a href="<?php echo site_url('Sartic/opciones');?>" target="centro"><img class="menu_ima" src="../img/Norton-Sytem-Works-2005.png" title="OPCIONES"/></a>
		</div>
		<div class="menu">
			<a href="<?php echo site_url('Sartic/salir');?>"><img class="menu_ima" src="../img/Locker.png" title="SALIR"/></a>
		</div>
	</div>
	<div id="avatar">
		<a href="<?php echo site_url('Sartic/muestra_default');?>" target="centro"><img class="menu_ima2" src="../img/sartic-logo.png" title="INICIO"/></a>
		<div>
		<?php foreach($misdatos->result() as $midato){?>
			<table id="avatar_tabla">
				<caption><b>Mis Datos</b></caption>
				<tr>
					<td>Usuario: </td><td><?php echo "$midato->Nombre $midato->Apellido"; ?></td>
				</tr>
				<tr>
					<td>Puesto: </td><td><?php echo $midato->nombre; ?></td>
				</tr>
			</table>
			<?php } ?>
		</div>	
	</div>
	<div id="menu_izq">
		<div class="menu_izq2">
			<a href="<?php echo site_url('Sartic/tecnicos_habilitar');?>" target="centro"><img class="menu_ima2" src="../img/Logons.png" title="Habilitar Tecnicos"/></a>
		</div>		
		<div class="menu_izq2">
			<a href="<?php echo site_url('Sartic/tecnicos');?>" target="centro"><img class="menu_ima2" src="../img/messenger.png" title="Administrar Tecnicos"/></a>
		</div>
		<div class="menu_izq2">
			<a href="<?php echo site_url('Sartic/escuelas');?>" target="centro"><img class="menu_ima2" src="../img/Home.png" title="Administrar Escuelas"/></a>
		</div>
		<div class="menu_izq2">
			<a href="<?php echo site_url('Sartic/proveedores');?>" target="centro"><img class="menu_ima2" src="../img/proveedores.png" title="Administrar Proveedores"/></a>
		</div>
		<div class="menu_izq2">
			<a href="<?php echo site_url('Sartic/insumos');?>" target="centro"><img class="menu_ima2" src="../img/IconPackager.png" title="Administrar Insumos"/></a>
		</div>
		<div class="menu">
			<a href="<?php echo site_url('Sartic/pedidos');?>" target="centro"><img class="menu_ima2" src="../img/fonts.png" title="Administrar Pedidos"/></a>
		</div>
	</div>
	
	<div id="flotante">
		<ul class="asistente">
			<li><a href="#"><img src="../img/recursos.png" width="60px"/></a>
				<ul>
					<li>
					<iframe id="asistente_iframe" width="200" height="370" src="<?php echo site_url('Sartic/asistente/');?>" frameborder="0" border="0" scrolling="no"></iframe>
					</li>
				</ul>
			</li>
		</ul>
	</div>	
	</body>
</html>