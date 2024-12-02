<!--
<div class="">
<nav class="navbar navbar-expand-lg nav-catalogo">
    <div class="container-fluid">
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <div class="link-catalogo">
                    <li class="nav-item">
                        <a class="nav-link fs-4 fw-semibold" href="<?php echo base_url('Mac');?>">Mac</a>
                    </li>
                </div>

                <div class="link-catalogo">
                    <li class="nav-item">
                        <a class="nav-link fs-4 fw-semibold" href="#">iPad</a>
                    </li>
                </div>

                <div class="link-catalogo">
                    <li class="nav-item">
                        <a class="nav-link fs-4 fw-semibold" href="#">iPhone</a>
                    </li>
                </div>

                <div class="link-catalogo">
                    <li class="nav-item">
                        <a class="nav-link fs-4 fw-semibold" href="#">Watch</a>
                    </li>
                </div>

                <div class="link-catalogo">
                    <li class="nav-item">
                        <a class="nav-link fs-4 fw-semibold" href="#">AirPods</a>
                    </li>
                </div>
            </ul>

        </div>
    </div>
</nav>
</div>
-->
<div class="container text-center d-flex justify-content-center">
    <h2 class="mt-5 mb-2 fs-1 fw-bold titulo-productos">Productos Disponibles</h2>
</div>

