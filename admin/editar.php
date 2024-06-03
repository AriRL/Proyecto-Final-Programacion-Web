<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "../config/conexion.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $foto = $_FILES['foto'];

    // Manejar la carga de la nueva foto
    $foto_nombre = $foto['name'];
    $foto_tmp = $foto['tmp_name'];
    $foto_destino = "../uploads/" . $foto_nombre;

    if (move_uploaded_file($foto_tmp, $foto_destino)) {
        // Actualizar los datos en la base de datos
        $query = "UPDATE productos SET 
                    nombre = '$nombre', 
                    descripcion = '$descripcion', 
                    cantidad = $cantidad, 
                    precio = $precio, 
                    categoria = '$categoria', 
                    foto = '$foto_destino' 
                  WHERE id = $id";

        $result = mysqli_query($conexion, $query);

        if ($result) {
            header('Location: productos.php');
        } else {
            echo "Error al actualizar el producto.";
        }
    } else {
        echo "Error al subir la foto.";
    }
}
?>
