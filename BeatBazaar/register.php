<?php
require 'config.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];

$insertar = "INSERT INTO usuarios VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$ciudad', '$pais')";

$query = mysqli_query($conn, $insertar);

if($query) {
    header('Location: index.php');
}


?>