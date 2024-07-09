<?php

require_once 'Database.php';
require_once 'Empleado.php';

// Clase EmpleadoDAO
class EmpleadoDAO {
    private $db;

    // Constructor
    public function __construct($db) {
        $this->db = $db;
    }

    // Método para obtener todos los empleados
    public function obtenerTodos() {
        $query = "SELECT * FROM empleados";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $empleados = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $empleado = new Empleado($row['id'], $row['nombre'], $row['puesto']);
            $empleados[] = $empleado;
        }
        return $empleados;
    }

    // Método para obtener un empleado por su ID
    public function obtenerPorId($id) {
        $query = "SELECT * FROM empleados WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }

        return new Empleado($row['id'], $row['nombre'], $row['puesto']);
    }
}
?>
