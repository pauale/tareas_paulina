<?php
 include_once('conexion.php');
 $titulo = "Licenciaturas";
 $licenciaturas = mysql_query("SELECT * FROM licenciaturas");
 //$alumnos = mysql_query("SELECT * FROM alumnos");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Licenciaturas</title>
	</head>
	
	<body>
		<h1><?php echo $titulo; ?> </h1>
		<?php "<h2> subtitulo </h2>"
		?>
		
		<?php 
			include_once('menu.php');
			include_once('variables.php');
				while($row = mysql_fetch_array($licenciaturas)){
					echo "<p>".$row['nombre']."</p>";
			}
			?>	
	</body>
</html>