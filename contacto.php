<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .form-section {
            background-color: #64483c;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }
        .form-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #64483c;
            border-radius: 8px;
        }
        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }
        .no-gutters > .col,
        .no-gutters > [class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }
        .img-container {
            display: flex;
            align-items: center;
        }
        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .content {
            position: relative;
            text-align: center;
            margin-top: 20px;
        }
        .image-container {
            position: relative;
        }
        .image-container img {
            display: block;
            width: 100%;
            height: auto;
        }
        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.5em;
            color: #000;
            max-width: 90%;

        }
        .parrafo{
            font-size: .8em;
        }
        .no-margin {
            margin: 0;
            padding: 0;
        }
        .footer {
            background-color: #dbc5ae;
        }
        @media (max-width: 1024px) {
            .overlay-text {
                font-size: 1em;
                max-width: 90%;
                padding: 10px;
            }
        }
        @media (max-width: 768px) {
            .overlay-text {
                font-size: .8em;
                max-width: 95%;
                padding: 8px;
            }
            .btn-color {
                font-size: 0.7em;
                padding: 5px 10px;
            }
        }
        @media (max-width: 375px) {
            .overlay-text {
                font-size: 0.5em;
                max-width: 95%;
                padding: 1px;
            }
        }
        @media (max-width: 320px) {
            .overlay-text {
                font-size: 0.7em;
                max-width: 90%;
                padding: 3px;
            }
        }
        .btn-color {
            background-color: #bf875d;
            color: white;
        }
        .btn-color:hover {
            background-color: white;
            color: #bf875d;
            border: 2px solid #bf875d;
        }
        .img-small {
            max-width: 300px;
            height: auto;
        }
        @media (max-width: 768px) {
            .img-small {
                max-width: 200px;
            }
        }
        @media (max-width: 576px) {
            .img-small {
                max-width: 150px;
            }
        }
        .modal-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <!-- Navbar  -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-expand-md 
          fixed-top  shadow-0 navbar-light" style="background-color: #dbc5ae;">
            <div class="container">   
            <a class="navbar-brand" href="principal.php" id="titulo">
                <img src="img/logo1.png" width="55px"><strong>Gourmet</strong></a>
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
                    <a class="nav-link  pd-4 px-3" href="">
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
    <div class="container mt-5">
        <div class="row no-gutters no-margin">
            <div class="col-lg-6 img-container">
                <img src="img/frappeContact.avif" alt="Descripción de la imagen">
            </div>
            <div class="col-lg-6 form-section">
                <div class="form-container">
                    <form id="contactForm">
                        <h3>¿Dudas, sugerencias o comentarios?</h3>
                        <p>Estamos para ayudarte. <br>
                            Llena el siguiente formulario y nos comunicaremos contigo lo antes posible.</p>
                        <div class="form-group">
                            <label for="name">Nombre*</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="Email" name="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje*</label>
                            <textarea class="form-control" id="Mensaje" name="Mensaje" rows="4" required></textarea>
                        </div> <br>
                        <button type="submit" class="btn btn-color">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">GRACIAS POR PONERTE EN CONTACTO CON NOSOTROS</h1>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="fs-4 fw-lighter">¡Agradecemos tus comentarios! Nos comprometemos a encontrar una solución adecuada.</h5>
                        <img src="img/logo1.png" alt="Imagen modal" class="img-fluid img-small">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-color btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="principal.php" class="btn btn-color">Ir a la pagina</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-container no-margin position-relative">
            <img src="img/fac.jpg" alt="Imagen de ejemplo" class="img-fluid">

            <div class="overlay-text">
                <h1><strong>FACTURACION</strong></h1>
                <p class="parrafo">
                    La facturación se elabora en cada Franquicia dónde se efectuó el consumo. <br>
                    Franquicia Maestra <strong>NO</strong> factura. <br> <br>
                    ¿Dudas? <br>
                    Contáctanos <br>
                    <a href="mailto:correo@ejemplo.com">elizabeth@gourmet.mx.com</a> <br> <br>
                    <a href="principal.php" class="btn btn-color">Volver al Inicio</a>
                </p>
            </div>
        </div>
    </div>
    <!--FOOTER  -->
    <footer class="footer">
        <div class="align-items-center col text-center">
            <div class="footer-icons p-2">
                <h3><strong>FRAPPES GOURMET</strong></h3>
                <p>¡Síguenos en nuestras redes sociales!</p>
                <!-- Iconos de redes sociales -->
                <a class="text-secondary fa-lg" href="https://www.facebook.com/profile.php?id=100077067521462&mibextid=LQQJ4d"><i class="fab fa-facebook"></i></a>
                <a class="text-secondary fa-lg" href="https://www.instagram.com/la_frapperia_oficial?igsh=bWMzenk1dGxpdGgy"><i class="fab fa-instagram"></i></a>
                <a class="text-secondary fa-lg" href="https://wa.me/4661079356?text=¡Hola,%20me%20interesa%20ordenar!"><i class="fab fa-whatsapp"></i></a>
                <div class="text-center p-2">
                © 2024 Grupo Gourmet S.A.B. de C.V. Todos los Derechos
            </div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#contactForm").on("submit", function(event) {
                event.preventDefault(); // Evitar el comportamiento predeterminado del formulario
                
                var formData = $(this).serialize(); // Serializar los datos del formulario

                $.ajax({
                    type: "POST",
                    url: "guardar_contacto.php",
                    data: formData,
                    success: function(response) {
                        // Mostrar la ventana modal si la inserción es exitosa
                        $('#exampleModal').modal('show');
                    },
                    error: function() {
                        alert("Ocurrió un error al enviar los datos.");
                    }
                });
            });
        });
    </script>
</body>
</html>
