<?php
require_once "conection.php";

// Verificar la conexión
if ($conn->connect_error) {
  die($errorConect);
}

// Procesar los datos enviados desde el formulario
$campo1 = $_POST['words_english'];
$campo2 = $_POST['words_spanish'];

// Insertar los datos en la tabla correspondiente
$sql = "INSERT INTO words (words_english, words_spanish) VALUES ('$campo1', '$campo2')";

if ($conn->query($sql) === TRUE) {
  header('Location: script.js');
 } else {
   echo "Error al insertar los datos: " . $conn->error;
 }

// Cerrar la conexión
$conn->close();
?>