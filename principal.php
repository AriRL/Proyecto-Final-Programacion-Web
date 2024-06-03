<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <title>examen</title>
    <!-- Incluye los íconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
      .alto {
        background-color: #dbc5ae;
        height: auto;
        margin-bottom: 20px;
        }
      .carousel-item img {
        max-width: 100%;
        height: 500px; /* Ajusta la altura de las imágenes */
        object-fit: cover;
      }
      .galeria-img:hover {
        transform: scale(1.05);
      }
      #galeria-section .galeria-img {
        width: 100%; /* Hacer que las imágenes ocupen el 100% del ancho del contenedor */
       height: auto; /* Altura automática para mantener la proporción */
        max-width: 100%; /* Asegurar que el ancho máximo sea el 100% del contenedor */
        object-fit: cover; /* Para recortar y rellenar el área del contenedor */
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
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbarIcons" data-bs-offset="0" tabindex="0"></body>
    <div class="container">
      <!-- Navbar  -->
      <header>
        <nav class="navbar navbar-expand-lg navbar-expand-md 
          fixed-top  shadow-0 navbar-light" style="background-color: #dbc5ae;">
            <div class="container">   
            <a class="navbar-brand" href="#" id="titulo">
                <img src="img/logo1.png" width="55px">Gourmet</a>
              <button class="navbar-toggler ps-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarIcons"
                aria-controls="navbarIcons" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                  
                </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarIcons">
                <ul class="navbar-nav me-auto" >
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
                <ul class="navbar-nav ">
                  <li class="nav-item col-xs-4 col-md-4">
                    <a class="nav-link  pd-4 px-3" href="contacto.php">
                      <i class="bi bi-email"><img src=https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/envelope.svg 
                        width="32" height="32" alt=""></i>
                    </a>
                  </li>
                  <li class="nav-item col-xs-4 col-md-4 ">
                    <a class="nav-link px-3" href="usuariosB.php" >
                      <i class="bi bi-person "><img src=https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/person-circle.svg width="32" height="32" alt=""> 
                    </i>
                    </a>
                  </li>
                </ul>
              </div>
            </div> 
          </nav>
      </header>

      <main> 
        <section id="carousel-section" class="md-3 mt-4"> 
      <!-- Carousel -->
      <div class="row">  
      <div id="carouselExample" class="carousel slide md-3 mt-4" >
        <div class="carousel-inner md-3 mt-4" >
          <div class="carousel-item active md-2 mt-3" >
            <div class="d-flex align-items-center md-3 mt-2 "> 
            <img src="img-carousel/caru8.jpg" class="d-block w-100" alt="..." /> 
          </div>
        </div>
          <div class="carousel-item md-3 mt-4">
            <div class="d-flex align-items-center "> 
            <img src="img-carousel/caru2.jpg" class="d-block w-100" alt="..." />
          </div>
          </div>
          <div class="carousel-item md-3 mt-4">
            <div class="d-flex align-items-center "> 
            <img src="img-carousel/caru6.jpeg" class="d-block w-100" alt="..." />
          </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </section>


    <section id="cards-section"> 
      <div class="row">
        <h1 class="mb-3 mt-2 p-3 text-center" style="font-size: 3em; font-weight: bold; color: #8B4513;">Más vendidos</h1>
        <!-- Card 1 -->
        <div class="col-xl-4 col-lg-4 col-xs-12 col-sm-12 col-md-4 S-columnas">
          <div class="card">
            <img src="img/card2.jpeg" class="card-img-top" alt="Postres con fresas" />
            <div class="card-body">
              <h5 class="card-title">Frappe de Oreo</h5>
              <!-- Accordion -->
              <div class="accordion accordion-flush" id="accordionOreo">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOreo" aria-expanded="false" aria-controls="flush-collapseOreo">
                      Más información
                    </button>
                  </h2>
                  <div id="flush-collapseOreo" class="accordion-collapse collapse" data-bs-parent="#accordionOreo">
                    <div class="accordion-body">
                      Sumérgete en el delicioso sabor del frappe de Oreo, una mezcla cremosa y dulce que combina galletas Oreo trituradas con un toque de crema.
                    </div>
                  </div>
                </div>
              </div>
              <!-- Termina accordion -->
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 col-md-4 S-columnas">
          <div class="card">
            <img src="img/card1.jpeg" class="card-img-top" alt="Postres con fresas" />
            <div class="card-body">
              <h5 class="card-title">Frappe de Café</h5>
              <!-- Accordion -->
              <div class="accordion accordion-flush" id="accordionCafe">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCafe" aria-expanded="false" aria-controls="flush-collapseCafe">
                      Más información
                    </button>
                  </h2>
                  <div id="flush-collapseCafe" class="accordion-collapse collapse" data-bs-parent="#accordionCafe">
                    <div class="accordion-body">
                      Disfruta de un frappe de café intensamente refrescante, perfecto para revitalizar tu día con su sabor robusto y energizante.
                    </div>
                  </div>
                </div>
              </div>
              <!-- Termina accordion -->
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-4 col-xl-4 col-xs-12 col-sm-12 col-md-4 S-columnas">
          <div class="card">
            <img src="img/card4.jpeg" class="card-img-top" alt="Postres con fresas" />
            <div class="card-body">
              <h5 class="card-title">Frappe de Fresa</h5>
              <!-- Accordion -->
              <div class="accordion accordion-flush" id="accordionFresa">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFresa" aria-expanded="false" aria-controls="flush-collapseFresa">
                      Más información
                    </button>
                  </h2>
                  <div id="flush-collapseFresa" class="accordion-collapse collapse" data-bs-parent="#accordionFresa">
                    <div class="accordion-body">
                      Refresca tu paladar con un frappe de fresa, lleno de la frescura y dulzura natural de las fresas, ideal para cualquier momento del día.
                    </div>
                  </div>
                </div>
              </div>
              <!-- Termina accordion -->
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
      <!-- mensaje para formulario -->
      <section id="formulario-section"> 
    <div class="p-5 alto mt-5 mb-4 text-center">
        <h2 >¡Bienvenido a la experiencia más refrescante en la institución!</h2>
        <p> En nuestra frapería, cada sorbo es una aventura llena de sabores irresistibles y momentos únicos. ¿Quieres ser parte de nuestra comunidad exclusiva? Regístrate ahora y descubre promociones especiales, ofertas tentadoras y acceso prioritario a nuestras novedades. ¡No te pierdas la oportunidad de unirte a la revolución del sabor! Regístrate hoy y deja que tus papilas gustativas se conviertan en las más felices de la ciudad. ¡Te esperamos con un vaso lleno de delicias y una sonrisa lista para recibirte!
        </p>
         <!-- Modal -->
         <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#registroModal">Registrate aquí</button>
    <div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #dbc5ae;">
            <h5 class="modal-title" id="registroModalLabel" >Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form id="registroForm" >
              <div class="mb-3" >
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>

              <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="mb-3">
                <label for="contrasenia" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contrasenia" name="contrasenia" required>
              </div>

              <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono">
              </div>

              <div class="mb-3">
                <label for="direccion" class="form-label">Direccion Completa</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="lugar de residencia, #calle" required>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger" id="enviarBtn">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

