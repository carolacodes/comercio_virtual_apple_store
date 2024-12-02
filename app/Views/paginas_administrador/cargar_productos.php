<div class="container justify-content-center">
    <div class="row justify-content-center">
        
        <div class="col-xs-12 col-lg-6 mt-5 mb-5">
            <!--<form class="form-regis">-->

                <?php if(session('mensaje')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session('mensaje') ?>
                    </div>
                <?php endif; ?>

                <?php echo form_open('registrar_producto', ['enctype' => 'multipart/form-data'])?>
                <div class="form-regis">
                <h1 class="text-center fw-bold mb-5">Cargar Productos</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre Producto</label>
                    <?php echo form_input(['name'=>'nombre_producto', 'id'=>'nombre_producto', 'type'=>'text','class'=>'form-control','value'=>set_value ('nombre_producto')]) ?>
                    <?php if(isset($validation['nombre_producto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['nombre_producto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                    
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Descripcion Producto</label>
                    <?php echo form_textarea(['name' => 'descripcion_producto', 'id'=>'descripcion_producto', 'type'=>'text', 'class'=>'form-control', 'rows' =>'5', 'placeholder' => 'Escribe un mensaje', 'value'=>set_value ('descripcion_producto')])?>
                    <!--Mensaje de alerta-->
                    <?php if(isset($validation['descripcion_producto'])):?>
                        <div class="alert alert-danger mt-2"><?=$validation['descripcion_producto'];?>
                        </div>
                    <?php endif;?>
                    <!--<textarea class="form-control" id="mensaje" rows="5" required placeholder="Escribe un mensaje"></textarea>-->
                </div>
                    
                <div class="mb-4">
                        <label for="categoria"></label>
                        <?php
                        $lista['0']='Seleccione categoria';
                        foreach($categorias as $row){
                            $categoria_id = $row['id_categoria'];
                            $categoria_nombre = $row['nombre_categoria'];
                            $lista[$categoria_id] = $categoria_nombre;
                        }
                        echo form_dropdown('categoria_producto',$lista,'0', 'class="form-control", name="categoria_producto", id="categoria_producto"');
                        ?>
                        <?php if(isset($validation['categoria_producto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['categoria_producto']; ?></div>
                        <?php endif; ?>
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio Producto</label>
                    <?php echo form_input(['name'=>'precio_producto', 'id'=>'precio_producto', 'type'=>'number','class'=>'form-control', 'value'=>set_value('precio_producto')]) ?>
                    <?php if(isset($validation['precio_producto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['precio_producto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cantidad Producto</label>
                    <?php echo form_input(['name'=>'cantidad_producto', 'id'=>'cantidad_producto', 'type'=>'number','class'=>'form-control', 'value'=>set_value('cantidad_producto')])?>
                    <?php if(isset($validation['cantidad_producto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['cantidad_producto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
                </div>
                    

                <div class="mb-3">
                    <?php
                    $lista1['0'] = 'Seleccione un proveedor';
                    foreach($proveedores as $row){
                        $proveedor_id = $row['id_proveedor'];
                        $proveedor_nombre = $row['nombre_proveedor'];
                        $lista1[$proveedor_id] = $proveedor_nombre;
                        }
                        echo form_dropdown('proveedor_producto',$lista1,'0', 'class="form-control" id="proveedor_producto" name="proveedor_producto"');
                        ?>
                    <?php if(isset($validation['proveedor_producto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['proveedor_producto']; ?></div>
                    <?php endif; ?>

                </div>

                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Imagen Producto</label>
                    <?php echo form_input(['name'=>'imagen_producto', 'id'=>'imagen_producto', 'type'=>'file','class'=>'form-control'])?>
                    <?php if(isset($validation['imagen_producto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['imagen_producto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
                </div>

                <div class="d-flex justify-content-center">
                <?php echo form_submit('Cargar Producto', 'Cargar Producto', "class='btn btn-primary'")?>
                <!--<button type="submit" class="btn btn-primary">Registrarme</button>-->
                </div>

                </div>
                <?php echo form_close();?>
            <!--</form>-->
        </div>
    </div>
</div>