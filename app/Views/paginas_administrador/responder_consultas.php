<div class="container justify-content-center">
    <div class="row justify-content-center">
        
        <div class="col-xs-12 col-lg-6 mt-5 mb-5">
            <!--<form class="form-regis">-->

                <?php if(session('mensaje')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session('mensaje') ?>
                    </div>
                <?php endif; ?>

                <?php echo form_open('', ['enctype' => 'multipart/form-data'])?>

                <?php echo form_hidden('id_consulta', $mensaje['id_contacto']); ?>

                <div class="form-regis">
                <h1 class="text-center fw-bold mb-5">Responder Consulta</h1>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <?php echo form_input(['name'=>'nombre_contacto', 'id'=>'nombre_contacto', 'type'=>'text','class'=>'form-control','value'=>set_value ('nombre_contacto', $mensaje['nombre_contacto'])]) ?>
                    <?php if(isset($validation['nombre_contacto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['nombre_contacto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <?php echo form_input(['name'=>'email_contacto', 'id'=>'email_contacto', 'type'=>'text','class'=>'form-control','value'=>set_value ('email_contacto', $mensaje['email_contacto'])]) ?>
                    <?php if(isset($validation['email_contacto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['email_contacto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                    
                </div>
                    
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Asunto</label>
                    <?php echo form_input(['name'=>'asunto_contacto', 'id'=>'asunto_contacto', 'type'=>'text','class'=>'form-control','value'=>set_value ('asunto_contacto', $mensaje['asunto_contacto'])]) ?>
                    <?php if(isset($validation['asunto_contacto'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['asunto_contacto']; ?></div>
                    <?php endif; ?>
                    <!--<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                    
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <?php echo form_textarea(['name' => 'mensaje_contacto', 'id'=>'mensaje_contacto', 'type'=>'text', 'class'=>'form-control', 'rows' =>'5', 'placeholder' => 'Escribe un mensaje', 'value'=>set_value ('mensaje_contacto', $mensaje['mensaje_contacto'])])?>
                    <!--Mensaje de alerta-->
                    <?php if(isset($validation['mensaje_contacto'])):?>
                        <div class="alert alert-danger mt-2"><?=$validation['mensaje_contacto'];?>
                        </div>
                    <?php endif;?>
                    <!--<textarea class="form-control" id="mensaje" rows="5" required placeholder="Escribe un mensaje"></textarea>-->
                </div>
                
                <div class="mb-3">
                    <label for="mensaje" class="form-label"></label>
                    <?php echo form_textarea(['name' => 'mensaje_administrador', 'id'=>'mensaje_administrador', 'type'=>'text', 'class'=>'form-control', 'rows' =>'5', 'placeholder' => 'Escribe aqui tu respuesta', 'value'=>set_value ('mensaje_administrador')])?>
                    <!--Mensaje de alerta-->
                    <?php if(isset($validation['mensaje_administrador'])):?>
                        <div class="alert alert-danger mt-2"><?=$validation['mensaje_administrador'];?>
                        </div>
                    <?php endif;?>
                    <!--<textarea class="form-control" id="mensaje" rows="5" required placeholder="Escribe un mensaje"></textarea>-->
                </div>
                

                <div class="d-flex justify-content-center mt-5">
                <?php echo form_submit('Responder', 'Responder', "class='btn btn-primary fw-medium fs-4'")?>
                <!--<button type="submit" class="btn btn-primary">Registrarme</button>-->
                </div>

                </div>
                <?php echo form_close();?>
            <!--</form>-->
        </div>
    </div>
</div>