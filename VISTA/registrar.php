<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Notas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Registro de Notas</h1>
    <form action="index.php?action=crear" method="POST">
        <label>Apellidos:</label>
        <input type="text" name="apellidos" required>

        <label>Nombres:</label>
        <input type="text" name="nombres" required>

        <label for="materia">Materia:</label>
        <select id="materia" name="materia" required>
            <option value="" disabled selected>--- Elija un curso ---</option>
            <option value="PHP">PHP</option>
            <option value="C++">C++</option>
            <option value="Linux">Linux</option>
            <option value="HTML">HTML</option>
            <option value="SQL">SQL</option>
        </select>

        <label>Nota:</label>
        <input type="number" step="0.01" name="nota" required>

        <label>Comentario:</label>
        <textarea name="comentario" required></textarea>

        <button type="submit">Guardar</button>
    </form>

    <!-- 🔹 Nuevo enlace -->
    <p style="text-align:center; margin-top:20px;">
        <a href="index.php?action=listar">📋 Ver lista de materias de estudiantes</a>
    </p>
</div>
</body>
</html>