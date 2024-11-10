<h2>Lista de Ciudadanos</h2>
<a href="<?= base_url('/ciudadanos/create') ?>">Agregar Ciudadano</a>
<?php if (session()->getFlashdata('status')): ?>
    <p><?= session()->getFlashdata('status') ?></p>
<?php endif; ?>
<table>
    <tr>
        <th>DPI</th><th>Nombre</th><th>Tel. Movil</th><th>Email</th><th>Acciones</th>
    </tr>
    <?php foreach ($ciudadanos as $ciudadano): ?>
        <tr>
            <td><?= $ciudadano['dpi'] ?></td>
            <td><?= $ciudadano['nombre'] . ' ' . $ciudadano['apellido'] ?></td>
            <td><?= $ciudadano['tel_movil'] ?></td>
            <td><?= $ciudadano['email'] ?></td>
            <td>
                <a href="<?= base_url('/ciudadanos/edit/' . $ciudadano['dpi']) ?>">Editar</a>
                <a href="<?= base_url('/ciudadanos/delete/' . $ciudadano['dpi']) ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
