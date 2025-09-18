<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Registro de Notas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Editar Registro de Notas</h1>
    <?php if (!empty($estudiante)): ?>
    <form action="index.php?action=actualizar" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($estudiante['id']) ?>">

        <label>Apellidos:</label>
        <input type="text" name="apellidos" value="<?= htmlspecialchars($estudiante['apellidos']) ?>" required>

        <label>Nombres:</label>
        <input type="text" name="nombres" value="<?= htmlspecialchars($estudiante['nombres']) ?>" required>

        <label>Materia:</label>
        <input type="text" name="materia" value="<?= htmlspecialchars($estudiante['materia']) ?>" required>

        <label>Nota:</label>
        <input type="number" step="0.01" name="nota" value="<?= htmlspecialchars($estudiante['nota']) ?>" required>

        <label>Comentario:</label>
        <textarea name="comentario" required><?= htmlspecialchars($estudiante['comentario']) ?></textarea>

        <button type="submit">Actualizar</button>
    </form>
    <p style="text-align:center; margin-top:15px;">
        <a href="index.php?action=listar">⬅ Volver a la lista</a>
    </p>
    <?php else: ?>
        <p>⚠️ No se encontró el registro solicitado.</p>
    <?php endif; ?>
</div>
</body>
</html>
