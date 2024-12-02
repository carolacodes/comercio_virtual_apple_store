<div class="container mt-4">
                <?php if(session('mensaje')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session('mensaje') ?>
                    </div>
                <?php endif; ?>
    <h2 class="text-center fs-1 mt-5 mb-5 fw-bold"><?= $titulo; ?></h2>
    <?php if (!empty($productos) && is_array($productos)): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Producto</th>
                    <th>Descripcion Producto</th>
                    <th>Categoria Producto</th>
                    <th>Precio Producto</th>
                    <th>Cantidad Producto</th>
                    <th>Proveedor Producto</th>
                    <th>Imagen Producto</th>
                    
                    <th>Editar</th>
                    <th>Activar/Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $productos): ?>
                    <tr>
                        <td><?= esc($productos['id_producto']); ?></td>
                        <td><?= esc($productos['nombre_producto']); ?></td>
                        <td><?= esc($productos['descripcion_producto']); ?></td>
                        <td><?= esc($productos['nombre_categoria']); ?></td>
                        <td>$<?= esc($productos['precio_producto']); ?></td>
                        <td><?= esc($productos['cantidad_producto']); ?></td>
                        <td><?= esc($productos['nombre_proveedor']); ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo base_url('/assets/uploads/' . $productos['img_producto']);?>" alt="" height="100" width="100">
                            </div>
                        </td>
                        
                        <th>
                            <div class="mt-4 d-flex justify-content-center">
                                <a class="icon-link icon-link-hover btn btn-primary fw-semibold" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="<?php echo base_url('editar_producto/'.$productos['id_producto']); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                    </svg>
                                Editar
                                </a>
                            </div>
                        </th>
                        <th>
                            <?php if($productos['estado_producto']==0):?>
                                
                                <div class="mt-4 d-flex justify-content-center">
                                    <a class="icon-link icon-link-hover btn btn-primary fw-semibold " style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="<?php echo base_url('activar_producto/'.$productos['id_producto']); ?>">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                            <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
                                        </svg>
                                    Activar
                                    </a>
                                </div>

                            <?php else:?>
                                <div class="mt-4 d-flex justify-content-center">
                                    <a class="icon-link icon-link-hover btn btn-primary fw-semibold " style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="<?php echo base_url('eliminar_producto/'.$productos['id_producto']); ?>">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                                        </svg>
                                    Eliminar
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay productos para mostrar.</p>
    <?php endif; ?>
</div>