<div class="container">
    
    <div class="row mb-5">
        <!--COLUMNAS DE FILTROS MAC-->
        <div class="col-lg-2">

            <!--RANGO DE PRECIO-->
            <div class="row">
                <div class="col">
                    <!--RANGO DE PRECIO-->
                </div>
            </div>

            <!---CATEGORIA-->
            <div class="row mt-3 mb-3">
                <div class="col">
                    <!---CATEGORIA-->
                    <h2 class="h2-cata-mac fw-bold fs-5 mt-1 mb-3">Categoria</h2>
                    
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('filtrar_categoria/1')?>">Mac</a>
                        </li>

                        <li class="list-group-item">
                            <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('filtrar_categoria/2')?>">iPad</a>
                        </li>

                        <li class="list-group-item">
                            <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('filtrar_categoria/3')?>">iPhone</a>
                        </li>

                        <li class="list-group-item">
                            <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('filtrar_categoria/4')?>">Watch</a>
                        </li>

                        <li class="list-group-item">
                            <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('filtrar_categoria/5')?>">AirPods</a>
                        </li>

                        <li class="list-group-item">
                            <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('catalogo')?>">Todo</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="row mt-3 mb-3">
                <div class="col">
                <h2 class="h2-cata-mac fw-bold fs-5 mt-1 mb-3">Precio</h2>
                    
                
                    <?php if($h1 == 'Productos'):?>

                        <ul class="list-group">
                            <li class="list-group-item">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('catalogo/precio_asc') ?>">Menor a Mayor precio</a>
                            </li>

                            <li class="list-group-item">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('catalogo/precio_desc') ?>">Mayor a Menor precio</a>
                            </li>

                            <li class="list-group-item">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('catalogo')?>">Todos</a>
                            </li>
                        </ul>

                    <?php else:?>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('filtrar_categoria/'.$id_categoria.'/precio_asc') ?>">Menor a Mayor precio</a>
                            </li>

                            <li class="list-group-item">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('filtrar_categoria/'.$id_categoria.'/precio_desc') ?>">Mayor a Menor precio</a>
                            </li>

                            <li class="list-group-item">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 fw-medium" href="<?= site_url('filtrar_categoria/'.$id_categoria)?>">Todos</a>
                            </li>
                        </ul>
                    <?php endif;?>
                </div>
            </div>

            <!--ALMACENAMIENTO-->
            <div class="row mt-3 mb-3">
                <div class="col">
                <!--ALMACENAMIENTO
                <h2 class="h2-cata-mac fw-bold fs-5 mt-1 mb-3">Almacenamiento</h2>
                <ul class="list-group">

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" id="Alm-mac-firstCheckboxStretched">
                        <label class="form-check-label stretched-link" for="Alm-mac-firstCheckboxStretched">256GB</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" id="Alm-mac-secondCheckboxStretched">
                        <label class="form-check-label stretched-link" for="Alm-mac-secondCheckboxStretched">512GB</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" id="Alm-mac-thirdCheckboxStretched">
                        <label class="form-check-label stretched-link" 
                        for="Alm-mac-thirdCheckboxStretched">1TB</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" id="Alm-mac-fourthCheckboxStretched">
                        <label class="form-check-label stretched-link" for="Alm-mac-fourthCheckboxStretched">2TB</label>
                    </li>

                </ul>
                -->
                </div>
            </div>

            <!--COLOR-->
            <div class="row mt-3 mb-3">
                <div class="col">
                    <!--
                    <h2 class="h2-cata-mac fw-bold fs-5 mt-1 mb-3">Color</h2>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-firstCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-firstCheckboxStretched">Azul</label>
                            </li>

                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-secondCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-secondCheckboxStretched">Azul Medianoche</label>
                            </li>

                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-thirdCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-thirdCheckboxStretched">Blanco Estelar</label>
                            </li>

                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-fourthCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-fourthCheckboxStretched">Medianoche</label>
                            </li>

                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-fifthCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-fifthCheckboxStretched">Negro Espacial</label>
                            </li>

                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-sixthCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-sixthCheckboxStretched">Rosa</label>
                            </li>

                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-seventhCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-seventhCheckboxStretched">Verde</label>
                            </li>

                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-eighthCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-eighthCheckboxStretched">Verde Claro</label>
                            </li>

                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-ninthCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-ninthCheckboxStretched">Plata</label>
                            </li>

                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-tenthCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-tenthCheckboxStretched">Color Oro</label>
                            </li>

                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="Color-Mac-eleventhCheckboxStretched">
                                <label class="form-check-label stretched-link" for="Color-Mac-eleventhCheckboxStretched">Gris Espacial</label>
                            </li>
                        </ul>
                        -->
                </div>
            </div>

        </div>
        
        <!--COLUMNAS DE PRODUCTOS MAC--->
        <div class="col-lg-10 mt-3 justify-content-center text-center">
            <!--COLUMNAS DE PRODUCTOS MAC--->

            <!--FILA 1-->
        <div class="row mt-5 mb-5">

        
            <?php if (!empty($productos) && is_array($productos)): ?>

                <?php foreach ($productos as $productos): ?>
                    
                    <div class="col-4 d-flex justify-content-center">
                        <div class="card card-productos mt-2 mb-2" style="width: 18rem;">
                            <img src="<?php echo base_url('/assets/uploads/' . $productos['img_producto']);?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title "><?= esc($productos['nombre_producto']); ?></h5>
                                <!--<h5 class="card-title">Chip M2 13"</h5>-->
                                <p class="card-text "><?= esc($productos['descripcion_producto']); ?>
                                </p>
                                <p>$<?= esc($productos['precio_producto']); ?></p>

                                <?php if($productos['cantidad_producto']>0):?>
                                <?php echo form_open('agregar_carrito');
                                    echo form_hidden('id_producto', $productos['id_producto']);
                                    echo form_hidden('nombre_producto', $productos['nombre_producto']);
                                    echo form_hidden('precio_producto', $productos['precio_producto']);
                                    echo form_hidden('imagen_producto', $productos['img_producto']);
                                    echo form_submit('Agregar al carrito', 'Agregar al carrito', "class = 'btn btn-primary'");
                                    echo form_close();
                                ?>
                            <?php else:?>
                                <a href="<?php echo base_url('ver_carrito') ; ?>" class="btn btn-primary disabled">Sin Stock</a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <p>No hay productos para mostrar.</p>
        <?php endif; ?>
</div>
</div>
</div>


