<!--CARRUSEL-->


<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">

    <!--IPHONE 15 PRO CARRUSEL-->

    <div class="carousel-item active d-item">
      <img src="<?=base_url('../../assets/img/carrusel_inicio/iphone_15normal.png')?>" class="d-block w-100 d-img" alt="...">
        <div class="carousel-caption top-0 mt-4">
            <h2 class="display-1 fw-bolder ">iPhone 15 Pro</h2>
            <p class="mt-3 fs-3">
                Titanio. Tan resistente y ligero. Tan Pro.
            </p>
            <div  class="carousel-caption mt-4">
            <a href="#" class="btn btn-primary px-4 py-2 fs-5 mt-5  carousel-link" rel="Comprar" title="Comprar">Comprar</a>
            </div>
        
        </div>
    </div>

    <!--IPAD PRO CARRUSEL-->
    <div class="carousel-item">
      <img src="<?=base_url('../../assets/img/carrusel_inicio/carrusel_2.jpg')?>" class="d-block w-100 " alt="...">
      <div class="carousel-caption top-0 mt-4">
            <h2 class="display-1 fw-bolder">iPad Pro</h2>
            <p class="mt-3 fs-3">
                Con los superpoderes del chip M2
            </p>
            <div  class="carousel-caption mt-4">
            <a href="#" class="btn btn-primary px-4 py-2 fs-5 mt-5  carousel-link" rel="Comprar" title="Comprar">Comprar</a>
            </div>
            
      </div>
    </div>

    <!--AIRPODS PRO CARRUSEL-->
    <div class="carousel-item">
      <img src="<?=base_url('../../assets/img/carrusel_inicio/carrusel_airpods_pro.jpg')?>" class="d-block w-100 " alt="...">
        <div class="carousel-caption top-0 mt-4">
            <h2 class="display-1 fw-bolder ">AirPods Pro</h2>
            <p class="mt-3 fs-3">
                Audio Adaptativo. Escucha la diferencia.
            </p>
            <div  class="carousel-caption mt-4">
            <a href="#" class="btn btn-primary px-4 py-2 fs-5 mt-5  carousel-link" rel="Comprar" title="Comprar">Comprar</a>
            </div>
        
        </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




    <div class="container">
    <div class="d-parrafo_apple ">
        <p class="fs-2 mt-5 mb-5 fw-bold"> Apple Store marca la diferencia. Aún más razones para comprar con nosotros. </p>
    </div>
    </div>
    

    <!--PROD INICIO usando container-->
    
    <div class="container text-center d-flex justify-content-center">
      <div class="row">

        <div class="col d-prod me-4">
            
              <a class="" href="<?php echo base_url('filtrar_categoria/1');?>">
                <img src="<?= base_url('../../assets/img/prod_inicio/store-card-13-mac-nav-2023.png')?>" class="" alt="">
              </a>
              <p class="text-center fw-bold mt-1">Mac</p>
            
        </div>

        <div class="col d-prod me-4">
            
              <a class="" href="<?php echo base_url('filtrar_categoria/3');?>">
                <img src="<?= base_url('../../assets/img/prod_inicio/store-card-13-iphone-nav-2023_GEO_EMEA.png')?>" alt="">
              </a>
              <p class="text-center fw-bold mt-1">iPhone</p>
            
        </div>

        <div class="col d-prod me-4">
            
              <a class="" href="<?php echo base_url('filtrar_categoria/2');?>">
                <img src="<?= base_url('../../assets/img/prod_inicio/store-card-13-ipad-nav-2022.png')?>" alt="">
              </a>
              <p class="text-center fw-bold mt-1">iPad</p>
            
        </div>

        <div class="col d-prod me-4">

              <a class="" href="<?php echo base_url('filtrar_categoria/4');?>">
                <img src="<?= base_url('../../assets/img/prod_inicio/store-card-13-watch-nav-2023_GEO_ES.png')?>" alt="">
              </a>
              <p class="text-center fw-bold mt-1">Apple Watch</p>
            
        </div>

        <div class="col d-prod me-4">
          
            <a class="" href="<?php echo base_url('filtrar_categoria/5');?>">
              <img src="<?= base_url('../../assets/img/prod_inicio/store-card-13-airpods-nav-2022.png')?>" alt="">
            </a>
            <p class="text-center fw-bold mt-1">AirPods</p>
          
        </div>

      </div>
    </div>

    <!--PROD INICIO usando divs-->
    <!--
    <div class="d-flex justify-content-center d-prod">

          <div class="me-5">
            <a class="" href="#">
              <img src="<?= base_url('../../assets/img/prod_inicio/store-card-13-mac-nav-2023.png')?>" alt="">
            </a>
            <p class="text-center fw-bold t-1">Mac</p>
          </div>
        
        <div class="me-5">
          <a class="" href="#">
            <img src="<?= base_url('../../assets/img/prod_inicio/store-card-13-iphone-nav-2023_GEO_EMEA.png')?>" alt="">
          </a>
          <p class="text-center fw-bold mt-1">iPhone</p>
        </div>
          
        
      
        <div class="me-5">
          <a class="" href="#">
            <img src="<?= base_url('../../assets/img/prod_inicio/store-card-13-ipad-nav-2022.png')?>" alt="">
          </a>
          <p class="text-center fw-bold mt-1">iPad</p>
        </div>
          
        <div class="me-5">
          <a class="" href="#">
            <img src="<?= base_url('../../assets/img/prod_inicio/store-card-13-watch-nav-2023_GEO_ES.png')?>" alt="">
          </a>
          <p class="text-center fw-bold mt-1">Apple Watch</p>
        </div>

        <div class="me-5">
          <a class="" href="#">
            <img src="<?= base_url('../../assets/img/prod_inicio/store-card-13-airpods-nav-2022.png')?>" alt="">
          </a>
          <p class="text-center fw-bold mt-1">AirPods</p>
        </div>
          
    </div>
