<?php if(isset($categoria)): ?> 
    <div class="container-fluid">
        <section class="categoria-titulo" id="categoria-titulo">
        <div class="datos-c parallax">
            <div class="overlay-c"></div>
            <div class="container-c">
                <div class="blur-c">
                    <h3><?= $categoria->nombre ?></h3>
                </div>
            </div>  
        </div>
        </section>
    
    <?php if($productos->num_rows == 0): ?>
    <h2 class="text-center text-danger border-bottom py-3 title-mercado">No hay productos en el mercado para mostrar</h2>
    <?php else: ?>
      <div class="row row-cols-1 row-cols-md-3 pt-3">
        <?php while ($product = $productos->fetch_object()): ?>
            <div class="col mb-4 col-lg-3">
                <a class="text-decoration-none" href="<?=base_url?>producto/ver&id=<?=$product->id?>">
              <div class="card h-100">
                <div class="card-body" style="height: 15.625rem">
                    <?php if($product->imagen != null): ?>
                    <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" width="50%" class="card-img-top rounded mx-auto d-block" style="max-height: 15.625rem" alt="producto"/>
                    <?php else: ?>
                    <img src="<?=base_url?>assets/img/no-foto.png" class="card-img-top" alt="sin foto"/>
                  <?php endif; ?>
                </div>
                <div class="card-body align-bottom">
                  <h5 class="card-title text-center"><?=$product->nombre?></h5>
                  <h6 class="card-text text-center text-muted">$<?=$product->precio?> pesitos | <?=$product->descripcion?></h6>
                </div>
                  <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="btn btn-warning align-bottom" data-toggle="tooltip" data-placement="right" title="Comprar producto">
                  <i class="fa fa-shopping-cart fa-lg align-center" aria-hidden="true"></i>
                </a>
              </div>
              </a>
            </div>
        <?php endwhile; ?>
     </div>
    <?php endif; ?>
<?php else: ?>
    <h2 class="text-center text-danger border-bottom py-3 title-mercado">Esa categoría no se encuentra en el mercado</h2>
    <div class="col-sm-10 col-sm-offset-1 col-lg-12 text-center">
          <div class="four_zero_four_bg">
            <h1 class="text-center">:v</h1>
          </div>

          <div class="contant_box_404">
          <h3>Pareces estar perdido, no se encuentra la página que buscas</h3>

          <p>Mejor regresa a la página principal de Mercado a Distancia&reg;</p>

          <a href="<?=base_url?>" class="boton-login btn btn-outline-warning font-weight-bold text-dark">Regresar</a>
        </div>
          </div>
<?php endif; ?>
    </div>
