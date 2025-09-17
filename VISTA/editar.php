<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Calificación</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Editar Calificación</h1>
    <form action="index.php?action=editar" method="POST">
        <input type="hidden" name="id" value="<?= $dato['id'] ?>">

        <label>Materia:</label>
        <input type="text" name="materia" value="<?= $dato['materia'] ?>" required>

        <label>Nota:</label>
        <input type="number" step="0.01" name="nota" value="<?= $dato['nota'] ?>" required>

        <label>Comentario:</label>
        <input type="text" name="comentario" value="<?= $dato['comentario'] ?>" required>

        <button type="submit">Actualizar</button>
    </form>
    <p style="text-align:center; margin-top:15px;">
        <a href="index.php?action=listar">Volver</a>
    </p>
</div>
</body>
</html>
