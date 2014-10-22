<?php

?>
<html>
	<head>
		<title>S & M Enlish Group</title>
		<link href="css/pagina.css" type="text/css" rel="stylesheet"/>
		<link href="css/modal.css" type="text/css" rel="stylesheet" media="screen"/>
	</head>
	
	<body>
		<div id="contendor">
			<div class="cabecera">
				
			</div>
		</div>
		<div id="cuerpo">
			
			<div class="menusup">
  				<ul>
					<li><a href="<?php echo site_url('index.php/Sym/muestradefault') ?>" target="marco" " title="Pagina principal"><span>Home</span></a></li>
					<li><a href="<?php echo site_url('index.php/Sym/muestraabout') ?>" target="marco" title="Sobre la institucion" ><span>About Us</span></a></li>
					<li><a href="#" title="Servicios"><span>Services</span></a></li>
					<li><a href="#modal" title="Ingresar"><span>Login</span></a></li> 
					<li><a href="#" title="Contactenos"><span>Contact</span></a></li>
  				</ul>
				
						
			</div>
			
			<div id="menuinf">
				<iframe id="marco" src="<?php echo site_url('index.php/Sym/muestradefault') ?>" name="marco" width="100%" height="100%" frameborder="0">
					
				</iframe>	
			</div>
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
		</div>
		
		<div id="pie">
			La Rioja 2014
		</div>
		
	</body>
	
</html>