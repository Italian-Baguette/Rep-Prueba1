<html>
	<head>
	<title> Eliminar Datos </title>
	</head>
	<body>
		<?php
			$conecta = mysqli_connect("localhost", "root", "usbw", "uninpapu")
			or die("Problema de conexion");


			$reg = mysqli_query($conecta, "delete from usuarios where cod='$_REQUEST[codigo]'")
			or die("Error al intentar borrar: " . mysqli_error($conecta));

			if (mysqli_affected_rows($conecta) > 0) {
				echo "Registro eliminado correctamente.";
			} else {
				echo "No existe un registro con ese codigo.";
			}

			echo "<br>";
			mysqli_close($conecta);
	?>
	</body>
</html>