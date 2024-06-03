<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarioss(nombre_completo, correo, usuario, contrasena)
              VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";


//verificar que no se repita en la bd
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarioss WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../usuariosB.php";
            </script>
        ';
        exit();    
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../usuariosB.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location = "../usuariosB.php";
            </script>
        ';
    }

    myqli_close($conexion);
?>