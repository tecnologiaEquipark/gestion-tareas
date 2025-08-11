<?php
session_start();
include('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha_limite = $_POST['fecha_limite'];
    $id_tecnico = $_POST['id_tecnico'];
    $comentarios = $_POST['comentarios'];

    // Preparamos la consulta para insertar la tarea
    $stmt = $conn->prepare("INSERT INTO tareas (titulo, descripcion, fecha_limite, id_tecnico, comentarios) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $titulo, $descripcion, $fecha_limite, $id_tecnico, $comentarios);

    if ($stmt->execute()) {
        echo "Tarea creada con éxito.";
    } else {
        echo "Error al crear la tarea: " . $conn->error;
    }
}
?>