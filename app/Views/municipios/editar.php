<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciudadanos</title>
</head>
<body>
<h2>Editar Municipio</h2>
<!-- Botón para regresar al menú principal -->
<div>
    <a href="<?= base_url(); ?>" class="btn btn-primary">Regresar al Menú Principal</a>
</div><br><br>

<form action="<?= base_url('municipios/actualizar/' . $municipio['cod_muni']); ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?= $municipio['nombre_municipio']; ?>" required>
    
    <label for="departamento_id">Departamento:</label>
    <input type="text" name="departamento_id" id="departamento_id" value="<?= $municipio['cod_depto']; ?>" required>
    
    <button type="submit">Actualizar</button>
</form>

<a href="<?= base_url('municipios'); ?>">Regresar</a>

</body>
</html>
