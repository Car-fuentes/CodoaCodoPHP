<?php

echo "<p>los datos fueron recibidos</p>";
print_r($_POST);

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];

echo $nombre;

$servidor = "localhost";
$usuario = "root";
$clave = "Arg@1234";

$conexion = mysqli_connect($servidor, $usuario, $clave);
mysqli_close($conexion);

$baseDatos = "tickets";
mysqli_select_db($conexion, $baseDatos);

$sql = "SELECT * FROM detalle_tickets";
$consulta = mysqli_query($conexion, $sql);