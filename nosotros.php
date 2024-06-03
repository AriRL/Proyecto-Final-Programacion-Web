<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluye los íconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .info-section {
            margin-top: 20px;
        }
        .info-section img {
            max-width: 100%;
            height: auto;
        }
        .info-text {
            padding: 20px;
        }
        .custom-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgb(255, 249, 249);
            padding: 100px;
            border-radius: 100px;
            color: #000000;
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        
        .navbar-custom {
            font-size: 1.5rem;
        }
        .sevillana-font {
            font-family: 'Sevillana', cursive;
        }
        .hover-effect {
            transition: transform 0.3s ease;
        }
        .hover-effect:hover {
            transform: scale(1.05);
        }
        footer {
            background-color: #dbc5ae;
            padding: 10px 0;
            width: 100%;
            position: relative;
            left: 0;
            bottom: 0;
        }
        .footer-icons a {
            color: #64483c; /* Color café */
            margin: 0 10px;
            font-size: 1.5rem;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarIcons" data-bs-offset="0" tabindex="0">
    <div class="container">
      <!-- Navbar  -->
      <header>
        <nav class="navbar navbar-expand-lg navbar-expand-md 
          fixed-top  shadow-0 navbar-light" style="background-color: #dbc5ae;">
            <div class="container">   
            <a class="navbar-brand" href="principal.php" id="titulo">
                <img src="img/logo1.png" width="55px"><strong>Gourmet</strong></a>
              <button class="navbar-toggler ps-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarIcons"
                aria-controls="navbarIcons" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarIcons">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item active">
                    <a class="nav-link px-3" href="">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-3" href="index.php">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-3" href="galeria.php">Galeria</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-3" href="nosotros.php">Nosotros</a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item col-xs-4 col-md-4">
                    <a class="nav-link pd-4 px-3" href="contacto.php">
                      <i class="bi bi-email"><img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/envelope.svg" width="32" height="32" alt=""></i>
                    </a>
                  </li>
                  <li class="nav-item col-xs-4 col-md-4">
                    <a class="nav-link px-3" href="usuariosB.php">
                      <i class="bi bi-person"><img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/person-circle.svg" width="32" height="32" alt=""></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div> 
          </nav>
      </header>

    <!-- Carrusel -->
    <div id="frappeCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#frappeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#frappeCarousel" data-slide-to="1"></li>
            <li data-target="#frappeCarousel" data-slide-to="2"></li>
            <li data-target="#frappeCarousel" data-slide-to="3"></li>
        </ol>
        <div id="nosotros" class="carousel-inner">
            <div class="carousel-item active">
                <img src="img-carousel/nosotros.jpg" class="d-block w-100" alt="Frappe 0">
            </div>
            <div class="carousel-item">
                <img src="img-carousel/caru5.jpg" class="d-block w-100" alt="Frappe 1">
            </div>
            <div class="carousel-item">
                <img src="img-carousel/nosotros.jpg" class="d-block w-100" alt="Frappe 2">
            </div>
            <div class="carousel-item">
                <img src="img-carousel/caru5.jpg" class="d-block w-100" alt="Frappe 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#frappeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#frappeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
    <!-- Información -->
    <div class="container mt-2 pt-2">
        <h2 class="text-center" style="font-size: 2em; font-weight: bold; color: #8B4513;">SOBRE NOSOTROS</h2>
        <p style="font-size: 1.2em;">
            Bienvenidos a nuestra página de frappes, donde encontrarás una gran variedad de deliciosos frappes preparados con ingredientes de la mejor calidad. Cada uno de nuestros frappes está hecho con cuidado y pasión para ofrecerte una experiencia única y refrescante. ¡Disfruta de nuestros sabores y encuentra tu favorito!
            Nuestra misión es ofrecer a nuestros clientes bebidas exquisitas y una experiencia inolvidable en cada visita. Desde frappes clásicos como el de chocolate y vainilla, hasta combinaciones innovadoras como el frappe de matcha con coco, nuestro menú está diseñado para satisfacer todos los gustos.
        </p>
        <p style="font-size: 1.2em;">
            Empezamos nuestro viaje en el 2010 con una pequeña tienda en el centro de la ciudad. Gracias al apoyo y la fidelidad de nuestros clientes, hemos crecido y ahora contamos con varias sucursales. Cada frappe es elaborado con técnicas artesanales y una selección cuidadosa de ingredientes frescos y naturales.
            Además de nuestros frappes, ofrecemos un ambiente acogedor y un servicio amable. Nos encanta ser parte de tus momentos especiales y estamos comprometidos a seguir mejorando para ofrecerte lo mejor. Ven a visitarnos y descubre por qué somos la elección favorita de muchos.
        </p>
    </div>
    <h2 style="font-size: 2em; font-weight: bold; color: #8B4513;" class="text-center p-2">Prime products</h2>
    <!-- Nueva Sección con 3 Imágenes -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <img src="img-carousel/sobresale.jpeg" class="img-fluid hover-effect" alt="Frappe 1">
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <img src="img-carousel/sobresale2.jpeg" class="img-fluid hover-effect" alt="Frappe 2">
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <img src="img-carousel/sobresale1.jpeg" class="img-fluid hover-effect" alt="Frappe 3">
            </div>
        </div>
    </div>
    <!-- Imagen y texto     -->
    <div class="container info-section my-5">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <img src="img-carousel/frappe-feature.jpg.jpeg" class="img-fluid" alt="Frappe destacado">
            </div>
            <div class="col-12 col-md-6 info-text">
                <h3 style="font-size: 2em; font-weight: bold; color: #8B4513;">Nuestro Frappe Destacado</h3>
                <p style="font-size: 1.2em;">
                    Prueba nuestro frappe destacado del mes: el frappe de café con avellanas. Una mezcla perfecta de café recién molido y un toque de avellanas que te encantará. Ven y disfruta de esta exquisitez en nuestra tienda.
                </p>
            </div>
        </div>
    </div>
    <!-- Nueva Sección con 3 Imágenes -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <img src="img-carousel/mod1.jpeg" class="img-fluid hover-effect" alt="..">
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <img src="img-carousel/mod2.jpeg" class="img-fluid hover-effect" alt="..">
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <img src="img-carousel/mod.jpeg" class="img-fluid hover-effect" alt="...">
            </div>
        </div>
    </div>
<!-- Imagen y texto     -->
<div class="container info-section my-5">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <img src="img-carousel/Carousel3.jpeg" class="img-fluid" alt="Frappe destacado">
        </div>
        <div class="col-12 col-md-6 info-text">
            <h3 style="font-size: 2em; font-weight: bold; color: #8B4513;">Los Mejores Frappés de la Institución</h3> <!-- Modificación del título -->
            <p style="font-size: 1.2em;">
                Descubre nuestros frappés insignia: una selección de los mejores sabores gourmet que ofrecemos. Desde el clásico frappé de café hasta combinaciones únicas con ingredientes premium, cada uno de nuestros frappés está diseñado para deleitar tu paladar. ¡Ven y experimenta la excelencia en nuestra tienda!
            </p>
        </div>
    </div>
</div>
</div>
<!--FOOTER  -->
<footer>
    <div class="text-center">
        <div class="footer-icons d-flex flex-column align-items-center">
            <h3><strong>FRAPPES GOURMET</strong></h3>
            <p>¡Síguenos en nuestras redes sociales!</p>
            <div>
                <a href="https://www.facebook.com/profile.php?id=100077067521462&mibextid=LQQJ4d"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/la_frapperia_oficial?igsh=bWMzenk1dGxpdGgy"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/4661079356?text=¡Hola,%20me%20interesa%20ordenar!"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="text-center">
                © 2024 Grupo Gourmet S.A.B. de C.V. Todos los Derechos
            </div>
        </div>
    </div>
</footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
