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
		include'css/menuUsuario.html';
		echo "Usuario: ".$_SESSION['usuario']." Bienvenido" ;

	?>

	<h1> BIENVENIDO USUARIO </h1>
	<h3> Wellcome mi viejito  </h3>

</body>
</html>