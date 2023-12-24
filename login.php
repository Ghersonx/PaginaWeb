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
	<form name="form1" method="post" action="usuarios.php">
	  <p>&nbsp;</p>
	  <table width="370" border="5" cellspacing="5" cellpadding="5">
	    <tr>
	      <th colspan="2" scope="col">Acceso</th>
        </tr>
	    <tr>
	      <th width="128" scope="row">Login</th>
	      <td width="193"><label for="textfield"></label>
          <input type="text" name="textfield" id="textfield"></td>
        </tr>
	    <tr>
	      <th scope="row">Clave</th>
	      <td><label for="textfield2"></label>
          <input type="text" name="textfield2" id="textfield2"></td>
        </tr>
	    <tr>
	      <th scope="row"><input type="submit" name="button" id="button" value="Enviar"></th>
	      <td><input type="reset" name="button2" id="button2" value="Restablecer"></td>
        </tr>
      </table>
	  <p>&nbsp;</p>
</form>
	<h3>&nbsp;</h3>

</body>
</html>