<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="fw-bold h2-regis">
                Registrate para acceder a todas las promociones disponibles en Apple Store
            </h2>
        </div>
        <div class="col-xs-12 col-lg-6 mt-5 mb-5">
            <!--<form class="form-regis">-->

                <?php if(session('mensaje')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session('mensaje') ?>
                    </div>
                <?php endif; ?>

                <?php echo form_open('registrar_usuario')?>
                <div class="form-regis">
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <?php echo form_input(['name'=>'nombre_usuario', 'id'=>'nombre_usuario', 'type'=>'text','class'=>'form-control','value'=>set_value ('nombre_usuario')]) ?>
                    <?php if(isset($validation['nombre_usuario'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['nombre_usuario']; ?></div>
                    <?php endif; ?>
                    <!--<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <?php echo form_input(['name'=>'apellido_usuario', 'id'=>'apellido_usuario', 'type'=>'text','class'=>'form-control', 'value'=>set_value('apellido_usuario')]) ?>
                    <?php if(isset($validation['apellido_usuario'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['apellido_usuario']; ?></div>
                    <?php endif; ?>
                    <!--<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                    <?php echo form_input(['name'=>'email_usuario', 'id'=>'email_usuario', 'type'=>'email','class'=>'form-control', 'value'=>set_value('email_usuario')]) ?>
                    <?php if(isset($validation['email_usuario'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['email_usuario']; ?></div>
                    <?php endif; ?>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <?php echo form_input(['name'=>'pass_usuario', 'id'=>'pass_usuario', 'type'=>'password','class'=>'form-control'])?>
                    <?php if(isset($validation['pass_usuario'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['pass_usuario']; ?></div>
                    <?php endif; ?>
                    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Repetir Contraseña</label>
                    <?php echo form_input(['name'=>'pass_usuario1', 'id'=>'pass_usuario1', 'type'=>'password','class'=>'form-control'])?>
                    <?php if(isset($validation['pass_usuario1'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['pass_usuario1']; ?></div>
                    <?php endif; ?>
                    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
                </div>
                
                <div class="d-flex justify-content-center">
                <?php echo form_submit('Registrarme', 'Registrarme', "class='btn btn-primary'")?>
                <!--<button type="submit" class="btn btn-primary">Registrarme</button>-->
                </div>

                </div>
                <?php echo form_close();?>
            <!--</form>-->
        </div>
    </div>
</div>