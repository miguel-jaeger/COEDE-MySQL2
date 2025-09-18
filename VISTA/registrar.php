<form action="index.php?action=crear" method="POST">
    <label>Apellidos:</label>
    <input type="text" name="apellidos" required>

    <label>Nombres:</label>
    <input type="text" name="nombres" required>

    <label>Materia:</label>
    <input type="text" name="materia" required>

    <label>Nota:</label>
    <input type="number" step="0.01" name="nota" required>

    <label>Comentario:</label>
    <textarea name="comentario" required></textarea>

    <button type="submit">Guardar</button>
</form>
