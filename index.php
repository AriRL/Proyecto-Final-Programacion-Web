<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    
    <a href="#" class="btn-flotante" id="btnCarrito"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
</svg><span class="badge bg-warning" id="carrito"> 0</span></a>
    <!-- Navbarn-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-expand-md 
          fixed-top  shadow-0 navbar-light" style="background-color: #dbc5ae;">
            <div class="container">   
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

      <main> 
        <section id="carousel-section" class="md-3 mt-4 "> 
    <div class="container "><br><BR>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand " href="" > </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center fw-bold" id="navbarNav">
                    <ul class="navbar-nav">
                        <a href="#" class="nav-link text-info" category="all">Todo</a>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Header-->
    <header class=" py-2 titulo">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">Frappes</h1>
                <p class="lead fw-normal text-gray-50 mb-0">El mejor postre frío para cualquier temporada del año<br>
            Compra los tuyos</p>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5 text-black">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <!-- -->
                                <div class="badge  text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo ($data['precio']) ? 'Gourmet' : ''; ?></div>
                                <!--imagenes-->
                                <img class="card-img-top img-fluid zoom" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!--detakless-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- nombre de los productos-->
                                        <h5 class="fw-bolder "><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>
                                        <!-- Productos-->
                                        <div class="d-flex justify-content-center small  text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Pprecio de los productos-->
                                        <strong> <?php echo "$". $data['precio']?> </strong>
                                    </div>
                                </div>
                                <!-- -->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn fw-bold btn-color mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer titulo">
        <div class="align-items-center col text-center">
            <div class="footer-icons p-3">
                <h3><strong>FRAPPES GOURMET</strong></h3>
                <p>¡Síguenos en nuestras redes sociales!</p>
                <!-- Iconos de redes sociales -->
                <a class="text-secondary fa-lg" href="https://www.facebook.com/profile.php?id=100077067521462&mibextid=LQQJ4d"><i class="fab fa-facebook"></i></a>
                <a class="text-secondary fa-lg" href="https://www.instagram.com/la_frapperia_oficial?igsh=bWMzenk1dGxpdGgy"><i class="fab fa-instagram"></i></a>
                <a class="text-secondary fa-lg" href="https://wa.me/4661079356?text=¡Hola,%20me%20interesa%20ordenar!"><i class="fab fa-whatsapp"></i></a>
            </div>
            <!-- Copyright -->
            <div class="text-center p-3">
                © 2021 Grupo Bimbo S.A.B. de C.V. Todos los Derechos
            </div>
        </div>
    </footer>
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>