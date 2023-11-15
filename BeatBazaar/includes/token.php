<?php
$por_pagina=10;

if(isset($_GET['pagina']))
$pagina=$_GET['pagina'];

else{

    $pagina=1;
}

$empieza= ($pagina=1) * $por_pagina;
$query= "SELECT * FROM productos LIMIT $empieza, $por_pagagina";
$resultado= mysqli_query($conn,$query);

?>