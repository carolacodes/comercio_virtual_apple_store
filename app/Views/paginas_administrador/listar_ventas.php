<div class="container mt-4">
                <?php if(session('mensaje')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session('mensaje') ?>
                    </div>
                <?php endif; ?>
    <h2 class="text-center fs-1 mt-5 mb-5 fw-bold"><?= $titulo; ?></h2>
    <?php if (!empty($ventas) && is_array($ventas)): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Fecha Venta</th>
                    <th class="text-center ">Detalle Venta</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $venta): ?>
                    <tr>
                        <td><?= esc($venta['id_venta']); ?></td>
                        <td>
                            <p class="text-capitalize"><?= esc($venta['nombre_usuario']); ?></p>
                        </td>
                        <td><?= esc($venta['fecha_venta']); ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary fw-semibold icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="<?php echo base_url('listar_detalle_venta/'.$venta['id_venta']);?>">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check mb-2 mt-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                                </svg>
                                Detalle Venta  
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay ventas para mostrar.</p>
    <?php endif; ?>
</div>
