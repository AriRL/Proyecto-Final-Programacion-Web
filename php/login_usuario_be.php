<?php


    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];


    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarioss WHERE correo='$correo' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        //aqui va la el nombre de la pagina a la cual se dirigira (ej. principal.php)
        header("location: ../principal.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existente, por favor verifique los datos introducidos");
                window.location = "../usuariosB.php";
            </script>
        ';
        exit;
    }

?>