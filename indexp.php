<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/producto.css">
</head>

<body>
<?php include('conexion.php');?>

<table>

<tr><th colspan="6"><h1>Listado de productos</h1></th></tr>
<tr>

<th>Imagen</th>
<th>ID</th>
<th>Producto</th>
<th>Precio</th>
<th>Stock</th>
<th>Acción</th>

</tr>

<?php

$sql="select * from productos";
$resultado=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($resultado))

{
?>

<tr>
	<td><?php echo "<img width='80' height='80' src='imgP/".$mostrar['imagen']."zapa.JPG'>" ?></td>       
       	<td><?php echo "<img width='80' height='80' src='imgP/".$mostrar['imagen'].".JPG'>" ?></td>

	<td><?php echo $mostrar['codigo'] ?></td>
	<td><?php echo $mostrar['producto'] ?></td>
	<td><?php echo $mostrar['precio'] ?></td>
	<td><?php echo $mostrar['stock'] ?></td>
	<td><?php echo "<a href='recibir.php?id=".$mostrar['codigo']."&nombre=".$mostrar['producto']."'>Agregar</a>"?></td>
</tr>

<?php
}
?>

</table>
</body>

</html>