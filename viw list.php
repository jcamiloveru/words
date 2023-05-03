<?php
require_once "conection.php";

// Verificar la conexión
if ($conn->connect_error) {
  die($errorConect);
}

// Selecciona los datos que deseas mostrar
$sql = "SELECT words_english, words_spanish FROM words";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de la tabla
    echo "<table><tr><th>english</th><th>spanish</th></tr>";
    // Muestra los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["words_english"]."</td><td>".$row["words_spanish"]."</td></tr>";
    }
    // Fin de la tabla
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexion
$conn->close();
?>