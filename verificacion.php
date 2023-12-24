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
		include'css/barra.html' 
	?>

<h1> Acceso al sistema </h1>
	<form name="form1" method="post" action="verificacion.php">
	  <p>&nbsp;</p>
	  <table width="370" border="5" cellspacing="5" cellpadding="5">
	    <tr>
	      <th colspan="2" scope="col">Acceso</th>
        </tr>
	    <tr>
	      <th width="128" scope="row">Login</th>
	      <td width="193"><label for="login"></label>
          <input type="text" name="login" id="login"></td>
        </tr>
	    <tr>
	      <th scope="row">Clave</th>
	      <td><label for="clave"></label>
          <input type="text" name="clave" id="clave"></td>
        </tr>
	    <tr>
	      <th scope="row"><input type="submit" name="enviar" id="enviar" value="Enviar"></th>
	      <td><input type="reset" name="button2" id="button2" value="Restablecer"></td>
        </tr>
      </table>
	  <p>&nbsp;</p>
</form>
	<?php
    if(isset($_POST['enviar']))
	{
		if($_POST['login']=='keni123'  && $_POST['clave']=='cata')
		{
			$_SESSION['usuario'] ="Catalina De Martinez"; 
			header('location:usuarios.php' );
		}
	}
	?>

</body>
</html>