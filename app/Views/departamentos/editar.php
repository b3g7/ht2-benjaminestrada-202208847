<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciudadanos</title>
</head>
<body>
    <h1>Editar Departamento</h1>
    <!-- Botón para regresar al menú principal -->
<div>
    <a href="<?= base_url(); ?>" class="btn btn-primary">Regresar al Menú Principal</a>
</div><br><br>
<form action="<?= base_url('departamentos/actualizar') ?>" method="post">
    <input type="hidden" name="cod_depto" value="<?= $departamento['cod_depto'] ?>">

    <label for="nombre_depto">Nombre del Departamento:</label>
    <input type="text" name="nombre_depto" value="<?= $departamento['nombre_depto'] ?>" required><br>

    <label for="cod_region">Código de Región:</label>
    <input type="number" name="cod_region" value="<?= $departamento['cod_region'] ?>" required><br>

    <button type="submit">Actualizar</button>
</form>
</body>
</html>
