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
		include'css/barra.html' ;
		echo "Usuario: ". $_SESSION['nombre'];

	?>
<br>
	<h2> MISIÓN:  </h1>
<br>	

Seguir ofreciendo los productos más exquisitos elaborados como antaño y crear valor para nuestros clientes, satisfaciendo a todos los consumidores finales de nuestros productos.

<br>
Ser una empresa líder en el mercado de carnes frías, buscando la excelencia en nuestros productos y procesos.
<br>
<br>

<h3> Donde de vende Cata </h3>
</body>
</html>