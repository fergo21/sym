<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Asistente</title>
		<meta charset="utf-8"">
		<style type="text/css">
			body{
				margin:0px;
				padding-left:5px;
				padding-top:5px;
				color:white;
				background-color:#466c50;
			}
			ul{
				font-size:10px;	
			}
			a{
				color:#8be2b3;	
				font-size:12px;
			}
			a:visited{
				color:#8be2b3;	
			}
			h1{
				font-size:20px;
			}
			h2{
				font-size:15px;
			}
			img{
				width:20%;
			}
		</style>
	</head>
<body>
	<center><h1>Bienvenido a SAR-TIC</h1></center
	<hr>
<?php
	//aqui caera el mensaja para poder usar el switch
	switch($apartado)
	{
		
		//en caso de llegar contenido en la variable apartado, esta se comprueba en cada
		//case, si la localiza se ejecuta solo lo que esta marcado entre el case y break;
		case 'habilitar_tecnico':
						echo"<center><h2>Habilitar Tecnicos</h2></center>";
						echo "<center><img src='../../img/Logons.png'/></center>";
						echo"<p>en esta opcion, se activaran los usuarios(tecnicos) para su posterior ingreso al sistema</p>";
						echo"<hr>";
						echo"<ul>";
							echo"<li><a href='".site_url('Sartic/asistente/')."'>Volver</a></li>";
						echo"</ul>";
						break;
		case 'administrar_tecnico':
						echo"<center><h2>Administrar Tecnicos</h2></center>";
						echo "<center><img src='../../img/messenger.png'/></center>";
						echo"<p>en esta opcion, se asignaran los RECURSOS de SAR-TIC para un Tecnico y su Destino</p>";
						echo"<hr>";
						echo"<ul>";
							echo"<li><a href='".site_url('Sartic/asistente/')."'>Volver</a></li>";
						echo"</ul>";
						break;
		case 'administrar_escuelas':
						echo"<center><h2>Administrar Escuelas</h2></center>";
						echo "<center><img src='../../img/Home.png'/></center>";
						echo"<p>en esta opcion, se dan de alta las ESCUELAS que formaran parte del sistema SAR-TIC</p>";
						echo"<hr>";
						echo"<ul>";
							echo"<li><a href='".site_url('Sartic/asistente/')."'>Volver</a></li>";
						echo"</ul>";
						break;
		case 'administrar_proveedores':
						echo"<center><h2>Administrar Proveedores</h2></center>";
						echo "<center><img src='../../img/proveedores.png'/></center>";
						echo"<p>en esta opcion, se dan de alta los distintos PROVEEDORES que formaran parte del sistema SAR-TIC</p>";
						echo"<hr>";
						echo"<ul>";
							echo"<li><a href='".site_url('Sartic/asistente/')."'>Volver</a></li>";
						echo"</ul>";
						break;
		case 'administrar_insumos':
						echo"<center><h2>Administracion de Insumos</h2></center>";
						echo "<center><img src='../../img/IconPackager.png'/></center>";
						echo"<p>aqui se puede crear nuevas CATEGORIAS, RECURSOS y asignar INSUMOS para usarse en el sistema SAR-TIC</p>";
						echo"<hr>";
						echo"<ul>";
							echo"<li><a href='".site_url('Sartic/asistente/')."'>Volver</a></li>";
						echo"</ul>";
						break;
		case 'administrar_pedidos':
						echo"<center><h2>Administrar Pedidos</h2></center>";
						echo "<center><img src='../../img/fonts.png'/></center>";
						echo"<p>en esta opcion, se maneja el tema de actualizar Stock de los usuarios y hacer Pedidos al sistema SAR-TIC</p>";
						echo"<hr>";
						echo"<ul>";
							echo"<li><a href='".site_url('Sartic/asistente/')."'>Volver</a></li>";
						echo"</ul>";
						break;
																					
											
		default:        //por defecto siemprw se crea esta pantalla sino hay apartados
						echo"<center><h2>¿Que hace el Sistema?</h2></center>";
						echo"<p>Este sistema se creo con la finalidad de Administrar de manera eficiente los recursos de una empresa, permitiendo la automatizacion</p>";
						echo"<hr>";
						echo"<ul>";
							echo"<li><a href='asistente/habilitar_tecnico'>Habilitar Tecnicos</a></li>";
							echo"<li><a href='asistente/administrar_tecnico'>Administrar Tecnicos</a></li>";
							echo"<li><a href='asistente/administrar_escuelas'>Administrar Escuelas</a></li>";
							echo"<li><a href='asistente/administrar_proveedores'>Administrar Proveedores</a></li>";
							echo"<li><a href='asistente/administrar_insumos'>Administrar Insumos</a></li>";
							echo"<li><a href='asistente/administrar_pedidos'>Administrar Pedidos</a></li>";
						echo"</ul>";
						echo"<br>";
						break;
						
	}


?>

                        
</body>
</html>
