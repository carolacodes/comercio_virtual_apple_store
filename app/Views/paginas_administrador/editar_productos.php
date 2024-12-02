<div class="container justify-content-center">
    <div class="row justify-content-center">
        
        <div class="col-xs-12 col-lg-6 mt-5 mb-5">
            <!--<form class="form-regis">-->

                <?php if(session('mensaje')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session('mensaje') ?>
                    </div>
                <?php endif; ?>

                <?php echo form_open('actualizar_producto', ['enctype' => 'multipart/form-data'])?>
                    <!--pasamos id del producto para que esre disponible para la actualizacion correcta-->
                <?php echo form_hidden('id_producto', $productos['id_producto']); ?>

                <div class="form-regis">
                <h1 class="text-center fw-bold mb-5">Editar/Modificar Producto</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre Producto</label>
                    <?php echo form_input(['name'=>'nombre_producto', 'id'=>'nombre_producto', 'type'=>'text','class'=>'form-control','value'=>set_value ('nombre_producto', $productos['nombre_producto'])]) ?>
                    <?php if(isset($validation['nombre_producto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['nombre_producto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                    
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Descripcion Producto</label>
                    <?php echo form_textarea(['name' => 'descripcion_producto', 'id'=>'descripcion_producto', 'type'=>'text', 'class'=>'form-control', 'rows' =>'5', 'placeholder' => 'Escribe un mensaje', 'value'=>set_value ('descripcion_producto', $productos['descripcion_producto'])])?>
                    <!--Mensaje de alerta-->
                    <?php if(isset($validation['descripcion_producto'])):?>
                        <div class="alert alert-danger mt-2"><?=$validation['descripcion_producto'];?>
                        </div>
                    <?php endif;?>
                    <!--<textarea class="form-control" id="mensaje" rows="5" required placeholder="Escribe un mensaje"></textarea>-->
                </div>
                
                
                

                        <!-- CATEGORIA PRODUCTO -->
                <div class="mb-3">
                <label for="mensaje" class="form-label">Categoria</label>
                    <?php
                    $lista['0'] = 'Seleccione categoria';
                    foreach($categorias as $row){
                        $categoria_id = $row['id_categoria'];
                        $categoria_nombre = $row['nombre_categoria'];
                        $lista[$categoria_id] = $categoria_nombre;
                    }

                    // Valor actual de la categoría del producto
                    $categoria_actual = $productos['categoria_producto'];

                    // Generar el dropdown con el valor seleccionado
                    echo form_dropdown('categoria_producto', $lista, $categoria_actual, 'class="form-control" id="categoria_producto" name="categoria_producto"');
                    ?>
                    <?php if(isset($validation['categoria_producto'])): ?>
                        <div class="alert alert-danger mt-2"><?= $validation['categoria_producto']; ?></div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio Producto</label>
                    <?php echo form_input(['name'=>'precio_producto', 'id'=>'precio_producto', 'type'=>'number','class'=>'form-control', 'value'=>set_value('precio_producto', $productos['precio_producto'])]) ?>
                    <?php if(isset($validation['precio_producto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['precio_producto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cantidad Producto</label>
                    <?php echo form_input(['name'=>'cantidad_producto', 'id'=>'cantidad_producto', 'type'=>'number','class'=>'form-control', 'value'=>set_value('cantidad_producto', $productos['cantidad_producto'])])?>
                    <?php if(isset($validation['cantidad_producto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['cantidad_producto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
                </div>
                    
                <div class="mb-3">
                <label for="mensaje" class="form-label">Proveedor</label>
                    <?php
                    $lista1['0'] = 'Seleccione Proveedor';
                    foreach($proveedores as $row){
                        $proveedor_id = $row['id_proveedor'];
                        $proveedor_nombre = $row['nombre_proveedor'];
                        $lista1[$proveedor_id] = $proveedor_nombre;
                    }

                    // Valor actual de la categoría del producto
                    $proveedor_actual = $productos['proveedor_producto'];

                    // Generar el dropdown con el valor seleccionado
                    echo form_dropdown('proveedor_producto', $lista1, $proveedor_actual, 'class="form-control" id="proveedor_producto" name="proveedor_producto"');
                    ?>
                    <?php if(isset($validation['proveedor_producto'])): ?>
                        <div class="alert alert-danger mt-2"><?= $validation['proveedor_producto']; ?></div>
                    <?php endif; ?>
                </div>
                    
                

                <!-- Campo oculto para almacenar el nombre de la imagen actual -->
                <input type="hidden" name="imagen_actual" value="<?php echo $productos['img_producto']; ?>" />

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Imagen Producto</label>

                    <div class="mb-3">
                        
                        <img src="<?php echo base_url('assets/uploads/' . $productos['img_producto']); ?>" alt="Imagen del Producto" height="100" width="100">
                        
                    </div>

                    <?php echo form_input(['name'=>'imagen_producto', 'id'=>'imagen_producto', 'type'=>'file','class'=>'form-control'])?>
                    <?php if(isset($validation['imagen_producto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['imagen_producto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
                </div>

                <div class="d-flex justify-content-center mt-5">
                <?php echo form_submit('Modificar', 'Modificar', "class='btn btn-primary fw-medium fs-4'")?>
                <!--<button type="submit" class="btn btn-primary">Registrarme</button>-->
                </div>

                </div>
                <?php echo form_close();?>
            <!--</form>-->
        </div>
    </div>
</div>