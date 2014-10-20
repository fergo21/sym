<?php
	$cmd='mysqldump --user=root --password= --host=localhost sartic > archivodebackup.sql';
	$salida=exec($cmd);
	$salida2 = shell_exec('ls -lart');
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registro Exitoso - SAR-TIC</title>
	<link href="../css/backup.css" type="text/css" rel="stylesheet"/>
</head>
	<body>
	
	<fieldset id="backup">
		<legend>BackUP</legend>
		<?php
			echo "<pre>$salida2</pre>";
		?>
	</fieldset>
	<fieldset>
		<legend>Download</legend>
		<a href="../archivodebackup.sql" title="Archivo de BackUp">Click para abrir el BackUp</a>
	</fieldset>
	
	</body>
</html>