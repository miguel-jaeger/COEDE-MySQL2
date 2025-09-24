<?php
class Conexion {
    private $host = "localhost";
    private $db_name = "db_calificaciones"; // 👈 debe coincidir con lo que creaste
    private $username = "root";  // XAMPP usa root por defecto
    private $password = "root";      // vacío por defecto en XAMPP
    public $conn;

    public function getConexion() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                                  $this->username, 
                                  $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
