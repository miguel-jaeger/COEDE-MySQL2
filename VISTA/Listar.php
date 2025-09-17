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
    </table>
    <p style="text-align:center; margin-top:15px;">
        <a href="index.php?action=registrar">Registrar nuevo</a>
    </p>
</div>
</body>
</html>
