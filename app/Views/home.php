<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>
    <h1>Bienvenido al Sistema de Gestión de Ciudadanos</h1>

    <nav>
        <ul>
            <li><a href="<?= base_url('nivelesacademicos') ?>"><i class="fas fa-graduation-cap"></i> Niveles Académicos</a></li>
            <li><a href="<?= base_url('ciudadanos') ?>"><i class="fas fa-users"></i> Ciudadanos</a></li>
            <li><a href="<?= base_url('municipios') ?>"><i class="fas fa-city"></i> Municipios</a></li>
            <li><a href="<?= base_url('departamentos') ?>"><i class="fas fa-map"></i> Departamentos</a></li>
            <li><a href="<?= base_url('regiones') ?>"><i class="fas fa-globe"></i> Regiones</a></li>
        </ul>
    </nav>

    <footer>
        <p>&copy; 2024 Sistema de Gestión de Ciudadanos de Guatemala</p>
    </footer>
</body>
</html>
