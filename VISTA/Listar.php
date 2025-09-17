<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Calificaciones</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background: #007bff;
            color: white;
        }
        a {
            color: #007bff;
            text-decoration: none;
            margin: 0 5px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<<<<<<< HEAD
    <h1>Lista de Registro Individual de Notas (RIN)</h1>
    <table border="1">
    <link rel="stylesheet" href="/php/COEDE-MySQL2/VISTA/style1.css"/>
        <thead>
            <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Nota</th>
                <th>Correo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $estudiantes->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id_estudiante']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><a href="index.php?action=eliminar&id=<?php echo $row['id_estudiante']; ?>">Eliminar</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
=======
<div class="container">
    <h1>Lista de Calificaciones</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Materia</th>
            <th>Nota</th>
            <th>Comentario</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($datos as $fila): ?>
        <tr>
            <td><?= $fila["id"] ?></td>
            <td><?= $fila["materia"] ?></td>
            <td><?= $fila["nota"] ?></td>
            <td><?= $fila["comentario"] ?></td>
            <td>
                <a href="index.php?action=editar&id=<?= $fila["id"] ?>">✏️ Editar</a> |
                <a href="index.php?action=eliminar&id=<?= $fila["id"] ?>" onclick="return confirm('¿Eliminar registro?')">🗑️ Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
>>>>>>> 79c37edd312b6e0beae3c04f114a96be6baa2306
    </table>
    <p style="text-align:center; margin-top:15px;">
        <a href="index.php?action=registrar">Registrar nuevo</a>
    </p>
</div>
</body>
</html>
