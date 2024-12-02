<div class="container mt-5 mb-5">
    <div class="row">

    <!--TEXTO-->
    <div class="col mt-5">
        <h2 class="login_text mt-3">Apple Store</h2>
        <p class="fs-2 login_parrafo">La mejor forma de comprar tus productos favoritos.</p>

    </div>

    <!--FORMULARIO-->
    <div class="col-xs-12 col-lg-6 mt-5">

            <?php if(session('mensaje')): ?>
                <div class="alert alert-danger" role="alert">
                    <?= session('mensaje') ?>
                </div>
            <?php endif; ?>

            <?php echo form_open('login_usuario') ?>
            <!--<form class="form_log">-->
            <div class="form_log">

            
                <!--INGRESO MAIL-->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <?php echo form_input(['name'=>'email_usuario', 'id'=>'email_usuario', 'type'=>'email','class'=>'form-control','value'=>set_value('email_usuario')])?>
                    <?php if(isset($validation['email_usuario'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['email_usuario']; ?></div>
                    <?php endif; ?>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
                </div>

                <!--INGRESO PASSWORD-->
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <?php echo form_input(['name'=>'pass_usuario', 'id'=>'pass_usuario', 'type'=>'password','class'=>'form-control'])?>
                    <?php if(isset($validation['pass_usuario'])):?>
                        <div class="alert alert-danger mt-2"><?= $validation['pass_usuario']; ?></div>
                    <?php endif; ?>
                    <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
                </div>

                <!--CHECKBOX-->
                <!--
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->

                <!--BOTON DE INGRESAR-->
                <div class="d-flex justify-content-center">
                    <?php echo form_submit('Ingresar', 'Ingresar', "class='btn btn-primary'")?>
                    <!--<button type="submit" class="btn btn-primary">Ingresar</button>-->
                </div>
                
                <div class="d-flex justify-content-center mt-4 link_passw">
                    <a href="#" class="mb-4">¿Olvidaste tu contraseña?</a>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="<?php echo base_url('Registrarse');?>" class="btn btn-success mt-4">Crear una cuenta nueva</a>
                </div>

                </div>
                <?php echo form_close();?>
        <!--</form>-->
    </div>
    
</div>
</div>



