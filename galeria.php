<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
    <title>Galeria</title>
    <style>
        .center-image {
    display: flex !important;
    justify-content: center;
    align-items: center;
    margin: auto; /* Añadir márgenes automáticas para centrar */
}

        
          .btn-buscar {
            background-color: #64483c; /* Color café */
            color: #fff; /* Color de texto blanco */
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

        .img-wrapper {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden; /* Ensure images don't overflow */
        }

        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .img-wrapper:hover img {
            transform: scale(1.1); /* Enlarge image on hover */
        }

        .overlay {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            width: 100%;
            text-align: center;
            padding: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
            font-weight: bold;
        }

        .img-negritas {
            font-weight: bold;
        }

        .img-wrapper:hover .overlay {
            opacity: 1;
        }

        .img-container {
            padding: 10px; /* Space around each image */
        }

        .overlay-title {
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .overlay-description {
            font-size: 1em;
        }

        /* Styles for the search bar */
        .search-container {
            margin-bottom: 20px;
            position: relative;
        }

        #searchInput {
            background-color: #f5e9dc; /* Light coffee color */
            border: 1px solid #b08b6f; /* Darker coffee color for the border */
            border-radius: 5px;
            padding: 10px;
            padding-right: 40px; /* Space for the icon */
            font-size: 16px;
            color: #64483c; /* Coffee color for text */
            transition: box-shadow 0.3s ease;
            width: 100%;
        }

        #searchInput:focus {
            box-shadow: 0 0 10px rgba(100, 72, 60, 0.5); /* Box shadow on focus */
            outline: none; /* Remove default outline */
        }

        .search-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #64483c; /* Coffee color for the icon */
            font-size: 20px;
        }
           /* Estilos adicionales para el buscador */
           .form-control {
            border-radius: 25px; /* Hacer los bordes redondeados */
            padding-right: 40px; /* Espacio para el icono de búsqueda */
        }
        .input-group-append {
            position: absolute; /* Posicionar el icono de búsqueda */
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 1; /* Asegurarse de que esté encima del campo de entrada */
            padding: 8px; /* Espacio entre el icono y el borde del campo de entrada */
        }

    </style>
</head>
<body>
        <!-- Navbar  -->
     <header>
        <nav class="navbar navbar-expand-lg navbar-expand-md 
          fixed-top  shadow-0 navbar-light " style="background-color: #dbc5ae;">
            <div class="container-fluid">   
            <a class="navbar-brand fw-bold" href="principal.php" id="titulo">
                <img src="img/logo1.png" width="55px" > Gourmet</a>
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
      
          
        <div class="container mt-5 md-5">
            <div class="d-flex">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar...">
                <button class="btn btn-buscar ml-1">
                    <i class="fas fa-search"></i> <!-- Ícono de búsqueda -->
                </button>
            </div>
        </div>
    
        <!-- Galería de imágenes -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 img-container">
                    <div class="img-wrapper">
                        <img src="imagenesGaleria/gale14 - copia.jpg" alt="Galeria imagen" class="img-fluid img-hover">
                        <div class="overlay">FRAPPE DE CARAMELO:
                            “Sumérgete en la frescura: un café helado que desborda sabor y energía en cada sorbo.”</div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                    <div class="img-wrapper">
                        <img src="imagenesGaleria/gala.jpg" alt="Galeria imagen" class="img-fluid img-hover">
                        <div class="overlay">FRAPPE DE VAINILLA:
                            “Sumérgete en la dulzura: un deleite helado que combina la suavidad del café con la indulgencia del caramelo.”</div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                    <div class="img-wrapper">
                        <img src="imagenesGaleria/gale8.jpg" alt="Galeria imagen" class="img-fluid img-hover">
                        <div class="overlay img-negritas"></div>
                        <div class="overlay">CAFE HELADO:
                            “Refresca tus sentidos con cada sorbo: el café helado que despierta tus papilas y te hace sonreír.”</div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                    <div class="img-wrapper">
                        <img src="imagenesGaleria/gale13.jpg" alt="Galeria imagen" class="img-fluid img-hover">
                        <div class="overlay img-negritas">O</div>
                        <div class="overlay">FRAPPE DE OREO:
                            “Sumérgete en la indulgencia de nuestra irresistible mezcla de batido Oreo. Galletas crujientes, crema suave y un toque de chocolate en cada sorbo.”</div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                    <div class="img-wrapper">
                        <img src="imagenesGaleria/gale12.jpg" alt="Galeria imagen" class="img-fluid img-hover">
                        <div class="overlay">FRAPPE DE FRESA
                            “Sumérgete en la frescura de nuestro frappé de fresa, con capas de hielo batido y crema, remolinos de jarabe de fresa y trozos de fresas frescas. ¡Una delicia refrescante!”</div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                    <div class="img-wrapper">
                        <img src="imagenesGaleria/gale11.jpg" alt="Galeria imagen" class="img-fluid img-hover">
                        <div class="overlay">FRAPPE DE TRADICIONAL: “Refresca tus días con la esencia de la tradicional: ¡Café helado que despierta los sentidos!”</div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                    <div class="img-wrapper">
                        <img src="imagenesGaleria/gale4 - copia.jpg" alt="Galeria imagen" class="img-fluid img-hover">
                        <div class="overlay">FRAPPE DE CHOCOLATE BLANCO
                            “Sumérgete en la dulzura celestial del frappé de chocolate blanco: un remolino de sabor suave y cremoso que te transportará a un paraíso de indulgencia.”</div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                    <div class="img-wrapper">
                        <img src="imagenesGaleria/gale2.jpg" alt="Galeria imagen" class="img-fluid img-hover">
                        <div class="overlay">FRAPPE DE CHOCOLATE:
                            “Sumérgete en la dulzura celestial del frappé de chocolate: un remolino de sabor suave y cremoso que te transportará a un paraíso de indulgencia.” 🍫❄️</div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                    <div class="img-wrapper">
                        <img src="imagenesGaleria/gale3.jpg" alt="Galeria imagen" class="img-fluid img-hover">
                        <div class="overlay">FRAPPES
                            “Saborea la amistad con cada sorbo de nuestros frappes.”</div>
                    </div>
                </div>
            </div>
        </div>
       
    
        <!-- Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Script para la funcionalidad de búsqueda -->
        <!-- Script para la funcionalidad de búsqueda -->
<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        let searchTerm = this.value.trim().toLowerCase();
        let imgContainers = document.querySelectorAll('.img-container');
        let visibleImages = 0;

        imgContainers.forEach(function(container) {
            let imgOverlayText = container.querySelector('.overlay').textContent.toLowerCase();

            if (imgOverlayText.includes(searchTerm)) {
                container.style.display = 'block';
                visibleImages++;
            } else {
                container.style.display = 'none';
            }
        });

        if (visibleImages === 1) {
            imgContainers.forEach(function(container) {
                if (container.style.display === 'block') {
                    container.classList.add('center-image');
                } else {
                    container.classList.remove('center-image');
                }
            });
        } else {
            imgContainers.forEach(function(container) {
                container.classList.remove('center-image');
            });
        }
    });
</script>


        <!-- FOOTER  -->
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
