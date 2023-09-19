<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
 <h1>Listado de Usuarios</h1>
 <?php
 //conffiguracion de la conexion de base de datos
 $serividor="localhost";//Cambia esto si tu servidor de MySQL no está en localhost
 $usuario="tu_usuarios";
 $contrasena="tu_contraseña";
 $base_datos="usuarios";

 $conexion=new Mysqli($servidor, $usuario, $contrasena, $base_datos);

 //comprobar la conexión
if($conexion->connect_error){
    die("Error en la conexión a la base de datos:".$conexion->connect_error);
}

//Consulta SQL para obtener la lista de usuarios
$sql="SELECT id, nombre, correo FROM usuarios";
$resultado=$conexion->query($sql);

if($resultado->num_rows>0){
    //Mostrar los usarios en una tabla 
    echo"<table border='1'>";
    echo"<tr><th>ID</th><th>Nombre</th><th>Correo Electrónico</th></tr>";
    
    while($fila=$resultado->fetch_assoc()){
        echo"<tr>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["nombre"] . "</td>";
        echo "<td>" . $fila["correo"] . "</td>";
        echo "</tr>";
    }

    echo"</table>";
}else{
    echo"No se encontraron usuarios en la base de datos.";
}

//Cerrrar la conexión a la base de datos
$conexion->close();
?>
</body>
</html>