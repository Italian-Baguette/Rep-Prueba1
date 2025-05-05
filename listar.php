<html>
	<head>
	<title> Lista Datos </title>
	</head>
	<body>
		<?php
			$conecta = mysqli_connect("localhost", "root","usbw","uninpapu")
			or die("Problema de conexion");
			
			$regs=mysqli_query($conecta,"select cod,nom from usuarios")
			or die("Error en la consulta".mysqli_error($conecta));
			while($reg=mysqli_fetch_array($regs))
			{
				echo "Codigo:".$reg['cod']."<br>";
				echo "Nombre:".$reg['nom']."<br>";
			}
			mysqli_close($conecta);
			echo "<br>";
		?>
	</body>
</html>