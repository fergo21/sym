<?php

?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ventanas Modales </title>
<link href="modal.css" type="text/css" rel="stylesheet" media="screen" />
<link href="modal1.css" type="text/css" rel="stylesheet" media="screen" />
</head>
<body >

 
	<a href="#modal" class="openModal"> Activar ventana Nro 1</a>
 	<a href="#example" class="openModal"> Activar ventana Nro 2</a>
		<div id="modal">
			<div class="modal-content">
				<div class="header">
					<h2>Titulo de la ventana</h2>
				</div>
				<div class="copy">
					<p>Aqui el contenido que se desea .</p>
				</div>
				<div class="cf footer">
					<a href="#">Cerrar</a></br><a href="#">Enviar</a>
				</div>
				</div>
			<div class="overlay"></div>
		</div>

<aside id="example" class="modal">
	<div>
	<h2>Titulo</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<a href="#close" title="Close">Cerrar</a>
	</div>
</aside>

 </body>
</html>
 
