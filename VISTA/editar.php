<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Registro de Notas</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="top-logos">
    <img src="FONDOS/ejercito.png" alt="Logo izquierdo" class="logo-left">
    <img src="FONDOS/com.png" alt="Logo derecho" class="logo-right">
    </div>
<div class="container">
    <h1>Editar Registro de Notas</h1>
    <?php if (!empty($estudiante)): ?>
    <form action="index.php?action=actualizar" method="POST">
        <input type="hidden" name="id" value="<?= $estudiante['id'] ?>">

        <label>Apellidos:</label><br>
        <input type="text" name="apellidos" value="<?=$estudiante['apellidos'] ?>" required>

        <br><label>Nombres:</label><br>
        <input type="text" name="nombres" value="<?= $estudiante['nombres'] ?>" required>

        <br><label>Materia:</label><br>
        <select id="materia" name="materia" required>
            <option value="" disabled selected>--- Elija un curso ---</option>
            <option value="fundamentos_de_ciber">FUNDAMENTOS DE CIBERDEFENSA</option>
            <option value="windows">SISTEMA OP WINDOWS</option>
            <option value="shell">LENGUAJE BASICO DE SHELL</option>
            <option value="PHP">PHP</option>
            <option value="C++">C++</option>
            <option value="Linux">Linux</option>
            <option value="HTML">HTML</option>
            <option value="SQL">SQL</option>
        </select>
        <br><label>Nota:</label><br>
        <input type="number" step="0.01" name="nota" value="<?= htmlspecialchars($estudiante['nota']) ?>" required>

        <br><label>Comentario:</label><br>
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
