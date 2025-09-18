<form action="index.php?action=crear" method="POST">
    <label>Apellidos:</label>
    <input type="text" name="apellidos" required>

    <label>Nombres:</label>
    <input type="text" name="nombres" required>

    <label for="deporte">Materia:</label>
      <select id="deporte" name="deporte">
        <option value="" disabled selected>--- Elija un curso ---</option>
        <option value="0">PHP</option>
        <option value="1">C++</option>
        <option value="2">Linux</option>
        <option value="3">HTML</option>
        <option value="4">SQL</option>
      </select>

    <label>Nota:</label>
    <input type="number" step="0.01" name="nota" required>

    <label>Comentario:</label>
    <textarea name="comentario" required></textarea>

    <button type="submit">Guardar</button>
</form>
