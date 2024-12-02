<div class="container mt-4">
                <?php if(session('mensaje')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session('mensaje') ?>
                    </div>
                <?php endif; ?>
    <h2 class="text-center fs-1 mt-5 mb-5 fw-bold"><?= $titulo; ?></h2>
    <?php if (!empty($ventas) && is_array($ventas)): ?>
        <h4 class="text-capitalize mt-5 mb-3 fw-bold">Cliente: <?= esc($ventas['nombre_usuario']); ?> <?= esc($ventas['apellido_usuario']); ?></h4>
        <h4 class="mb-5 fw-bold">
        Correo: <?= esc($ventas['email_usuario']);?>
        </h4>
        <?php $total = 0;?>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($detalle as $detalle): 
                    $subtotal = $detalle['detalle_cantidad'] * $detalle['detalle_precio'];
                    $total = $total + $subtotal;
                ?>
                    <tr>
                        <td><?= esc($detalle['id_venta']); ?></td>
                        <td>
                            <p class="text-capitalize"><?= esc($detalle['nombre_producto']); ?></p>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo base_url('/assets/uploads/' . $detalle['img_producto']);?>" alt="" height="100" width="100">
                            </div>
                        </td>
                        <td>
                            <p><?= esc($detalle['descripcion_producto']); ?></p>
                        </td>
                        <td><?= esc($detalle['detalle_cantidad']); ?></td>
                        <td><?= esc($detalle['detalle_precio']); ?></td>
                        <td><?= esc($subtotal); ?></td>
                    </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
        <h4>Total $ <?= esc($total) ;?></h4>
    <?php else: ?>
        <p>No hay detalle para mostrar.</p>
    <?php endif; ?>
</div>