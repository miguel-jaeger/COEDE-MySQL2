<!DOCTYPE html>
<html>
<head>
    <title>CALIFICACIONES - GRUPO 2</title>
    <link rel="stylesheet" href="style1.css"/>
</head>
<body>
    <h1>REGISTRO INDIVIDUAL DE NOTAS (RIN) </h1>
    <form action="index.php" method="POST">
        <label for="nombre">Curso:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="apellido">Nota:</label><br>
        <input type="text" id="apellido" name="apellido" required><br>
        <label for="correo">Correo:</label><br>
        <input type="email" id="correo" name="correo" required><br><br>
        <label for="sugerencia">Sugerencia:</label><br>
        <textarea id="sugerencia" name="sugerencia" type="text" required>
        </textarea>
        <input type="hidden" name="action" value="crear">
        <button type="submit">Guardar</button>
    </form>
    <hr>
    <a href="index.php?action=listar">Ver lista de Notas</a>
</body>
</html>

