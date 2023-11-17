<?php
include("includes/config.php");

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
          <button class="btn btn-outline-success" name="buscar" id="buscar" type="submit">Buscar</button>

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
                    <li><a href="Perfil.php" class="hmenu-item" data-menu-id="3" data-ref-tag="nav_em_1_1_1_3">
                      <div>Perfil.php</div><i class="nav-sprite hmenu-arrow-next"></i>
                    </a></li>
                                
                                

            
              </ul>
            </div>
          </a>
          
  
          <div class="container-icon">
          <div class="container-cart-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>
            
              <div class="count-products">
                  <span id="contador-productos">0</span>
              </div>
          </div>

          <div class="container-cart-products hidden-cart">
              <div class="row-product hidden">
                  <div class="cart-product">
                      <div class="info-cart-product">
                          <span class="cantidad-producto-carrito">1</span>
                          <p class="titulo-producto-carrito">Zapatos Nike</p>
                          <span class="precio-producto-carrito">$80</span>
                      </div>
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="icon-close"
                      >
                          <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M6 18L18 6M6 6l12 12"
                          />
                      </svg>
                  </div>
              </div>

              <div class="cart-total hidden">
                  <h3>Total:</h3>
                  <span class="total-pagar">$200</span>
              </div>
              <div class="carta-pago hidden">
                <div class="formas-pago">
                  <a href="../pago/index-pagos.htm" class="btn-pago">comprar</a>
                </div>
              </div>
              <p class="cart-empty">El carrito está vacío</p>
              <a href="paginaguido.html" class="cart-empty">GuidoCarro 1.4.0-Beta</a>
          </div>
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
   
   <div class="productos-item">
   <div class="col">
  <div   class="card">
    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>">
      <div class="card-body">
       
      <h5>  <?php echo $row['nombre']; ?> </h5>
      <p> <?php echo $row['precio']; ?> </p>
      <div class="btn-group">
        <form action="" method="post">
         
        
 
      <a href="centranu.php"><button type="button" class="btn btn-outline-info">Detalles</button></a>  
      <button type="submit" name="botona" value="agregar" class="btn btn-outline-info">Agregar al carrito</button>
        </form>
    </div>
    </div>
  </div>
   </div>
   </div>
            
            <?php
            }

      ?>


  </main>
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
  </ul>
</nav>



<footer class="footer-distributed">

			<div class="footer-left">

				<h3><img class="logo" src="imagenes/logoazul.png"> BeatBazaar</h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Precios</a>
				
					<a href="sobrenostros.php">Quienes somos</a>
					
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
<script src="js/carrocompra.js"></script>
</body>



<script type="text/javascript"> 

</script>

</html>