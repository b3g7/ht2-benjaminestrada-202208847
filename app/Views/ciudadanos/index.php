<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciudadanos</title>
    <!-- Enlace a tu CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('css/estilos.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Lista de Ciudadanos</h1>

        <!-- Botón para regresar al menú principal -->
        <div>
            <a href="<?= base_url(); ?>" class="btn">Regresar al Menú Principal</a>
        </div>
        <br><br>

        <table border="1">
            <tr>
                <th>DPI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono Casa</th>
                <th>Teléfono Móvil</th>
                <th>Email</th>
                <th>Fecha de Nacimiento</th>
                <th>Nivel Académico</th>
                <th>Municipio</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($ciudadanos as $ciudadano): ?>
                <tr>
                    <td><?= esc($ciudadano['dpi']); ?></td>
                    <td><?= esc($ciudadano['apellido']); ?></td>
                    <td><?= esc($ciudadano['nombre']); ?></td>
                    <td><?= esc($ciudadano['direccion']); ?></td>
                    <td><?= esc($ciudadano['tel_casa']); ?></td>
                    <td><?= esc($ciudadano['tel_movil']); ?></td>
                    <td><?= esc($ciudadano['email']); ?></td>
                    <td><?= esc($ciudadano['fechanac']); ?></td>
                    <td><?= esc($ciudadano['cod_nivel_acad']); ?></td>
                    <td><?= esc($ciudadano['cod_muni']); ?></td>
                    <td>
                        <a href="<?= base_url('ciudadanos/edit/' . $ciudadano['dpi']); ?>">Editar</a>
                        <a href="<?= base_url('ciudadanos/delete/' . $ciudadano['dpi']); ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
