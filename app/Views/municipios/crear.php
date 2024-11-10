<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciudadanos</title>
</head>
<body>
<h2>Agregar Municipio</h2>

<form action="<?= base_url('municipios/guardar'); ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    
    <label for="departamento_id">Departamento:</label>
    <input type="text" name="departamento_id" id="departamento_id" required>
    
    <button type="submit">Guardar</button>
</form>

<a href="<?= base_url('municipios'); ?>">Regresar</a>

</body>
</html>
