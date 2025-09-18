<?php
require_once './MODELO/Conexion.php';

class Modelo {
    public static function registrar($datos) {
        $conexion = (new Conexion())->getConexion();  // 🔹 antes decía conectar()
        $sql = "INSERT INTO calificaciones (apellidos, nombres, materia, nota, comentario) VALUES (:apellidos, :nombres, :materia, :nota, :comentario)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':apellidos', $datos['apellidos']);
        $stmt->bindParam(':nombres', $datos['nombres']);
        $stmt->bindParam(':materia', $datos['materia']);
        $stmt->bindParam(':nota', $datos['nota']);
        $stmt->bindParam(':comentario', $datos['comentario']);
        return $stmt->execute();
    }

    public static function listar() {
        $conexion = (new Conexion())->getConexion();
        $sql = "SELECT * FROM calificaciones";
        $stmt = $conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function eliminar($id) {
        $conexion = (new Conexion())->getConexion();
        $sql = "DELETE FROM calificaciones WHERE id = :id";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function editar($id, $datos) {
        $conexion = (new Conexion())->getConexion();
        $sql = "UPDATE calificaciones SET apellidos = :apellidos, nombres = :nombres, materia = :materia, nota = :nota, comentario = :comentario WHERE id = :id";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':apellidos', $datos['apellidos']);
        $stmt->bindParam(':nombres', $datos['nombres']);
        $stmt->bindParam(':materia', $datos['materia']);
        $stmt->bindParam(':nota', $datos['nota']);
        $stmt->bindParam(':comentario', $datos['comentario']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
