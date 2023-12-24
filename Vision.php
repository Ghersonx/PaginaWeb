<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Home</title>
</head>
<body>
	<?php
		include'css/barra.html';
		$_SESSION['nombre'] ="Keny el Moreteador"; 
		echo "Usuario: ". $_SESSION['nombre'];
		echo "<br> ID de session: ". session_id();
		echo "<br> Nombre de session: ". session_name();
		
		
	?>
<br>
	<h2> VISIÓN:  </h1>
<br>	

Posicionarnos como la procesadora de embutidos artesanales lider en Popayan  Y Bogota, resaltando el sabor característico de sus excelentes materias primas, satisfaciendo así los requerimientos de nuestra excluisiva clientela.


<br>
Ser una empresa líder en el mercado de carnes frías, buscando la excelencia en nuestros productos y procesos.
<br>
<br>

<h3> Donde de vende Cata </h3>
</body>
</html>