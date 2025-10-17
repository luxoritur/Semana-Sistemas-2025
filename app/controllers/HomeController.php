<?php

namespace app\controllers;

use conexion\Database;
use PDO;           
use PDOException; 

class HomeController{

    public function index(){ 
        return $this->view('HomeView',['title' => 'Vista inicial del Blog Semana de Sistemas 2025']); 
    } 

     public function dia1(){ 
        return $this->view('dia1',['title' => 'Seccion dia 1']); 
    } 

    public function dia2(){ 
        return $this->view('dia2',['title' => 'Seccion dia 2']); 
    } 

    public function dia4(){ 
        return $this->view('dia4',['title' => 'Seccion dia 2']); 
    }
    
     public function dia5(){ 
        return $this->view('dia5',['title' => 'Seccion dia 2']); 
    }

    // Guardar visita
    public function guardarVisita() {
        // Crear conexión usando la clase Database
        $database = new Database();
        $conn = $database->getConnection();

        // Verificar que la petición sea POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Obtener y limpiar los datos del formulario
            $nombre  = trim($_POST['nombre'] ?? '');
            $correo  = trim($_POST['email'] ?? '');
            $mensaje = trim($_POST['mensaje'] ?? '');

            // Validación básica
            if (empty($nombre)) {
                echo "El nombre es obligatorio.";
                return;
            }

            try {
                // Preparar y ejecutar el INSERT
                $sql = "INSERT INTO visitas (nombre, correo, mensaje)
                        VALUES (:nombre, :correo, :mensaje)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':correo', $correo);
                $stmt->bindParam(':mensaje', $mensaje);
                $stmt->execute();

                echo "Visita registrada correctamente.";
            } catch (PDOException $e) {
                echo "Error al guardar la visita: " . $e->getMessage();
            }
        } else {
            echo "Método no permitido. Usa POST.";
        }
    }

    public function view($vista, $data=[]){ 
        //require_once("../app/views/HomeView.php"); 
        extract($data); 
        if(file_exists("../app/views/$vista.php")){ 
            ob_start(); 
            include "../app/views/$vista.php"; 
            $content = ob_get_clean(); 
            return $content; 
        } 
        else{ 
            echo "vista no encotrada ../app/views/$vista.php"; 
        }
        return "hola desde la pagina Home"; 
    } 

}

?>
