<?php

$conn = mysqli_connect('localhost', 'root', '', 'beatBazaar');

if (!$conn) {
    die('Error de conexion (' . mysqli_connect_errno() . ')'
    . mysqli_connect_errno());

}