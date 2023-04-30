<?php
// Establecer la conexión a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "db-words";

// Conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// mensaje de error al verificar la conexión
$errorConect = "Conexión fallida: " . $conn->connect_error;
?>