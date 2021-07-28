<div class="container">
<?php if(isset($product)): ?> 
    <div class="row justify-content-center align-items-center pt-3">
        <div class="col-auto">
    <div class="card mb-3 text-center" style="max-width: 33.75rem;">
        <div class="row no-gutters">
                <div class="col-md-4">
                     <?php if($product->imagen != null): ?>
                        <img width="100%" src="<?=base_url?>uploads/images/<?=$product->imagen?>" alt="producto"/>
                     <?php else: ?>
                        <img width="100%" src="<?=base_url?>assets/img/no-foto.png" alt="sin foto"/>
                     <?php endif; ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bolder text-center text-danger border-bottom"><?=$product->nombre?></h5>
                        <p class="card-title"><span class="font-weight-bolder">Precio:</span> $<?=$product->precio?> pesos | <?=$product->descripcion?></p>
                        <p class="card-text"><span class="font-weight-bolder">Producto en stock: </span><?=$product->stock?></p>
                        <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="btn btn-warning align-bottom" data-toggle="tooltip" data-placement="right" title="Comprar producto">
                            Comprar producto <i class="fa fa-shopping-cart fa-lg align-center" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
        </div>
    </div>
            </div>
</div>
<?php else: ?>
    <h2 class="text-center text-danger border-bottom py-3 title-mercado">Ese producto no se encuentra en el mercado</h2>
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
    
    <!-- Ofertas -->
				<section id="ofertas" class="row d-flex align-items-center pt-3 align-content-center">
        	<h2 class="col-12 text-center text-danger border-bottom py-3 title-mercado">¿Quieres enterarte de nuestras ofertas y promociones?</h2>
            <div class="col-5 ml-sm-4 ml-md-5">
                <h3 class="text-center text-info pb-3 d-none d-lg-flex">¡Tenemos ofertas y promociones TODOS LOS DÍAS!</h3>
                <h6 class="text-center d-none d-lg-flex">Solo tienes que llenar el siguiente formulario y podrás obtener correos semanales de nuestra plataforma</h6>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label align-middle"><i class="bi bi-person d-none d-lg-inline-flex align-middle font-weight-bolder" style="font-size: 1.3rem; color: #4682B4;"></i> Nombre</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label align-middle"><i class="bi bi-envelope d-none d-lg-inline-flex align-middle font-weight-bolder" style="font-size: 1.3rem; color: #4682B4;"></i> Correo electrónico</label>
                                <input type="email" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-check text-left my-3 d-none d-md-flex">
	                      <label class="form-check-label">
	                        <input class="form-check-input" type="checkbox">
	                        <span class="form-check-sign"></span>
	                        He leído y acepto los
	                        <a href="javascript:void(0)" class="text-success">Términos y Condiciones</a>.
	                      </label>
               		 </div>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-warning">
                            	<span class="d-none d-md-inline-flex text-dark font-weight-bold">Recibir ofertas y promociones </span>
                                <i class="bi bi-emoji-heart-eyes-fill d-none d-md-inline-flex align-middle text-dark" style="font-size: 1.2rem;"></i>
                                <span class="d-flex d-md-none text-dark font-weight-bold">Recibir correos</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 align-content-center pb-3">
                <img src="<?=base_url?>assets/img/ofertas/mujer-1.png" alt="Mujer" class="img-fluid">
            </div>
        </section>
        <!-- Fin de ofertas -->
    
    
</div>

