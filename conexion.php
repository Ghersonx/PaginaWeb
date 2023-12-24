<?php
	
	$conn = new mysqli("localhost","root","","bdproductos");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
		
	}
	
	?>