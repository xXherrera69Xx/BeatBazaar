<?php
include 'includes/config.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BeatBazaar</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<a href="#" class="navbar-brandd-flex align-items-center"><img class="logo" src="imagenes/logoazul.png"></a>
		
	
		<button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			 
		</button>
		<div id="my-nav" class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Iniciar sesion<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="crearcuenta.php" tabindex="-1" aria-disabled="true">Crear Cuenta</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="carrocompra.php" tabindex="-1" aria-disabled="true">Carro de compra</a>
				</li>
			</ul>
		</div>
	</nav>
	<br/>
	<br/>
	<div class="container">
     <br>
	 <div class="alert alert-success" role="alert">
		Tienes productos en tu carro de compras
		<a href="#" class="badge badge-success">Ver carro</a>
	 </div>

	</div>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/productos/Guitarra.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/productos/bateria.webp" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/productos/1/uufo.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row">
<?php

include("includes/config.php");
	  $query = "SELECT * FROM productos";
	  $resultado = $conn->query($query);
	  while ($row = $resultado-> fetch_assoc()) {
		?>

	<div class="col-3">
     <div class="card">
		<img 
		class="card-img-top" 
		src="imagenes/productos/1/uufo.jpg" 
		alt="">
		<div class="card-body">
			<h5 class="card-title">Title</h5>
			<p class="card-text">Content</p>
			<button class="btn btn-primary" name="btnaction" value="agregar" type="submit">Agregar al carrito</button>
			<button class="btn btn-primary" type="button">Detalles del producto</button>
		</div>
	 </div>

	</div>
</div>
<?php
            }

      ?>

	
</body>
</html>