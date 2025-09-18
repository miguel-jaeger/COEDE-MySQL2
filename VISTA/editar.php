<form action="index.php?action=actualizar" method="POST">
    <input type="hidden" name="id" value="<?= $estudiante['id'] ?>">

    <label>Apellidos:</label>
    <input type="text" name="apellidos" value="<?= $estudiante['apellidos'] ?>" required>

    <label>Nombres:</label>
    <input type="text" name="nombres" value="<?= $estudiante['nombres'] ?>" required>

    <label>Materia:</label>
    <input type="text" name="materia" value="<?= $estudiante['materia'] ?>" required>

    <label>Nota:</label>
    <input type="number" step="0.01" name="nota" value="<?= $estudiante['nota'] ?>" required>

    <label>Comentario:</label>
    <textarea name="comentario" required><?= $estudiante['comentario'] ?></textarea>

    <button type="submit">Actualizar</button>
</form>
