<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Municipios</title>
</head>
<body>
<h2>Lista de Municipios</h2>
<!-- Botón para regresar al menú principal -->
<div>
    <a href="<?= base_url(); ?>" class="btn btn-primary">Regresar al Menú Principal</a>
</div><br><br>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($municipios as $municipio): ?>
        <tr>
            <td><?= $municipio['nombre_municipio']; ?></td>
            <td><?= $municipio['cod_depto']; ?></td> <!-- Puedes agregar un nombre de departamento si lo deseas -->
            <td>
                <a href="<?= base_url('municipios/editar/' . $municipio['cod_muni']); ?>">Editar</a>
                <a href="<?= base_url('municipios/eliminar/' . $municipio['cod_muni']); ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este municipio?');">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="<?= base_url('municipios/crear'); ?>">Agregar Municipio</a>

</body>
</html>
