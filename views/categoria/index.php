<div class="container-fluid">
<h2 class="text-center text-danger border-bottom py-3 title-mercado">Gestionar categorias</h2>
<div class="table-responsive">
    <div class="d-flex justify-content-center">
    <div class="col-sm-12 col-md-8">
<table class="table table-sm text-center">
    <thead>
         <tr>
             <th scope="col" class="bg-dark text-warning">ID</th>
             <th scope="col" class="bg-dark text-warning">Nombre</th>     
        </tr>
    </thead>
    <?php while ($cat = $categorias->fetch_object()): ?>
    <tbody>
        <tr>
            <td scope="row"><?= $cat->id; ?></td>
            <td><?= $cat->nombre; ?></td>     
        </tr>
    </tbody>
    <?php endwhile; ?>  
</table>
        </div>
        </div>
</div>
<div class="text-center">
    <a href="<?=base_url?>categoria/crear" class="btn btn-outline-warning font-weight-bold text-dark" type="button">Crear nueva categoria</a>
</div>
</div>
