<?php
class Conexion {
    private $host = "localhost";
    private $db_name = "db_calificaciones";
    private $username = "root";  // por defecto en XAMPP
    private $password = "";      // vacío por defecto en XAMPP
    public $conn;

    public function getConexion() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
