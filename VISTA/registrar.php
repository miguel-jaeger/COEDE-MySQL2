<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrar Calificación</title>
    <link rel="stylesheet" href="C:\xampp\htdocs\php\COEDE-MySQL2\style1.css"/>
</head>
<body>
<div class="container">
    <h1>Registrar Calificación</h1> 
    <form action="index.php?action=crear" method="POST">
        <label>Apellidos:</label>
        <input type="text" name="apellidos" required>

        <label>Nombres:</label>
        <input type="text" name="nombres" required>

        <label>Materia:</label>
        <input type="text" name="materia" required>

        <label>Nota:</label>
        <input type="number" min="0" max="20" step="0.01" name="nota" required>

        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" required></textarea>

        <button type="submit">Guardar</button>
    </form>
    <p style="text-align:center; margin-top:15px;">
        <a href="index.php?action=listar">Ver lista</a>
    </p>
</div>
</body>
</html>
