<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nueva Región</title>
</head>
<body>
<h2>Crear Nueva Región</h2>
<!-- Botón para regresar al menú principal -->
<div>
    <a href="<?= base_url(); ?>" class="btn btn-primary">Regresar al Menú Principal</a>
</div><br><br>
<form action="/regiones/actualizar/<?= $region['cod_region']; ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?= esc($region['nombre']); ?>" required><br>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"><?= esc($region['descripcion']); ?></textarea><br>

    <button type="submit">Actualizar</button>
</form>
</body>
</html>
