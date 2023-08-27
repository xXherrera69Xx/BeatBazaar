<?php


session_start();

include 'config.php';

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$validar_login = mysqli_query($conn, "SELECT * FROM  usuarios WHERE Correo='$correo' and Contraseña='$contraseña'");

/*if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: index.php");
    exit;
} else{
echo'
    <script>
      alert("este usuario no existe");
      window.location = "index.php";
    </script>
';
exit;

}*/

?>


