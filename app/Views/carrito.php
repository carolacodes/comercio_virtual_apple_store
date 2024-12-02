<?php $cart = \Config\Services::cart();?>
<div class="container mt-4">
<h1 class="text-center fs-1 mt-5 mb-5 fw-bold">Carrito de Compras</h1>
<div class="d-flex justify-content-center mb-5">
    <a href="<?php echo base_url('catalogo') ; ?>" class = "btn btn-info fw-bold fs-5 mt-4">Seguir comprando
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-check mb-1 " viewBox="0 0 16 16">
            <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
        </svg>
    </a>
</div>

<?php if(session('mensaje')): ?>
                    <div class="alert alert-success justify-content-center" role="alert">
                        <?= session('mensaje') ?>
                    </div>
<?php endif; ?>

<?php if($cart->contents() == NULL) {?>
    <div class="d-flex justify-content-center mb-5 mt-2">
        <p class="fw-bold fs-2 mt-3">Carrito Vacio
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-frown-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m-2.715 5.933a.5.5 0 0 1-.183-.683A4.5 4.5 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 0 1-.866.5A3.5 3.5 0 0 0 8 10.5a3.5 3.5 0 0 0-3.032 1.75.5.5 0 0 1-.683.183M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8"/>
            </svg>
    </p>
    </div>
    <?php }?>
    <table id="mytable" class="table table-bordred table-striped">
        <?php if($cart1 = $cart->contents()):?>
            <thead>
                <td></td>
                <td>Nombre</td>
                <td>Cantidad</td>
                <td>Precio</td>
                <td>Subtotal</td>
                <td>Accion</td>
            </thead>
            <tbody>
                <?php
                    $total = 0;
                    $i = 1;
                foreach ($cart1 as $item):?>
                <tr>
                    <td>
                        <?php if (isset($item['options']['image'])): ?>
                            <img src="<?php echo base_url('/assets/uploads/' . $item['options']['image']); ?>" alt="Imagen del Producto" width="100">
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </td>
                    <td><?php echo $item['name'];?></td>
                    <td>
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                        
                        <a class="btn btn-secondary" href="<?php echo base_url('modificar_cantidad/menos/'.$item['rowid']);?>">-</a>
                        <button type="button" class="btn btn-secondary"><?php echo $item['qty'];?></button>
                        <a class="btn btn-secondary" href="<?php echo base_url('modificar_cantidad/mas/'.$item['rowid']);?>">+</a>
                        
                    </div>
                        
                    </td>
                    <td>$<?php echo $item['price'];?></td>
                    <td>$<?php echo $item['subtotal'];$total = $total + $item['subtotal']?></td>
                    <td><?php echo anchor('eliminar_item/'.$item['rowid'],'Eliminar');?></td>
                </tr>
                <?php endforeach;?>
                <tr>
                    <td>Total Compra: $<?php echo $total;?></td>
                    <td>
                        <a href="<?php echo base_url('vaciar_carrito/all');?>" class = 'btn btn-info fw-bold'>Vaciar Carrito
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-x mb-1" viewBox="0 0 16 16">
                                <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo base_url('ventas');?>"class = 'btn btn-info fw-bolder'>Comprar
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin mt-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            <?php endif;?>
            </tbody>
    </table>

</div>









