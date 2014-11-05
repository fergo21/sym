<?php

?>
<html>
	<head>
		<title>S & M English Group</title>
		<link href="<?= base_url("CSS/pagina.css"); ?>" type="text/css" rel="stylesheet"/>
		<link href="<?= base_url("css/modal.css"); ?>" type="text/css" rel="stylesheet" media="screen"/>
	</head>
	
	<body>
		<div id="contendor">
			<div id="cabecera">
				<img src="http://localhost/sym/img/symeg1.png"/>
				<div id="perfil" style="float: right">
				<?php foreach($informacion->result() as $dato) {?>
					<?php 
					if($dato->nombre != ''){
						echo"$dato->nombre";
						?>
						<a href="<?php echo site_url('index.php/Sym/muestraperfil') ?>" target="marco" title="perfil">Ir a perfil</a>
						<button><a href="<?php echo site_url('index.php/Sym/cerrar_sesion') ?>" title="cerrarsesiion">Cerrar sesion</a></button> 
						<?php 
						}
						?>
					
				<?php }?>
				
				</div>
			</div>
			
		<div id="cuerpo">		
			
			<div class="menusup">
  				<ul>
					<li><a href="<?php echo site_url('index.php/Sym/muestracontenido') ?>" target="marco" title="Pagina principal"><span>Home</span></a></li>
					<li><a href="<?php echo site_url('index.php/Sym/muestraabout') ?>" target="marco" title="Sobre la institucion" ><span>About Us</span></a></li>
					<li><a href="#" title="Servicios"><span>Services</span></a></li>
					<li><a href="#modal" title="Ingresar"><span>Login</span></a></li> 
					<li><a href="<?php echo site_url('index.php/Sym/muestracontacto') ?>" target="marco" title="Contactenos"><span>Contact</span></a></li>
  				</ul>
				
						
			</div>
			
			<div id="menuinf">
				<iframe id="marco" src="<?php echo site_url('index.php/Sym/muestradefault') ?>" name="marco" width="100%" height="100%" frameborder="0">
					
				</iframe>	
			</div>
			<div id="modal">
							<div class="modal-content">
								<div class="header">
									<h2>LOGIN</h2>
								</div>
								<div class="copy">
										<?= form_open("index.php/Sym/validar") ?>
										<label>User</label><br>
													<input 	type="text" name="usuario"/>
													<br>
													<label>Password</label><br>
													<input type="password" name="clave"/>
													<br>
													<input type="checkbox"/><label>Recordar password</label><br>
													<input type="submit" value="Entrar" name="btn_validar" />
											<button><a href="<?php echo site_url('index.php/Sym/muestraregistro') ?>" target="marco" style="text-decoration:none">Registrarse</a></button>
										</form>
													
										
										
								</div>
								<div class="cf footer">
									<a href="#">Cerrar</a></br>
								</div>
							</div>
							<div class="overlay"></div>
						</div>
		</div>
		
		<div id="pie">
			La Rioja 2014
		</div>
		</div>
	</body>
	
</html>