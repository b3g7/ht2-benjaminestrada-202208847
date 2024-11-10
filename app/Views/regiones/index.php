<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Regiones</title>
</head>
<body>
<h2>Lista de Regiones</h2>
<!-- Botón para regresar al menú principal -->
<div>
    <a href="<?= base_url(); ?>" class="btn btn-primary">Regresar al Menú Principal</a>
</div><br><br>

<a href="/regiones/crear">Crear Nueva Región</a><br>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($regiones as $region): ?>
        <tr>
            <td><?= esc($region['nombre']); ?></td>
            <td><?= esc($region['descripcion']); ?></td>
            <td>
                <a href="/regiones/editar/<?= $region['cod_region']; ?>">Editar</a> |
                <a href="/regiones/eliminar/<?= $region['cod_region']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
