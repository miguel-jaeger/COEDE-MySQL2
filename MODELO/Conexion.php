<?php
class Conexion {
    public static function conectar() {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "db_calificaciones";

<<<<<<< HEAD
class Database {
    private $host = "localhost";
    //Datos a cambiar
    private $db_name = "db_ingenieria";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo "Error de conexión: " . $exception->getMessage();
=======
        try {
            $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
>>>>>>> 79c37edd312b6e0beae3c04f114a96be6baa2306
        }
    }
}
?>
