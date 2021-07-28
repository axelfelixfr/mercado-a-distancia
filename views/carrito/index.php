<div class="container-fluid">
<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
<h2 class="text-center text-danger border-bottom py-3 title-mercado">Las compras que haz añadido a tu carrito</h2>

<div class="table-responsive">
    <div class="d-flex justify-content-center">
    <div class="col-sm-12 col-md-8">
<table class="table table-sm text-center">
    <thead>
    <tr>
        <th scope="col" class="bg-dark text-warning">Presentación</th>
        <th scope="col" class="bg-dark text-warning">Nombre</th>
        <th scope="col" class="bg-dark text-warning">Precio</th>
        <th scope="col" class="bg-dark text-warning">Unidades</th>
        <th scope="col" class="bg-dark text-warning">Eliminar</th>
    </tr>
    </thead>
    <?php foreach($carrito as $indice => $elemento): $producto = $elemento['producto']; ?>
    <tbody>
    <tr>
        <td scope="row"> <?php if($producto->imagen != null): ?>
                  <img width="120px" src="<?=base_url?>uploads/images/<?=$producto->imagen?>" alt="producto"/>
             <?php else: ?>
                  <img width="120px" src="<?=base_url?>assets/img/no-foto.png" alt="sin foto"/>
             <?php endif; ?>
        </td>
        <td>
            <a class="text-decoration-none" href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?= $producto->nombre ?></a>
        </td>
        <td>
            $<?= $producto->precio ?>
        </td>
        <td>
            <a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="align-middle"><i class="bi bi-plus-square align-middle btn-outline-warning" style="font-size: 1.3em;"></i></a>
            <?= $elemento['unidades'] ?>
            <a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="align-middle"><i class="bi bi-dash-square align-middle btn-outline-warning" style="font-size: 1.3em;"></i></a>
        </td>
        <td>
            <a href="<?=base_url?>carrito/delete&index=<?=$indice?>" class="align-middle"><i class="bi bi-cart-x-fill align-middle text-danger" style="font-size: 2em;"></i></a>
        </td>
    </tr>
    </tbody>
    <?php endforeach; ?>
</table>
    </div>
    </div>
</div>
<?php $stats = Utils::statsCarrito(); ?>
<h4 class="text-center text-dark py-3">Total a pagar: $<?=$stats['total']?> pesos</h4>
<div class="text-center">
    <a href="<?=base_url?>pedido/hacer" class="btn btn-outline-warning font-weight-bold text-dark align-middle">Hacer mi mandado <i class="bi bi-bag-plus-fill align-middle" style="font-size: 1.3em;"></i></a>
    <a href="<?=base_url?>carrito/delete_all" class="btn btn-outline-danger font-weight-bold align-middle">Vaciar carrito <i class="bi bi-bag-x-fill align-middle" style="font-size: 1.3em;"></i></a>
</div>
<?php else: ?>
    <h2 class="text-center text-danger border-bottom py-3 title-mercado">Tu carrito esta vacío</h2>
<?php endif; ?>
</div>
