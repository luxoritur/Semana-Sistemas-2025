<?php

namespace conexion;
use PDO;           
use PDOException;  

class Database { 
    private $host = "db"; 
    private $db_name = "semana"; 
    private $username = "root"; 
    private $password = "rootpass"; 
    public $conn;

    public function getConnection() { 
        $this->conn = null; 
        try { 
            // Conectarse solo al servidor (sin DB)
            $this->conn = new PDO("mysql:host=" . $this->host, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Crear la base de datos si no existe
            $this->conn->exec("CREATE DATABASE IF NOT EXISTS {$this->db_name} CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;");
            $this->conn->exec("USE {$this->db_name};");

            // Crear tabla `visitas` si no existe
            $this->crearTablaVisitas();

            echo "Conectado a la base de datos '{$this->db_name}' correctamente.<br>";
        } catch(PDOException $exception) { 
            echo "Error de conexión: " . $exception->getMessage(); 
        }
        return $this->conn; 
    }

    private function crearTablaVisitas() {
        $sql = "CREATE TABLE IF NOT EXISTS visitas (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            correo VARCHAR(100),
            mensaje TEXT,
            fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

        $this->conn->exec($sql);
    }
}
?>
