<?php

	//para la generacion de un word con formato HTML
	header("Content-type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=Pedido-de-Insumos-".$fecha.".doc");


	//echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Conten-Type" content="text/html" charset="utf-8">
	<title>Impresion de Insumos</title>
	<style type="text/css">
		body{
			font: 13px normal Helvetica, Arial, sans-serif;
			position: relative;
			margin:0;
			padding:0;
			background-color: #233836;
		}
		#logo{
			width:15%;
		}
		span{
			display: block;
			text-align: right;
			font-weight: bold;
		}
		legend{
			border:1px solid #919974;
			border-radius:5px;
			background-color:#c9cdbc;
		}
		#ventana5{
			width:400px;
			display: block;
			border:1px solid #919974;
			background-color:#EDEDED;
			float: left;
		}
		#tablaescuela{
			border:1px solid #919974;
			border-radius:5px;
			background-color:#536093;
			color:white;
		}
		#tablaescuela .tablacuerpo{
			border:1px solid #919974;
			border-radius:3px;
			background-color:#d9e6da;
			color:black;
			font: 11px sans-serif;
		}
		#tablaescuela tr:hover{
			background-color:#a0c0a3;
		}
	</style>
</head>
	<body>
			<fieldset id="ventana5">
			
				<center><img id="logo" src="http://localhost/sartic/img/sartic-logo-chico.png"/></center>
				<table id="tablaescuela" width="100%">
					<tr id="tablatitulo">
						<th>Nombre</th>
						<th>Total</th>
						<th>Detalles Extras</th>
						<th>Cantidad</th>
					</tr>
				<?php foreach($pedidos->result() as $objetopedido):?>
					<tr class="tablacuerpo">
						<th><?= $objetopedido->nombre; ?></th>
						<th><?= $objetopedido->total; ?></th>
						<th>-</th>
						<th>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
					</tr>
				<?php endforeach; ?>				
					<tr>
						<td colspan="3"></td><td>Total:  </td>
					</tr>
				</table>
			</fieldset>	

	</body>
</html>