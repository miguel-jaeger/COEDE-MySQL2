<?php
class Conexion {
    public static function conectar() {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "db_calificaciones";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>
