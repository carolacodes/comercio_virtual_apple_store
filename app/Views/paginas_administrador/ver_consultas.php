
<div class="container mt-4">
    <h2 class="text-center fs-1 mt-5 mb-5 fw-bold"><?= $titulo; ?></h2>
    <?php if (!empty($mensajes) && is_array($mensajes)): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Asunto</th>
                    <th>Mensaje</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mensajes as $mensajes): ?>
                    <tr>
                        <td><?= esc($mensajes['id_contacto']); ?></td>
                        <td><?= esc($mensajes['nombre_contacto']); ?></td>
                        <td><?= esc($mensajes['email_contacto']); ?></td>
                        <td><?= esc($mensajes['asunto_contacto']); ?></td>
                        <td><?= esc($mensajes['mensaje_contacto']); ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay consultas para mostrar.</p>
    <?php endif; ?>
</div>
