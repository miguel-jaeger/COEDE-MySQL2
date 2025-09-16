<?php
require_once 'Conexion.php';

class Estudiante {
    private $conn;
    private $table_name = "estudiantes";

    // Campos de la tabla estudiantes
    public $id_estudiante;
    public $nombre;
    public $apellido;
    public $correo;

    public function __construct($db){
        $this->conn = $db;
    }

    // Método para crear un nuevo estudiante
    public function crear() {
        $query = "INSERT INTO " . $this->table_name . " 
                  (nombre, apellido, correo) 
                  VALUES (:nombre, :apellido, :correo)";
        $stmt = $this->conn->prepare($query);

        $this->nombre   = htmlspecialchars(strip_tags($this->nombre));
        $this->apellido = htmlspecialchars(strip_tags($this->apellido));
        $this->correo   = htmlspecialchars(strip_tags($this->correo));

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":apellido", $this->apellido);
        $stmt->bindParam(":correo", $this->correo);

        try {
            if($stmt->execute()){
                return "Registro exitoso";
            } else {
                return "Error al registrar el estudiante.";
            }
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                // Restricción violada (ej: UNIQUE en correo)
                header("Location: index.php?status=error");
               // return "Error: el correo ya está registrado.";
            } else {
                return "Error en la base de datos: " . $e->getMessage();
            }
        }
    }

    // Método para leer todos los estudiantes
    public function leer() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id_estudiante DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Eliminar estudiante
    public function eliminar($id_estudiante) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_estudiante = :id_estudiante";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id_estudiante", $id_estudiante, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return "Estudiante eliminado correctamente.";
        } else {
            return "Error al eliminar estudiante.";
        }
    }
}
?>
