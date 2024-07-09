<?php

    // Carga la clase PDO para la base de datos
    class Database {
        private static $instance = null;
        private $conn;
        private $host = 'localhost';
        private $dbname = 'trabajo';
        private $username = 'postgres'; 
        private $password = '123456';

        // Constructor de la clase
        private function __construct() {
            try {
                $this->conn = new PDO("pgsql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        // Método para obtener la instancia de la clase
        public static function getInstance() {
            if (!self::$instance) {
                self::$instance = new Database();
            }
            return self::$instance;
        }

        // Método para obtener la conexión
        public function getConnection() {
            return $this->conn;
        }
    }
?>
