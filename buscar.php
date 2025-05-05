<html>
	<head>
	<title> Buscar Datos </title>
	</head>
	<body>
		<?php
			$conecta = mysqli_connect("localhost", "root", "usbw", "uninpapu")
			or die("Problema de conexion");

			$reg=mysqli_query($conecta,"select cod,nom from usuarios
				where cod='$_REQUEST[codigo]'")
			or die("Error en la consulta".mysqli_error($conecta));
			if($reg=mysqli_fetch_array($reg))
			{
				echo "Nombre:".$reg['nom']."<br>";
			}
			else
				echo "No existe ese codigo en la consulta";
			echo "<br>";
			mysqli_close($conecta);
		?>
	</body>
</html>