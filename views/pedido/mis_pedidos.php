<div class="container-fluid">
<?php if(isset($gestion)): ?>
   <h2 class="text-center text-danger border-bottom py-3 title-mercado">Gestionar los mandados del mercado</h2> 
<?php else: ?>
   <h2 class="text-center text-danger border-bottom py-3 title-mercado">Mis mandados</h2>
<?php endif;?>
<div class="table-responsive">
    <div class="d-flex justify-content-center">
    <div class="col-sm-12 col-md-8">
<table class="table table-sm text-center">
    <thead>
    <tr>
        <th scope="col" class="bg-dark text-warning">N° Pedido</th>
        <th scope="col" class="bg-dark text-warning">Total del pedido</th>
        <th scope="col" class="bg-dark text-warning">Fecha</th>
        <th scope="col" class="bg-dark text-warning">Estado</th>
    </tr>
    </thead>
    <?php while ($ped = $pedidos->fetch_object()): ?>
    <tbody>
    <tr>
        <td> 
            <a scope="row" class="text-decoration-none" href="<?=base_url?>pedido/detalle&id=<?= $ped->id ?>"><?= $ped->id ?></a>
        </td>
        <td>
            $<?= $ped->costo_total ?>
        </td>
        <td>
            <?= $ped->fecha ?>
        </td>
        <td>
            <?= Utils::showStatus($ped->status) ?>
        </td>
    </tr>
    </tbody>
    <?php endwhile; ?>
</table>
      </div>
     </div>
   </div>
</div>