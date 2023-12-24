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
		echo "Usuario: ".$_SESSION['usuario']. " que tengas un buen dia";
		session_destroy();
	?>

	<h1> EXTREMSPORT 👟 👟  </h1>
	<h3> Tranquilos que Cata paga  </h3>
    <h3> Session Destruida </h3>
	
</body>
</html>