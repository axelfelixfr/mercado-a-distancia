<!-- Page Content -->
       
<div class="container-fluid">
        <!-- Parallax -->
        <h2 class="text-center text-danger border-bottom py-3 title-mercado">Conoce de cerca nuestros productos</h2>
        <section class="portada border-bottom border-top border-right border-left" id="portada">
                <div class="colum-p">
                        <div class="foto izq lightbox">
                                <div class="overlay">
                                        <i class="fa fa-plus text-white" aria-hidden="true"></i>
                                </div>
                        </div>

                        <div class="texto">
                            <h4 class="font-weight-bold text-warning text-center m-0 p-0">Productos 100% mexicanos</h4>
                            <h6 class="text-justify pt-2">Date unos mínutos y ve los distintos tipos de carne blanca y roja (como la de res), las cuales encontraras aquí.</h6>
                        </div>

                        <div class="foto-full izq lightbox">
                                <div class="overlay">
                                        <i class="fa fa-plus text-white" aria-hidden="true"></i>
                                </div>
                        </div>
                </div>
                <div class="colum-p">
                        <div class="foto-full der lightbox">
                                <div class="overlay">
                                        <i class="fa fa-plus text-white" aria-hidden="true"></i>
                                </div>
                        </div>

                        <div class="foto der lightbox">
                                <div class="overlay">
                                        <i class="fa fa-plus text-white" aria-hidden="true"></i>
                                </div>
                        </div>

                        <div class="texto">
                                <h4 class="font-weight-bold text-success text-center m-0 p-0">Productos frescos</h4>
                                <h6 class="text-justify pt-2">Debemos orientar nuestra alimentación hacia un consumo mayor de verduras, aquí encontrarás una gran variedad.</h6>
                        </div>
                </div>
        </section> <!-- Fin de Parallax -->  

<!-- Productos -->
        <h2 class="text-center text-danger border-bottom py-3 title-mercado">Algunos de los productos que se encuentran en nuestros mercados</h2>
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
                          <h5 class="card-title text-center text-primary"><?=$product->nombre?></h5>
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
				<!-- Fin de productos -->           
                                
        <!-- Nosotros -->		
        <div class="row conoce-nosot" id="nosotros">
                <div class="col text-center pt-5">
                    <div class="col-12 col-lg text-center col-auto pb-5">
                        <img class="img-fluid" src="assets/img/logo/logo-blanco-500.svg" alt="Mercado">
					</div>
                    <h2 class="title-mercado">Conoce un poco de nosotros, ¿Porque "<span class="text-uppercase font-weight-bold" style="color: #000; font-size: larger">Mercado <span class="text-uppercase font-weight-bold text-warning align-text-top" style="font-size: smaller;">a Distancia</span></span>"?</h2>
                    <h5 class="description">
                    Al estar en una crisis como en la que nos enfrentamos en la actualidad donde nos obliga al confinamiento y a tener el menor contacto posible con el exterior, se hace un reto adaptarse al nuevo cambio para aquellos negocios donde viven al día dependiendo de sus ventas, las grandes compañías tienen el presupuesto y el personal necesario para reestructurarse pero aquellos que son pequeños comerciantes se están quedando atrás, especialmente los que se encuentran en mercados pues ahí menos la gente se arriesga a ir, la solución se la ofrece “Mercado a Distancia”.
                    </h5>
                    <h5 class="description d-none d-md-flex">
                    Donde básicamente su papel es hacer la compra del mercado (entre otras cosas) que puede llegar a ser agotadora si es que no esta tan cerca de ti o simplemente por seguridad por la pandemia que atravesamos ahora. 
                    </h5>
                    <h5 class="description d-none d-md-flex">
                    Los proveedores de dichos productos dependerán del área donde se encuentre cada cliente, aunque la calidad se promete ser la misma sin importar la zona o distribuidor. El servicio a domicilio que ofrecemos es totalmente dependiente de nosotros, nos encargamos de llevar los productos con la más alta higiene y eficacia.
                    </h5>
                </div>
            </div>

            <div class="nosotros pb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="text-info" style="margin-left: 41%;">
                                <i class="bi bi-chat-right-text-fill text-info" style="font-size: 4em;"></i>
                            </div>
                            <h4 class="text-center mb-5 mb-md-2">Atendemos tus dudas</h4>
                            <p class="text-center d-none d-md-flex">Atendemos rápidamente cualquier consulta que tengas vía chat. No estás sólo, sino que siempre estamos atento a tus inquietudes.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div style="margin-left: 41%;">
                            	<i class="bi bi-shield-fill-check text-success" style="font-size: 4em;"></i>
                            </div>
                            <h4 class="text-center mb-5 mb-md-2">Pago seguro</h4>
                            <p class="text-center d-none d-md-flex">Todo pedido que realices será confirmado a través de una llamada. Si no confías en los pagos en línea puedes pagar contrareembolso el valor acordado.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="text-danger" style="margin-left: 41%;">
                                <i class="bi bi-file-earmark-lock-fill text-danger" style="font-size: 4em;"></i>
                            </div>
                            <h4 class="text-center">Información privada</h4>
                            <p class="text-center d-none d-md-flex">Los pedidos que realices sólo los conocerás tú a través de tu panel de usuario. Nadie más tiene acceso a esta información.</p>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <!-- Fin de Nosotros -->
<?php if(!isset($_SESSION['identity'])):?>
      
      <?php else: ?>
      </div>
       <?php endif; ?>
    