<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('admin_index') ; ?>">
        <img src="<?= base_url('../../assets/img/nav_iconos/apple.svg')?>" alt="icon_apple">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('ver_consultas') ; ?>">Ver consultas</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('catalogo') ; ?>">Listar Productos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('listar_ventas') ; ?>">Listar ventas</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('cargar_productos') ; ?>">Cargar Productos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('gestionar_productos') ; ?>">Gestionar Productos</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-capitalize fw-medium" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person mb-1" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                            </svg> <?php echo session('nombre_usuario') ; ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-medium" href="<?php echo base_url('logout') ; ?>">Salir</a>
                </li>
            </ul>
</div>
</div>
</nav>