-->
<!--CARDS DE METODOS DE PAGO, SUCURSALES, CONTACTANOS-->
<!--
<div class="card-group">
  <div class="card">
    <img src="<?=base_url('../../assets/img/credit-card.svg')?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center">METODOS DE PAGO</h5>
      
      
      
    </div>
  </div>
  <div class="card">
    <img src="<?=base_url('../../assets/img/tienda_online.jpg')?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center">NUESTRA TIENDA ONLINE</h5>
      
      
    </div>
  </div>
  <div class="card">
    <img src="<?=base_url('../../assets/img/sucursales.jpg')?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center">CONOCE NUESTRAS SUCURSALES</h5>
      
      
    </div>
  </div>
</div>
-->

<!--CARDS MOSTRANDO PRODUCTOS-->

<div class="d-h2Nov_card">
    <h2 class="text-center mt-5 mb-5">
        Lo último. Echa un vistazo a las novedades.
    </h2>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 ms-1 me-1">

  <div class="col">
    <div class="card h-100">
      <img src="<?=base_url('../../assets/img/cards_inicio/card-40-ipad-202310_GEO_ES.jpg')?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center fw-bolder">iPad</h5>
        <p class="card-text text-center">Inspirate. Exprésate. Diviértete.</p>
      </div>
      <div class="card-footer d-flex justify-content-center">
        <a href="#" class="btn btn-primary btn-lg">Obtener</a>
      </div>
    </div>
  </div>

  <div class="col ">
    <div class="card h-100">
      <img src="<?=base_url('../../assets/img/cards_inicio/card-40-iphone-15-2023.jpg')?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center fw-bolder">iPhone 15</h5>
        <p class="card-text text-center">Nueva cámara. Nuevo diseño. Nuevocionante.</p>
      </div>
      <div class="card-footer d-flex justify-content-center">
        <a href="#" class="btn btn-primary btn-lg">Obtener</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="<?=base_url('../../assets/img/cards_inicio/card-40-watch-ultra-2023_GEO_ES.jpg')?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center fw-bolder">Watch Ultra 2</h5>
        <p class="card-text text-center">La aventura continúa.</p>
      </div>
      <div class="card-footer d-flex justify-content-center">
        <a href="#" class="btn btn-primary  btn-lg">Obtener</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="<?=base_url('../../assets/img/cards_inicio/card-40-watch-se-202403_GEO_ES.jpg')?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center fw-bolder">Apple Watch SE</h5>
        <p class="card-text text-center">Mucho mas al alcance de tu muñeca.</p>
      </div>
      <div class="card-footer d-flex justify-content-center">
        <a href="#" class="btn btn-primary  btn-lg">Obtener</a>
      </div>
    </div>
  </div>

  <div class="col ">
    <div class="card h-100">
      <img src="<?=base_url('../../assets/img/cards_inicio/card-macbook-air-202402.jpg')?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center fw-bolder">MacBook Air</h5>
        <p class="card-text text-center">Superligera. Superchip M3.</p>
      </div>
      <div class="card-footer d-flex justify-content-center">
        <a href="#" class="btn btn-primary  btn-lg">Obtener</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="<?=base_url('../../assets/img/cards_inicio/card-40-macbook-pro-202310.jpg')?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center fw-bolder">MacBook Pro</h5>
        <p class="card-text text-center">Te vuela la cabeza. Se roba las miradas.</p>
      </div>
      <div class="card-footer d-flex justify-content-center">
        <a href="#" class="btn btn-primary  btn-lg">Obtener</a>
      </div>
    </div>
  </div>
</div>


<!--CARDS UNICO


<div class="card text-bg-dark text-center mt-3 mb-5">
  <img src="<?=base_url('../../assets/img/card_inicio_unico/CARD_apple_watch_series_9__x5wo4ptz2giu_large.jpg')?>" class="card-img" alt="...">
  <div class="card-img-overlay">
    
      <h2 class="card-title mt-4 display-1 fw-bolder">WATCH</h2>
      <h3 class="card-title mt-4 fw-bolder">SERIES 9</h3>
      <p class="card-text mt-3 fs-3 fw-bolder ">Doble toque. Una forma nueva y magica de usar tu Apple Watch</p>
      <a href="#" class="btn btn-light px-4 py-2 fs-5 mt-5 fw-bolder ">Obtener</a>
    
  </div>
</div>
-->

<div class="container-fluid">
  <div class="row">
    <!--
    <div class="col mt-5 mb-5 serv_img">
      <p>Cinco servicios de Apple una sola subscripcion.</p>
      <img src="<?=base_url('../../assets/img/card_inicio_unico/store-card-50-subscriptions-202108_GEO_ES.jpg')?>" class="d-block" alt="...">
    </div>
    -->

    <div class="col mt-5 mb-5 watch_img">
      <img src="<?=base_url('../../assets/img/card_inicio_unico/9.jpg')?>" class="d-block" alt="...">
    </div> 

  </div>
</div>