<html>
	<head>
	<title> Ingresar Datos </title>
	</head>
	<body>
		<?php
			$conecta = mysqli_connect("localhost", "root","usbw","uninpapu")
			or die("Problema de conexion");
			
			mysqli_query($conecta,"insert into usuarios(cod, nom) values
			($_REQUEST[codigo],'$_REQUEST[nombre]')")
			or die("Error".mysql_error($conecta));
			
			mysqli_close($conecta);
		?>
	</body>
</html>