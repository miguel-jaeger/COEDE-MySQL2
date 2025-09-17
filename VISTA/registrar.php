<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrar Calificación</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Registrar Calificación</h1>
    <form action="index.php?action=crear" method="POST">
        <label>Materia:</label>
        <input type="text" name="materia" required>

        <label>Nota:</label>
        <input type="number" step="0.01" name="nota" required>

        <label>Comentario:</label>
        <input type="text" name="comentario" required>

        <button type="submit">Guardar</button>
    </form>
    <p style="text-align:center; margin-top:15px;">
        <a href="index.php?action=listar">Ver lista</a>
    </p>
</div>
</body>
</html>
