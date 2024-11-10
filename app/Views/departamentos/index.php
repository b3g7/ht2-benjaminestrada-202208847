<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Departamentos</title>
    <!-- Enlace a tu CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('css/estilos.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Lista de Departamentos</h1>
        
        <!-- Botón para regresar al menú principal -->
        <div>
            <a href="<?= base_url(); ?>" class="btn">Regresar al Menú Principal</a>
        </div>
        <br><br>

        <table>
            <thead>
                <tr>
                    <th>Nombre del Departamento</th>
                    <th>Región</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departamentos as $departamento): ?>
                    <tr>
                        <td><?= esc($departamento['nombre_depto']) ?></td>
                        <td><?= esc($departamento['cod_region']) ?></td>
                        <td>
                            <a href="<?= base_url('departamentos/editar/' . $departamento['cod_depto']) ?>">Editar</a>
                            <a href="<?= base_url('departamentos/eliminar/' . $departamento['cod_depto']) ?>" onclick="return confirm('¿Estás seguro de eliminar este departamento?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <a href="<?= base_url('departamentos/crear') ?>" class="btn">Crear Nuevo Departamento</a>
    </div>
</body>
</html>
