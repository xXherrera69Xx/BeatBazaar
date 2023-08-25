<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta en BeatBazaar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/estilos2.css" rel="stylesheet">
  <script src="../js/bootstrap.js"></script>
</head>
<body>
<form method="post" >
   <h2>Bienvenido</h2>
   <p>Registrarse en BeatBazaar</p>
   
   <div class="input-wrapper">
    <input type="text" name="nombre" placeholder="Nombre">
    <img class="input-icon" src="imagenes/icons/user.svg" alt="">
   </div>

   <div class="input-wrapper">
    <input type="text" name="apellido" placeholder="Apellido">
    <img class="input-icon" src="imagenes/icons/user.svg" alt="">
   </div>
   
   <div class="input-wrapper">
    <input type="email" name="correo" placeholder="Correo electronico">
    <img class="input-icon" src="imagenes/icons/email.svg" alt="">
   </div>

   <div class="input-wrapper">
    <input type="password" name="contraseña" placeholder="Contraseña">
    <img class="input-icon" src="imagenes/icons/contra.svg" alt="">
   </div>

   <input class="btn" type="submit" name="register" value="Registrarse">

   <a href="session.php"><p>Ya tienes una cuenta?</p></a>
   <a href="index.php"><h3>hola</h3>

</form>
<?php
include("includes/register.php");

?>
</body>
</html>