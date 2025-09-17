<?php
require_once "Conexion.php";

class Modelo {

    // Insertar calificación
    public static function registrar($datos) {
        $sql = "INSERT INTO calificaciones (materia, nota, comentario) VALUES (:materia, :nota, :comentario)";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":materia", $datos["materia"], PDO::PARAM_STR);
        $stmt->bindParam(":nota", $datos["nota"]);
        $stmt->bindParam(":comentario", $datos["comentario"], PDO::PARAM_STR);
        return $stmt->execute();
    }

    // Listar
    public static function listar() {
        $sql = "SELECT * FROM calificaciones";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Eliminar
    public static function eliminar($id) {
        $sql = "DELETE FROM calificaciones WHERE id = :id";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Obtener uno (para editar)
    public static function obtener($id) {
        $sql = "SELECT * FROM calificaciones WHERE id = :id";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Editar
    public static function editar($datos) {
        $sql = "UPDATE calificaciones SET materia=:materia, nota=:nota, comentario=:comentario WHERE id=:id";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":materia", $datos["materia"], PDO::PARAM_STR);
        $stmt->bindParam(":nota", $datos["nota"]);
        $stmt->bindParam(":comentario", $datos["comentario"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>
