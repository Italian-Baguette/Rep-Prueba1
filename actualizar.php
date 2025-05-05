<html>
	<head>
	<title> Actuaizar Datos </title>
	</head>
	<body>
		<?php
			$conecta = mysqli_connect("localhost", "root", "usbw", "uninpapu")
			or die("Problema de conexion");

			$codigo = $_REQUEST['codigo'];
			$nombre = $_REQUEST['nombre'];

			$reg = mysqli_query($conecta, "update usuarios set nom = '$nombre' where cod = '$codigo'")
			or die("Error al intentar actualizar: " . mysqli_error($conecta));

			if (mysqli_affected_rows($conecta) > 0) {
				echo "Registro actualizado correctamente";
			} else {
				echo "No existe un registro con ese codigo";
			}

			echo "<br>";
			mysqli_close($conecta);
		?>
	</body>
</html>