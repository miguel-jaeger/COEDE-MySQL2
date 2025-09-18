<?php
require_once __DIR__ . '/Conexion.php';

class Modelo {
    private static function conexion() {
        $c = new Conexion();
        return $c->getConexion();
    }

    public static function registrar(array $datos): bool {
        $conn = self::conexion();
        if (!$conn) return false;

        $sql = "INSERT INTO calificaciones (apellidos, nombres, materia, nota, comentario) 
                VALUES (:apellidos, :nombres, :materia, :nota, :comentario)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':apellidos', trim($datos['apellidos']));
        $stmt->bindValue(':nombres', trim($datos['nombres']));
        $stmt->bindValue(':materia', trim($datos['materia']));
        $stmt->bindValue(':nota', (float)$datos['nota']);
        $stmt->bindValue(':comentario', trim($datos['comentario']));
        return $stmt->execute();
    }

    public static function listar(): array {
        $conn = self::conexion();
        if (!$conn) return [];
        $sql = "SELECT * FROM calificaciones ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function obtenerPorId(int $id): ?array {
        $conn = self::conexion();
        if (!$conn) return null;
        $sql = "SELECT * FROM calificaciones WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }


    public static function actualizar(array $datos): bool {
        $conn = self::conexion();
        if (!$conn) return false;

        $sql = "UPDATE calificaciones 
                   SET apellidos = :apellidos, 
                       nombres = :nombres, 
                       materia = :materia, 
                       nota = :nota, 
                       comentario = :comentario 
                 WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', (int)$datos['id'], PDO::PARAM_INT);
        $stmt->bindValue(':apellidos', trim($datos['apellidos']));
        $stmt->bindValue(':nombres', trim($datos['nombres']));
        $stmt->bindValue(':materia', trim($datos['materia']));
        $stmt->bindValue(':nota', (float)$datos['nota']);
        $stmt->bindValue(':comentario', trim($datos['comentario']));
        return $stmt->execute();
    }

    public static function eliminar(int $id): bool {
        $conn = self::conexion();
        if (!$conn) return false;
        $sql = "DELETE FROM calificaciones WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
