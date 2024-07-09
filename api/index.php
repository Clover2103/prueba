<?php
// Convierte las respuestas en JSON
header('Content-Type: application/json');

// Carga los modelos y controladores
require_once '../models/Database.php';
require_once '../models/Empleado.php';
require_once '../models/EmpleadoDAO.php';

// Crea una instancia de la clase EmpleadoDAO
$empleadoDAO = new EmpleadoDAO(Database::getInstance()->getConnection());

// Maneja las solicitudes HTTP
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id) {
        $empleado = $empleadoDAO->obtenerPorId($id);
        if ($empleado) {
            echo json_encode($empleado);
        } else {
            echo json_encode(['error' => 'Empleado no encontrado']);
        }
    } else {
        echo json_encode(['error' => 'ID no proporcionado']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $empleados = $empleadoDAO->obtenerTodos();
    echo json_encode($empleados);
} else {
    echo json_encode(['error' => 'Método no permitido']);
}
?>

