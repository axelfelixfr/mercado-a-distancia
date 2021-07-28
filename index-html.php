<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.0/css/bootstrap.min.css"/>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="assets/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Mercado a Distancia</title>
</head>
<body>
	<header>
		<div class="container-fluid bg-warning">
			<div class="row">
				<div class="col align-self-center">
                                    <a id="inicio" href="#"><img class="img-fluid" src="assets/img/logo/logo.png" alt="Mercado"></a>
				</div>
				<div class="row m-3">
				<div class="col-9 m-auto m-md-0">
					<div class="input-group mb-3">
					  <input type="text" class="form-control" placeholder="Buscar productos" aria-label="Buscar productos en el mercado">
					  <div class="input-group-append">
					    <i class="btn btn-dark bi bi-search"></i>
					  </div>
					</div>
				</div>
				<div class="col-9">
					<nav class="navbar navbar-expand-lg bg-warning">
					  <button class="navbar-toggler navbar-light border-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>


					<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav nav-tabs nav-fill">
						  <li class="nav-item">
						    <a class="nav-link btn btn-sm btn-outline-dark font-weight-bold barra-categ active" href="#"><i class="bi bi-house"></i> Inicio</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link btn btn-sm btn-outline-dark font-weight-bold barra-categ" href="#">Verduras</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link btn btn-sm btn-outline-dark font-weight-bold barra-categ" href="#">Frutas</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link btn btn-sm btn-outline-dark font-weight-bold barra-categ" href="#">Carnes</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link btn btn-sm btn-outline-dark font-weight-bold barra-categ" href="#">Pollo</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link btn btn-sm btn-outline-dark font-weight-bold barra-categ" href="#">Abarrotes</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link btn btn-sm btn-outline-dark font-weight-bold barra-categ" href="#">Pan</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link btn btn-sm btn-outline-dark font-weight-bold barra-categ" href="#">Leguminosas</a>
						  </li>
						</ul>
					</div>
				</nav>
				</div>
				
				<div class="col-3 align-content-center">
					<button type="button" class="btn btn-outline-dark bi bi-cart4 m-0 p-1" style="font-size: 1.7rem;">
					   <span class="badge badge-light align-top" style="font-size: medium;">0</span>
					</button>
				</div>				
			</div>	
			</div>
		</div>
	</header>

	<section class="main">
		<div class="container-fluid">
			<!-- Carousel -->
			<section class="row">
				<div class="col-12 pr-0 pl-0">
					<div id="carouselDestacado" class="carousel slide" data-ride="carousel" data-interval="5000">

						<ol class="carousel-indicators">
							<li data-target="#carouselDestacado" data-slide-to="0" class="active"></li>
							<li data-target="#carouselDestacado" data-slide-to="1"></li>
							<li data-target="#carouselDestacado" data-slide-to="2"></li>
							<li data-target="#carouselDestacado" data-slide-to="3"></li>
							<li data-target="#carouselDestacado" data-slide-to="4"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="carousel-item active">
                                                            <img src="assets/img/carrousel/Milk-Carton-Mockup.png" alt="Carrousel 1" class="d-block img-fluid w-100">
							</div>

							<div class="carousel-item">
                                                            <img src="assets/img/carrousel/Soda-Cans.png" alt="Carrousel 2" class="d-block img-fluid w-100">
							</div>

							<div class="carousel-item">
                                                            <img src="assets/img/carrousel/Juice-Carton.png" alt="Carrousel 3" class="d-block img-fluid w-100">
							</div>

							<div class="carousel-item">
                                                            <img src="assets/img/carrousel/Bottles.png" alt="Carrousel 4" class="d-block img-fluid w-100">
							</div>

							<div class="carousel-item">
                                                            <img src="assets/img/carrousel/Coffee-Cups.png" alt="Carrousel 5" class="d-block img-fluid w-100">
							</div>
						</div>

						<a href="#carouselDestacado" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
							<!-- La clase "sr-only" es solo para dispositivos de lectura -->
							<span class="sr-only">Anterior</span>
						</a>

						<a href="#carouselDestacado" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon"></span>
							<!-- La clase "sr-only" es solo para dispositivos de lectura -->
							<span class="sr-only">Siguiente</span>
						</a>
					</div>
				</div>
			</section>
			<!-- Fin de Carousel -->
		  </div>
		 <!-- Sidebar -->
		<div class="d-flex" id="wrapper">
    <div class="bg-light border-right barra-nav" id="sidebar-wrapper">
      <div class="sidebar-heading text-center bg-dark text-warning font-weight-bold">Inicio de Sesión</div>
      <div class="list-group list-group-flush">
      	<form class="px-4 py-3">
	    <div class="form-group">
	      <label for="exampleFormEmail">Correo Electrónico</label>
	      <input type="email" class="form-control formulario-side" id="exampleFormEmail" placeholder="email@example.com">
	    </div>
	    <div class="form-group">
	      <label for="exampleFormPassword">Contraseña</label>
	      <input type="password" class="form-control formulario-side" id="exampleFormPassword" placeholder="password">
	    </div>
	    <div class="form-group">
	      <div class="form-check">
	        <input type="checkbox" class="form-check-input" id="formCheck">
	        <label class="form-check-label" for="formCheck">
	          Recordarme
	        </label>
	      </div>
	    </div>
	    <button type="submit" class="btn btn-outline-warning font-weight-bold text-dark">Iniciar Sesión</button>
	  </form>
	  <div class="dropdown-divider"></div>
	  <a class="dropdown-item" href="#"><span class="text-decoration-none text-muted">¿Nuevo en el mercado?</span>
	  <p class="p-0 m-0"><i class="bi bi-person-plus-fill" style="font-size: 1.3em;"></i> Haz tu cuenta aquí</p></a>
	  <a class="dropdown-item" href="#"><i class="bi bi-clipboard-data" style="font-size: 1.3em;"></i> Gestionar categorias</a>
	  <a class="dropdown-item" href="#"><i class="bi bi-shop" style="font-size: 1.3em;"></i> Gestionar productos</a>
	  <a class="dropdown-item" href="#"><i class="bi bi-basket" style="font-size: 1.3em;"></i> Gestionar mandados</a>
	  <a class="dropdown-item" href="#"><i class="bi bi-bag-plus" style="font-size: 1.3em;"></i> Mis mandados</a>
	  <a class="dropdown-item text-danger font-weight-bold" href="#"><i class="bi bi-door-open" style="font-size: 1.3em;"></i> Cerrar sesión</a>
        <!-- <a href="#" class="list-group-item list-group-item-action bg-light"><span class="text-decoration-none text-muted">¿Nuevo en el mercado?</span> Haz tu cuenta aquí</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Gestionar categorias</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Gestionar productos</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Gestionar mandados</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Mis mandados</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Cerrar Sesión</a> -->
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-outline-warning font-weight-bold text-dark" id="menu-toggle">Menú de usuario</button>

        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div> -->
      </nav>

      <div class="container-fluid">
        <h2 class="text-center text-danger border-bottom py-3 title-mercado">Algunos de los productos que se encuentran en nuestros mercados</h2>
        <!-- Productos -->
        <div class="row row-cols-1 row-cols-md-3 pt-3">
				  <div class="col mb-4 col-lg-3">
				    <div class="card h-100">
                                        <img src="assets/img/products/achicoria.png" class="card-img-top" alt="Achicoria">
				      <div class="card-body">
				        <h5 class="card-title text-center">Achicoria</h5>
				        <h6 class="card-text text-center text-muted">$20 pesos <strike>$25.00</strike> | 1 Kg</h6>
				      </div>
				      <button class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Comprar producto">
                                    <img src="assets/node_modules/material-design-icons/action/1x_web/ic_add_shopping_cart_black_24dp.png" alt="carrito"/>
	                  </button>
				    </div>
				  </div>
				  <div class="col mb-4 col-lg-3">
				    <div class="card h-100">
                                        <img src="assets/img/products/brocoli.png" class="card-img-top" alt="Brocoli">
				      <div class="card-body">
				        <h5 class="card-title text-center">Brocoli</h5>
				        <h6 class="card-text text-center text-muted">$25 pesos <strike>$30.00</strike> | 1 Kg</h6>
				      </div>
				      <button class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Comprar producto">
		                    <img src="assets/node_modules/material-design-icons/action/1x_web/ic_add_shopping_cart_black_24dp.png" alt="carrito"/>
	                  </button>
				    </div>
				  </div>
				  <div class="col mb-4 col-lg-3">
				    <div class="card h-100">
                                        <img src="assets/img/products/pimiento_a.png" class="card-img-top" alt="Pimiento Amarillo">
				      <div class="card-body">
				        <h5 class="card-title text-center">Pimiento Amarillo</h5>
				        <h6 class="card-text text-center text-muted">$50 pesos <strike>$60.00</strike> | 1 Kg</h6>
				      </div>
				      <button class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Comprar producto">
		                    <img src="assets/node_modules/material-design-icons/action/1x_web/ic_add_shopping_cart_black_24dp.png" alt="carrito"/>
	                  </button>
				    </div>
				  </div>
				  <div class="col mb-4 col-lg-3">
				    <div class="card h-100">
                                        <img src="assets/img/products/jitomate-1.png" class="card-img-top" alt="Jitomate">
				      <div class="card-body">
				        <h5 class="card-title text-center">Jitomate</h5>
				        <h6 class="card-text text-center text-muted">$35 pesos <strike>$40.00</strike> | 1 Kg</h6>
				      </div>
				      <button class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Comprar producto">
		                    <img src="assets/node_modules/material-design-icons/action/1x_web/ic_add_shopping_cart_black_24dp.png" alt="carrito"/>
	                  </button>
				    </div>
				  </div>
				  <div class="col mb-4 col-lg-3">
				    <div class="card h-100">
                                        <img src="assets/img/products/zanahoria-1.png" class="card-img-top" alt="Zanahoria">
				      <div class="card-body">
				        <h5 class="card-title text-center">Zanahoria</h5>
				        <h6 class="card-text text-center text-muted">$40 pesos <strike>$50.00</strike> | 1 Kg</h6>
				      </div>
				      <button class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Comprar producto">
		                    <img src="assets/node_modules/material-design-icons/action/1x_web/ic_add_shopping_cart_black_24dp.png" alt="carrito"/>
	                  </button>
				    </div>
				  </div>
				  <div class="col mb-4 col-lg-3">
				    <div class="card h-100">
                                        <img src="assets/img/products/pimiento_r.png" class="card-img-top" alt="Pimiento Rojo">
				      <div class="card-body">
				        <h5 class="card-title text-center">Pimiento Rojo</h5>
				        <h6 class="card-text text-center text-muted">$55 pesos <strike>$70.00</strike> | 1 Kg</h6>
				      </div>
				      <button class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Comprar producto">
		                    <img src="assets/node_modules/material-design-icons/action/1x_web/ic_add_shopping_cart_black_24dp.png" alt="carrito"/>
	                  </button>
				    </div>
				  </div>

				</div>
				<!-- Fin de productos -->

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
                                <label class="control-label"><i class="bi bi-person d-none d-lg-inline-flex align-middle" style="font-size: 1.3rem; color: #4682B4;"></i> Nombre</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label"><i class="bi bi-mailbox2 d-none d-lg-inline-flex align-middle" style="font-size: 1.3rem; color: #4682B4;"></i> Correo electrónico</label>
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
                <img src="assets/img/ofertas/mujer-1.png" alt="Mujer" class="img-fluid">
            </div>
        </section>
        <!-- Fin de ofertas -->

        <div class="row conoce-nosot" id="nosotros">
                <div class="col text-center pt-3 border-top">
                    <div class="col-12 col-lg text-center col-auto pb-5">
                        <img class="img-fluid" src="assets/img/logo/logo-fondo-blanco.png" alt="Mercado">
					</div>
                    <h2 class="title-mercado">Conoce un poco de nosotros, ¿Porque "<span class="text-uppercase" style="color: #000;">Mercado <span class="text-uppercase text-warning">a Distancia</span></span>"?</h2>
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
    </div>
    <!-- /#page-content-wrapper -->

  </div>


	<!-- Footer -->
	<footer class="bg-warning">
    	<div class="section contact bg-dark">
			<div class="container">
				<div class="row py-5 justify-content-center align-items-center">
					<div class="col col-auto mb-4 mb-md-0">
						<p class="text-white mb-0 mt-3 m-sm-0">¿Necesitas ayuda? Estamos aquí mismo</p>
					</div>
					<div class="col col-auto">
						<a href="#" class="btn btn-warning">Contáctanos</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">

			<div class="row justify-content-md-between align-items-center py-3 mb-0">
		
				<div class="col-md-4 text-center text-md-left order-md-0 order-1 my-4 my-md-0">
					<p class="text-white mb-0"><small class="font-weight-bold">Desarrollado por Axel Félix Flores Ramírez &copy; 2021</small></p>
				</div>

				<div class="col-md-4">
					<ul class="nav justify-content-center font-weight-bold">
						<li class="nav-item item-nav"><a href="#ofertas" class="nav-link text-white">Ofertas</a></li>
						<li class="nav-item item-nav"><a href="#nosotros" class="nav-link text-white">Nosotros</a></li>
						<li class="nav-item item-nav"><a href="#contacto" class="nav-link text-white">Contacto</a></li>
					</ul>
				</div>
				
				<div class="col-md-4 text-center text-md-right order-2 order-md-0">
					<a href="#" class="text-dark mr-1 text-decoration-none">
						<i class="bi bi-facebook"></i>
					</a>
					<a href="#" class="text-dark mr-1 text-decoration-none">
						<i class="bi bi-twitter"></i>
					</a>
					<a href="#" class="text-dark mr-1 text-decoration-none">
						<i class="bi bi-instagram"></i>
					</a>
					<a href="#" class="text-dark mr-1 text-decoration-none">
						<i class="bi bi-youtube"></i>
					</a>
					<a href="#" class="text-dark text-decoration-none">
						<i class="bi bi-whatsapp"></i>
					</a>
				</div>
			
			</div>
		</div>
	</footer>
	<!-- Fin del footer -->
	
        <script src="assets/jquery/jquery-3.5.1.min.js"></script>
        <script src="assets/jquery/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>        
	<script>
            $("#menu-toggle").click(function(e) {
              e.preventDefault();
              $("#wrapper").toggleClass("toggled");
            });
        </script>
</body>
</html>
