<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Calificaciones</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>REGISTRO INDIVIDUAL DE NOTAS</h1>

    <table border="1" width="100%" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Apellidos</th>
            <th>Nombres</th>
            <th>Materia</th>
            <th>Nota</th>
            <th>Comentario</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($datos as $fila): ?>
        <tr>
            <td><?= $fila['id'] ?></td>
            <td><?= $fila['apellidos'] ?></td>
            <td><?= $fila['nombres'] ?></td>
            <td><?= $fila['materia'] ?></td>
            <td><?= $fila['nota'] ?></td>
            <td><?= $fila['comentario'] ?></td>
            <td>
                <a href="index.php?action=editar&id=<?= $fila['id'] ?>">Editar</a> |
                <a href="index.php?action=eliminar&id=<?= $fila['id'] ?>" onclick="return confirm('¿Eliminar registro?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- 🔹 Enlace para volver -->
    <p style="text-align:center; margin-top:20px;">
        <a href="index.php?action=registrar">⬅ Regresar a Registro de Notas</a>
    </p>
</div>
</body>
</html>