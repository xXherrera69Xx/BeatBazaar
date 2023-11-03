<?php
require 'includes/token.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BeatBazaar</title>
  <link rel="icon" type="image/x-icon" href="/imagenes/logo.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="css/estilos.css" rel="stylesheet">
   <script src="../js/bootstrap.js"></script>

</head>

<body>


  <header data-bs-theme="dark">
    <div class="collapse text-bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4>Sobre Nosotros</h4>
            <p class="text-body-secondary">BeatBazaar es una tienda echa por y para amantes de la musica, en BeatBazaare encontraras de todo. Desde Discos, Ropa, Instrumentos y mucho mas relacionado con la musica</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4>Contacto</h4>
            <ul class="list-unstyled">
              <li><a href="soporte.php" class="text-white">Soporte</a></li>
              <li><a href="#" class="text-white">Preguntas Frecuentes</a></li>
              <li><a href="#" class="text-white">Contacta con nosotros</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <img class="logo" src="imagenes/logoazul.png">

          <strong>BeatBazaar</strong>
          <div class="dropdown">


            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Categorias</a></li>
              <li><a class="dropdown-item" href="#">Ofertas</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </div>

        </a>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscador" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
          <a href="session.php">
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                session
              </a>
              <ul class="dropdown-menu">
                <ul class="hmenu hmenu-visible" data-menu-id="1">
                  <li>
                    <div class="hmenu-item hmenu-title ">Cuenta</div>
                  </li>
                  <li><a href="session.php" class="hmenu-item" data-menu-id="2" data-ref-tag="nav_em_1_1_1_2">
                      <div>Iniciar sesion</div>
                      <i class="nav-sprite hmenu-arrow-next"></i>
                    </a></li>
                  <li><a href="crearcuenta.php" class="hmenu-item" data-menu-id="3" data-ref-tag="nav_em_1_1_1_3">
                      <div>Crear cuenta</div><i class="nav-sprite hmenu-arrow-next"></i>
                    </a></li>
                  <li><a href="" class="hmenu-item" data-menu-id="4" data-ref-tag="nav_em_1_1_1_4">
                      <div>Amazon Appstore</div><i class="nav-sprite hmenu-arrow-next"></i>
                    </a></li>
                  <li class="hmenu-separator"></li>
                  <li>
                    <div class="hmenu-item hmenu-title ">buscar por departamento</div>
                  </li>
                  <li><a href="" class="hmenu-item" data-menu-id="5" data-ref-tag="nav_em_1_1_1_6">
                      <div>Electrónicos</div><i class="nav-sprite hmenu-arrow-next"></i>
                    </a></li>
                  <li><a href="" class="hmenu-item" data-menu-id="6" data-ref-tag="nav_em_1_1_1_7">
                      <div>Computadoras</div><i class="nav-sprite hmenu-arrow-next"></i>
                    </a></li>
                  <li><a href="" class="hmenu-item" data-menu-id="7" data-ref-tag="nav_em_1_1_1_8">
                      <div>Smart Home</div><i class="nav-sprite hmenu-arrow-next"></i>
                    </a></li>
              </ul>
            </div>
          </a>
  

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <button class="carroshop">carro</button>
            <div class="contar-producto">
              <span id="contar-producto">0</span>
            </div>
            <div class="contenercarroproescondido">
             <div class="productocarta">
              <div class="infocarproduct">
                <span class="cantidadproducto">1</span>
                <span class="nombreproducto">hola</span>
                <span class="precioproducto">100</span>

              </div>
              <button class="cancel">X</button>
             </div>

            </div>


          </button>
      </div>
    </div>
  </header>

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/productos/Guitarra.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Guitarras</h5>
          <p>Categoria Destacada.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagenes/productos/flauta.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Flautas</h5>
          <p>Categoria Destacada</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagenes/productos/bateria.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Baterias</h5>
          <p>Categoria Destacada</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>





  
  <main>
    

  
    <div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php

      include("includes/config.php");
            $query = "SELECT * FROM productos";
            $resultado = $conn->query($query);
            while ($row = $resultado-> fetch_assoc()) {
              ?>
   
 
   <div class="col">
    <div class="card">
    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>">
      <div class="card-body">
       
      <h5>  <?php echo $row['nombre']; ?> </h5>
      <p> <?php echo $row['precio']; ?> </p>
      <div class="btn-group">
      <a href="centranu.php"><button type="button" class="btn btn-outline-info">Detalles</button></a>  
      <button type="button" class="btn btn-outline-info">Agregar al carrito</button>
    </div>
    </div>
  </div>
   </div>
            
            <?php
            }

      ?>


  </main>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3><img class="logo" src="imagenes/logoazul.png"> BeatBazaar</h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Precios</a>
				
					<a href="#">About</a>
					
					<a href="#">Afiliados</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">BeatBazaar copright © 2023, inc</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Av.9 de julio</span> CABA Buenos Aires sas </p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+54 9 11 3790-0027</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@companyBeatbazaar.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Sobre la empresa</span>
					El cliente debe estar muy contento, somos una compañia pequeña.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
</body>

</html>