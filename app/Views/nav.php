
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('/') ; ?>">
        <img src="<?= base_url('../../assets/img/nav_iconos/apple.svg')?>" alt="icon_apple">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Acerca de Nosotros') ; ?>">Acerca de nosotros</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Contacto') ; ?>">Contacto</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Comercializacion') ; ?>">Comercializacion</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('catalogo') ; ?>">Productos</a>
                  </li>
            </ul>
        <!--<div class="">-->
                        <!--d-flex-->
                <form class="" role="search">
                    <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                      <a class="navbar-brand" href="#">
                        <img src="<?= base_url('../../assets/img/nav_iconos/search.svg')?>" alt="">
                      </a>
                    <!---<button class="btn btn-outline-success" type="submit">Search</button>-->
                </form>
                
                <?php if(session('login')){?>

                  <div class="dropdown me-3 mt-2">
                      <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo session('nombre_usuario') ; ?>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('logout') ; ?>">Salir</a></li>
                      </ul>
                  </div>
                    <!---
                    <div>
                        <a class="navbar-brand" href="#">
                          <?php echo session('nombre_usuario') ; ?>
                        </a>
                    </div>

                    <div>
                        <a class="navbar-brand" href="<?php echo base_url('logout') ; ?>">
                              Close
                        </a>
                    </div>
                    -->
<?php } else {?>
                    <div>
                      <a class="navbar-brand" href="<?php echo base_url('Login') ; ?>">
                            <img src="<?= base_url('../../assets/img/nav_iconos/person-fill.svg')?>" alt="">
                      </a>
                    </div>
<?php } ?>
                      <div>
                        <a class="navbar-brand position-relative" href="<?php echo base_url('carrito') ; ?>">
                              <img src="<?= base_url('../../assets/img/nav_iconos/cart4.svg')?>" alt="">
                              <span class="position-absolute ms-1 mt-1 translate-middle badge rounded-pill bg-danger">
                                0
                                <span class="visually-hidden">Cantidad de elementos en el carrito</span>
                              </span>
                        </a>
                      </div>
    </div>
  </div>
</nav>

