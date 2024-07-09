<?php

    // Clase Empleado
    class Empleado {
        public $id;
        public $nombre;
        public $puesto;

        // Constructor
        public function __construct($id, $nombre, $puesto) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->puesto = $puesto;
        }
    }
?>
