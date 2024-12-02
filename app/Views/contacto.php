
<div class="container">
  <div class="row mt-5 mb-5">
    

    <div class="col-xs-12 col-lg-6">
        <h2 class="mt-3 fw-bold contc_h2">En Apple Store, estamos aquí para ayudarte.</h2>
        <p class="fs-4 mt-4 contc_parraf">Si tienes alguna pregunta, comentario o necesitas asesoramiento personalizado, no dudes en llenar el siguiente formulario. Nos pondremos en contacto contigo a la mayor brevedad posible.</p>
    </div>

    <div class="col-xs-12 col-lg-6">

      <!--<form class="form_contc">-->
      <!--
      php if (!empty($validation)):?>
        <div class="alert alert-danger" role="alert">
          <ul>
            php foreach ($validation as $error): ?>
              <li>=esc($error)?></li>
            php endforeach?>
          </ul>

        </div>
        php endif?>

        php if(session('mensaje')){
          echo session('mensaje');
        }?>
        -->      
        

        <?php if(session('mensaje')): ?>
            <div class="alert alert-success" role="alert">
                <?= session('mensaje') ?>
            </div>
        <?php endif; ?>

      <?php echo form_open('consulta')?>

      <div class="form_contc">

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <?php echo form_input(['name' => 'nombre_contacto', 'id'=>'nombre_contacto', 'type' => 'text', 'class'=> 'form-control', 'value'=>set_value ('nombre_contacto')])?>
          <!--mensaje de alerta (isset verifica si la variable validation esta definida y no es null)-->
          <?php if(isset($validation['nombre_contacto'])):?>
            <div class="alert alert-danger mt-2"><?= $validation['nombre_contacto']; ?></div>
          <?php endif; ?>
          <!--<input type="text" class="form-control" id="nombre" required>-->
          
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <?php echo form_input(['name' => 'email_contacto', 'id'=>'email_contacto', 'type' => 'email', 'class'=> 'form-control', 'value'=>set_value ('email_contacto')])?>
          <!--mensaje de alerta-->
          <?php if(isset($validation['email_contacto'])):?>
            <div class="alert alert-danger mt-2"><?=$validation['email_contacto'];?>
            </div>
          <?php endif; ?>
          <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
        </div>

        <div class="mb-3">
          <label for="Asunto" class="form-label">Asunto</label>
          <?php echo form_input(['name' => 'asunto_contacto', 'id'=>'asunto_contacto', 'type' => 'text', 'class'=> 'form-control', 'value'=>set_value ('asunto_contacto')])?>
          <!--Mensaje de alerta-->
          <?php if(isset($validation['asunto_contacto'])):?>
            <div class="alert alert-danger mt-2"><?=$validation['asunto_contacto'];?>
            </div>
          <?php endif; ?>
          <!--<input type="text" class="form-control" id="asunto" required>-->
        </div>

        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje</label>
          <?php echo form_textarea(['name' => 'mensaje_contacto', 'id'=>'mensaje_contacto', 'type'=>'text', 'class'=>'form-control', 'rows' =>'5', 'placeholder' => 'Escribe un mensaje', 'value'=>set_value ('mensaje_contacto')])?>
          <!--Mensaje de alerta-->
          <?php if(isset($validation['mensaje_contacto'])):?>
            <div class="alert alert-danger mt-2"><?=$validation['mensaje_contacto'];?>
            </div>
          <?php endif;?>
          <!--<textarea class="form-control" id="mensaje" rows="5" required placeholder="Escribe un mensaje"></textarea>-->
        </div>

        <div class="d-flex justify-content-center">
          <?php echo form_submit('Enviar', 'Enviar', "class= 'btn btn-primary'") ;?>
          <!-- <button type="submit" class="btn btn-primary">Enviar</button>-->

        </div>

        </div>

      <?php echo form_close();?>
    <!---</form>-->

    </div>
    
    <div class="row mt-5 mb-5 d-flex justify-content-center">
        <h2 class="ms-4 fw-bold contc_h2">Donde nos encontramos</h2>
        <div class="col-xs-6 col-lg-6 d-flex justify-content-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13056.591278211978!2d-106.58522259868073!3d35.10301960510465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87220acf0b6322a3%3A0xd066dbd2f3dbe7c!2sApple%20ABQ%20Uptown!5e0!3m2!1ses!2sar!4v1713576824925!5m2!1ses!2sar" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-xs-6 col-lg-6 mt-2">
            <p class="contc_parraf">Direccion: Apple Store EEUU</p>
            <p class="contc_parraf">Email: applestore@gmail.com</p>
            <p class="contc_parraf">Tel: 900 150 503</p>
            <p class="contc-parraf">Instagram: applestore</p>
        </div>
    </div>
  </div>
</div>

