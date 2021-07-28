<div class="container-fluid">
<h2 class="text-center text-danger border-bottom py-3 title-mercado">Detalles del mandado</h2>
<?php if (isset($pedido)): ?>
    <?php if(isset($_SESSION['admin'])): ?>
    <h5 class="text-left font-weight-bolder text-danger">Cambiar estado del envio:</h5>
    <form action="<?=base_url?>pedido/estado" method="POST">
        <input type="hidden" name="pedido_id" value="<?=$pedido->id?>"/>
        <select class="custom-select" name="status" style="width: 40%">
            <option value="confirm" <?=$pedido->status == "confirm" ? "selected" : ''; ?>>Pendiente</option>
            <option value="preparation" <?=$pedido->status == "preparation" ? "selected" : ''; ?>>Se esta haciendo el mandado</option>
            <option value="ready" <?=$pedido->status == "ready" ? "selected" : ''; ?>>Ya fue enviado</option>
            <option value="sended" <?=$pedido->status == "sended" ? "selected" : ''; ?>>Recibido</option>
        </select>
        <input class="btn btn-outline-warning font-weight-bold text-dark" type="submit" value="Cambiar estado"/>
    </form>
    <?php endif; ?>
    <div class=""></div>
    <h5 class="text-left font-weight-bolder text-danger my-2">Datos del envio:</h5>
        <p><span class="font-weight-bolder">Colonia: </span><?= $pedido->colonia ?></p>
        <p><span class="font-weight-bolder">Código Postal: </span><?= $pedido->codigo_postal ?></p>
        <p><span class="font-weight-bolder">Dirección: </span><?= $pedido->direccion_cl ?></p>
        
    <h5 class="text-left font-weight-bolder text-danger">Detalles del mandado:</h5>
        <p><span class="font-weight-bolder">Estado: </span><?= Utils::showStatus($pedido->status) ?></p>
        <p><span class="font-weight-bolder">Número de pedido: </span><?= $pedido->id ?></p>
        <p><span class="font-weight-bolder">Total a pagar: </span>$<?= $pedido->costo_total ?></p>
        <p class="font-weight-bolder m-0">Los productos que haz comprado en nuestro mercado:</p>
        
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
                </tr>
            </thead>
                <?php while ($producto = $productos->fetch_object()): ?>
                <tbody>
                    <tr>
                        <td scope="row"> 
                            <?php if ($producto->imagen != null): ?>
                                <img width="120px" src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" alt="producto"/>
                            <?php else: ?>
                                <img width="120px" src="<?= base_url ?>assets/img/no-foto.png" alt="sin foto"/>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>" class="text-decoration-none"><?= $producto->nombre ?></a>
                        </td>
                        <td>
                            $<?= $producto->precio ?>
                        </td>
                        <td>
                            <?= $producto->unidades ?>
                        </td>
                    </tr>
                </tbody>
                <?php endwhile; ?>
            </table>
            </div>
        </div>
    </div>
        <?php endif; ?>
    </div>