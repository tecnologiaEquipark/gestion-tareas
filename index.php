<?php
session_start();

// Verificar si ya está autenticado
if (isset($_SESSION['user_id'])) {
    // Si ya está autenticado, redirigir al panel según el rol
    if ($_SESSION['role'] == 'admin') {
        header('Location: views/admin/dashboard.php');
    } elseif ($_SESSION['role'] == 'coordinador') {
        header('Location: views/coordinador/dashboard.php');
    } elseif ($_SESSION['role'] == 'tecnico') {
        header('Location: views/tecnico/dashboard.php');
    }
    exit();
} else {
    // Si no está autenticado, redirigir al login
    header('Location: views/login.php');
    exit();
}
?>
