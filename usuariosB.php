
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <main>
        <!-- Navbar  -->
      <header>
        <nav class="navbar navbar-expand-lg navbar-expand-md 
          fixed-top  shadow-0 navbar-light" style="background-color: #dbc5ae;">
            <div class="container">   
            <a class="navbar-brand fw-bold" href="principal.php" id="titulo">
                <img src="img/logo1.png" width="55px"><strong> Gourmet </strong></a>
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
                    <i class="bi bi-person"><img src=https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/person-circle.svg width="32" height="32" alt=""> 
                    </i>
                    </a>
                  </li>
                </ul>
              </div>
            </div> 
          </nav>
</header>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <!-- formularios -->
            <div class="contenedor__login-register">
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <Button>Entrar</Button>
                </form>
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <Button>Registrarse</Button>
                </form>
            </div>
        </div>
    </main>
<br><br><br><br><br><br><br><br>
   
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

    <script src="assets/js/script1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>