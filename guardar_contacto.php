<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Puede variar si has configurado un nombre de usuario personalizado
$password = ""; // Por defecto, en XAMPP la contraseña suele estar vacía
$database = "card";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Mensaje = $_POST['Mensaje'];

// Consulta SQL para insertar datos
$sql = "INSERT INTO formulario (Nombre, Email, Mensaje) VALUES ('$Nombre', '$Email', '$Mensaje')";

// Ejecutar consulta
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
