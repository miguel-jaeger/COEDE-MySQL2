<table border="1">
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
