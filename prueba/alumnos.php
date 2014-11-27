<?php
include_once('conexion.php');
$titulo = "Alumnos";
$alumnos = mysql_query("SELECT * FROM alumnos");
 //$alumnos = mysql_query("SELECT * FROM alumnos");

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
		
	</head>
	<body>
		<h1><?php echo $titulo; ?> </h1>	
		<?php include_once('menu.php');?>
			
			<table>
				<tbody>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Cuenta</th>
						<th>Eliminar</th>
					</tr>
			<?php
		
			while($row = mysql_fetch_array($alumnos)){
				echo"<tr>";
				echo"<td>" .$row['id']." "."</td>";
				echo"<td> <a href='detalle_alumno.php?id=".$row['id']."'>".$row['nombre']." ".$row['apellido_paterno']." ".$row['apellido_materno']."</a></td>";
				echo"<td>" .$row['cuenta']."</td>";
				echo"<td><a href='eliminar_alumno.php?id=" .$row['id']."'>Eliminar</a></td>";				
				echo"</tr>";
			}
			?>	
					</tr>
				</tbody>
			</table>
	</body>
</html>