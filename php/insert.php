<?php
	include("connect.php");
	$id = $_POST['id_cliente'];
	$nombre = $_POST['nombre_cliente'];
	$correo = $_POST['correo_cliente'];
	$ciudad = $_POST['ciudad_cliente'];

	$query_s = "INSERT INTO clientes_2 (id_cliente, nombre_cliente, correo_cliente, ciudad_cliente) VALUES ('$id', '$nombre', '$correo', '$ciudad')";

	$query = mysqli_query($conn,$query_s);

	if ($query) {
		echo 'Registrado';
	}
	else{
		echo 'Error al registrar';
	}
?>