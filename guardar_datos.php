<?php
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$carrera = isset($_POST["carrera"]) ? $_POST["carrera"] : "";
$tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "inactivo"; // Por defecto, "inactivo"
$conexion = new mysqli("localhost", "root", "", "base1_desweb");
// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$stmt = $conexion->prepare("INSERT INTO p1_usuarios (nombre, carrera, tipo) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $carrera, $tipo);
if ($stmt->execute()) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar datos";
}
$stmt->close();
$conexion->close();
?>

