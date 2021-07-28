<div class="container-fluid">
    <h2 class="text-center text-danger border-bottom py-3 title-mercado">Gestionar productos</h2>
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
    <div class="alert alert-success align-middle" role="alert"><i class="bi bi-check-square-fill align-middle pr-2" style="font-size: 1.3em;"></i>
    El producto ya se ha puesto en el mercado</div>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>
    <div class="alert alert-warning align-middle" role="alert"><i class="bi bi-exclamation-triangle-fill align-middle pr-2" style="font-size: 1.3em;"></i>
    El producto NO se ha puesto en el mercado</div>
<?php endif;?>
<?php Utils::deleteSession('producto');?>
    
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
    <div class="alert alert-success align-middle" role="alert"><i class="bi bi-check-square-fill align-middle pr-2" style="font-size: 1.3em;"></i>
    El producto ya se ha borrado del mercado</div>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>
    <div class="alert alert-danger align-middle" role="alert"><i class="bi bi-x-square-fill align-middle pr-2" style="font-size: 1.3em;"></i>
    El producto NO fue borrado del mercado</div>
<?php endif;?>
    
<?php Utils::deleteSession('delete');?>

<div class="table-responsive">
    <div class="d-flex justify-content-center">
    <div class="col-sm-12 col-md-8">
<table class="table table-sm text-center">
    <thead>
         <tr>
            <th scope="col" class="bg-dark text-warning">ID</th>
            <th scope="col" class="bg-dark text-warning">Nombre</th> 
            <th scope="col" class="bg-dark text-warning">Descripcion</th>
            <th scope="col" class="bg-dark text-warning">Precio</th> 
            <th scope="col" class="bg-dark text-warning">Unidades</th>
            <th scope="col" class="bg-dark text-warning">Oferta</th>
            <th scope="col" class="bg-dark text-warning">Fecha</th> 
            <th scope="col" class="bg-dark text-warning">Acciones</th>
        </tr>
    </thead>
    <?php while ($pro = $productos->fetch_object()): ?>
    <tbody>
        <tr>
            <td scope="row"><?= $pro->id; ?></td>
            <td><?= $pro->nombre; ?></td>  
            <td><?= $pro->descripcion; ?></td>
            <td>$<?= $pro->precio; ?></td>
            <td><?= $pro->stock; ?></td>
            <td><?= $pro->oferta; ?></td>
            <td style="width: 7.5rem"><?= $pro->fecha; ?></td>
            <td>
                <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>"><i class="bi bi-pencil text-info" style="font-size: 1.3em;"></i></a>
                <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>"><i class="bi bi-trash text-danger" style="font-size: 1.3em;"></i></a>
            </td>
        </tr>
    </tbody>
    <?php endwhile; ?>
</table>
    </div>
    </div>
</div>
    <div class="text-center pb-5">
        <a href="<?=base_url?>producto/crear" class="btn btn-outline-warning font-weight-bold text-dark" type="button">Crear nuevo producto</a>
    </div>
</div>

