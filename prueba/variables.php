<?php
 include_once('conexion.php');
  $titulo = "GET";
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
			
		<h3>VARIABLES POR GET</h3>
			<a href="resultados.php?id=1">Variables por GET</a>	
			
		<form action="resultados.php" method="POST">
			<label for="id">id</label>
			<input type="text" name="id" value="" id="id"> 
			<p><input type="submit" value="Enviar variable"></p>	
		</form>
	</body>
</html>