<!-- Galería -->
<section id="galeria-section"> 
  <div class="container mt-4">
      <h2 style="font-size: 3em; font-weight: bold; color: #8B4513;" class="text-center p-2">Prime products</h2>
      <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <img src="img-card/coffe.jpeg" class="shadow-1-strong rounded mb-4 galeria-img" alt="Imagen 1">
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
              <img src="img-card/coffe2.jpeg" class="shadow-1-strong rounded mb-4 galeria-img" alt="Imagen 2">
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
              <img src="img-card/coffe3.jpeg" class="shadow-1-strong rounded mb-4 galeria-img" alt="Imagen 3">
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
              <img src="img-card/coffe4.jpeg" class="shadow-1-strong rounded mb-4 galeria-img" alt="Imagen 4">
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
              <img src="img-card/coffe5.jpeg" class="shadow-1-strong rounded mb-4 galeria-img" alt="Imagen 5">
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
              <img src="img-card/coffe6.jpeg" class="shadow-1-strong rounded mb-4 galeria-img" alt="Imagen 6">
          </div>
      </div>
  </div>
</section>

      <!-- termina Galery -->
    </section>
  </main>

      <div class="p-5 alto mt-2 mb-4 text-center">
        <h2 > Próximamente nuevas sucursales</h2>
        <p> ¡Descubre el sabor en cada esquina! Visita nuestras próximas sucursales y sumérgete en un mundo de deliciosos sabores y momentos inolvidables. Te esperamos con los brazos abiertos para que disfrutes de la experiencia única que solo nosotros podemos ofrecerte. ¡No te lo pierdas! 
        </p>
    </div>
    <div class="gif-container position-relative ">
      <img style="width: 100%;" src="icons/gif1.gif" alt=""> 
      <div class="position-absolute top-50 start-50 translate-middle text-center">
        <img  src="img/logo1.png"  width="30%"> <br>
        <p class="h1 position-relative"  width="30%">Gourmet</p>
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

      <script>
        function validarFormulario(){
          var nombre= document.getElementById('nombre').value;
          var apellido= document.getElementById('apellido').value;
          var email= document.getElementById('email').value;
          var password= document.getElementById('contrasenia').value;
          var direccion= document.getElementById('direccion').value;

          if(nombre.trim() == '' || apellido.trim() == '' || email.trim() == '' || password.trim() == '' ||
          direccion.trim() == ''){
            alert('Por favor complete todos los campos');
            return;
          }

          if (!email.includes('@') || !email.includes('.')){
            alert('Por favor ingrese un correo electrónico válido');
            return;
          }

          document.getElementById('enviarBtn').disabled = false;
         
        }
        </script>
    <script src="js/bootstrap.bundle.min.js">
    </script>
    
  </body>
</html>
