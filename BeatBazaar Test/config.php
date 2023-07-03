
<?php
$conn = mysqli_connect('localhost', 'root', '', 'BeatBazaar');
if (!$conn){
    die('Error de Conexion (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    
}