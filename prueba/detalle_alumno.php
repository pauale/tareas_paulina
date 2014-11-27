<?php
  include_once('conexion.php');
  $variable = $_GET['id'];
  $alumnos = mysql_query("SELECT * FROM alumnos WHERE id=$variable");
  $titulo = "Datos del alumno";
 ?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
	</head>

	<body>	
		<?php include_once('menu.php');?>
			<table>
				<tbody>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Cuenta</th>
						<th>Edad</th>
						<th>Teléfono</th>
						<th>Dirección</th>
					</tr>
		<?php

			while($row = mysql_fetch_array($alumnos)){
				echo"<tr>";
				echo"<td>" .$row['id']." "."</td>";
				echo"<td>" .$row['nombre']." ".$row['apellido_paterno']." ".$row['apellido_materno']."</td>";
				echo"<td>" .$row['cuenta']."</td>";
				echo"<td>" .$row['edad']."</td>";
				echo"<td>" .$row['telefono']."</td>";
				echo"<td>" .$row['direccion']."</td>";
				echo"</tr>";
			}
		?>	
					</tr>
				</tbody>
			</table>
	</body>
</html>