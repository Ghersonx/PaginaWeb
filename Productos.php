<?php
session_start();
if(!isset($_SESSION['usuario']))
{
	header('location:index.php' );
}
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
		include'css/menuUsuario.html' ;
		echo "Usuario: ".$_SESSION['usuario'];
	?>

	<h1> BIENVENIDO AL PALACIO DEL CHORIZO </h1>
	<h3> Wellcome mi viejito  </h3>

</body>
</html>