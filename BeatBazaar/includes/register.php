<?php

include("config.php");

if (isset($_POST['register'])){
   if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['contraseña']) >= 1
       ) { 

        $nombre =trim($_POST['nombre']);
        $apellido =trim($_POST['apellido']);
        $correo =trim($_POST['correo']);
        $contraseña= md5(trim($_POST['contraseña'])); 
        $consulta = "INSERT INTO usuarios(Nombre, Apellido, Correo, Contraseña)
             VALUES('$nombre', '$apellido', '$correo', '$contraseña')";
        $resultado = mysqli_query($conn, $consulta);
             

        
          //vereficar que el correo no se repitan//
          $vereficar_correo = mysqli_query($conn, "SELECT * FROM usuarios WHERE Correo='$correo'");

          if(mysqli_num_rows($vereficar_correo) > 0){

            echo'
            <script>
               alert("Este correro ya esta registrado");
               window.location = "index.php";
            </script>
            ';
            exit();

          }


          
          //vereficar que el nombre no se repitan//
          $vereficar_nombre = mysqli_query($conn, "SELECT * FROM usuarios WHERE Nombre='$nombre'");

          if(mysqli_num_rows($vereficar_nombre) > 0){

            echo'
            <script>
               alert("Este nombre ya esta registrado");
               window.location = "index.php";
            </script>
            ';
            exit();

          }


          
          //vereficar que el apellido no se repitan//
          $vereficar_apellido = mysqli_query($conn, "SELECT * FROM usuarios WHERE Apellido='$apellido'");

          if(mysqli_num_rows($vereficar_apellido) > 0){

            echo'
            <script>
               alert("Este apellido ya esta registrado");
               window.location = "index.php";
            </script>
            ';
            exit();

          }


           //vereficar que la contraseña no se repitan//
           $vereficar_contraseña = mysqli_query($conn, "SELECT * FROM usuarios WHERE Contraseña='$contraseña'");

           if(mysqli_num_rows($vereficar_contraseña) > 0){
 
             echo'
             <script>
                alert("Esta contraseña ya esta registrado");
                window.location = "index.php";
             </script>
             ';
             
             
             exit();
 
           }




        if ($resultado){

            ?>
            <h3 class="success">Tu registro se a completado</h3>
            <?php
          } else{
            ?>

            <h3 class="error">Error al registrase</h3>
            <?php
          }
       } else{
        ?>

        <h3 class="error">Hay campos inconpletos</h3>
        <?php
       }
}



?>