
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeatBazaar</title>
    <link rel="icon"  type="image/x-icon" href="/imagenes/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">
 
    
   
  </head>
  
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
            <li><a href="#" class="text-white">Soporte</a></li>
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
        <img class="logo" src="imagenes/logo.jpg">
        
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
    Session
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="session.php">Iniciar sesion</a></li>
    <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
    <li><a class="dropdown-item" href="crearcuenta.php">Crear Cuenta</a></li>
    <li><a class="dropdown-item" href="crearcuenta.php">:v</a></li>

  </ul>
</div>
        </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        
 
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
      <img src="imagenes/productos/Guitarra.jpg"class="d-block w-100" alt="...">
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
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       <!--Carta sus-->
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/productos/centralnuc.jpeg">
             
            <div class="card-body">
              <h5 class="card-text">Álbum "Central Nucleus" </h5>
              <p class="card-text">$2500</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-outline-info">Detalles</button>
                 
                </div>
                <button type="button" class="btn btn-outline-info">Agregar al carrito</button>
              </div>
            </div>
          </div>
        </div>
           <!--Carta sus-->
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/productos/c.jpeg">
             
            <div class="card-body">
              <h5 class="card-text">Álbum "C" </h5>
              <p class="card-text">$2500</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-outline-info">Detalles</button>
                 
                </div>
                <button type="button" class="btn btn-outline-info">Agregar al carrito</button>
              </div>
            </div>
          </div>
        </div>
           <!--Carta sus-->
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/productos/a0816289173_16.jpg">
             
            <div class="card-body">
              <h5 class="card-text">Álbum "Jidhadvent" </h5>
              <p class="card-text">$2500</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-outline-info">Detalles</button>
                 
                </div>
                <button type="button" class="btn btn-outline-info">Agregar al carrito</button>
              </div>
            </div>
          </div>
        </div>
           <!--Carta sus-->
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/productos/uufo.jpg">
             
            <div class="card-body">
              <h5 class="card-text">Álbum "U.U.F.O" </h5>
              <p class="card-text">$2500</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-outline-info">Detalles</button>
                 
                </div>
                <button type="button" class="btn btn-outline-info">Agregar al carrito</button>
              </div>
            </div>
          </div>
        </div>
           <!--Carta sus-->
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/productos/gaby.jpeg">
             
            <div class="card-body">
              <h5 class="card-text">Álbum "GABRiELLA" </h5>
              <p class="card-text">$2500</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-outline-info">Detalles</button>
                 
                </div>
                <button type="button" class="btn btn-outline-info">Agregar al carrito</button>
              </div>
            </div>
          </div>
        </div>
           <!--Carta sus-->
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/productos/acdcremera.jpg">
             
            <div class="card-body">
              <h5 class="card-text">Remera ACDC </h5>
              <p class="card-text">$2500</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-outline-info">Detalles</button>
                 
                </div>
                <button type="button" class="btn btn-outline-info">Agregar al carrito</button>
              </div>
            </div>
          </div>
        </div>
           <!--Carta sus-->
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/productos/theblue.jpg">
             
            <div class="card-body">
              <h5 class="card-text">Álbum "The Blue Sky" </h5>
              <p class="card-text">$2500</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-outline-info">Detalles</button>
                 
                </div>
                <button type="button" class="btn btn-outline-info">Agregar al carrito</button>
              </div>
            </div>
          </div>
        </div>
           <!--Carta sus2-->
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/productos/album2.jpg">
           
            <div class="card-body">
              <h5 class="card-text">Álbum "Bad" </h5>
              <p class="card-text">$2500</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-outline-info">Detalles</button>
                 
                </div>
                <button type="button" class="btn btn-outline-info">Agregar al carrito</button>
                
              </div>
            </div>
          </div>
        </div>
           <!--Carta sus-->
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/productos/album2.jpg">
             
            <div class="card-body">
              <h5 class="card-text">Álbum "Bad" </h5>
              <p class="card-text">$2500</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-outline-info">Detalles</button>
                 
                </div>
                <button type="button" class="btn btn-outline-info">Agregar al carrito</button>
                
              </div>
            </div>
          </div>
        </div>

  </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>