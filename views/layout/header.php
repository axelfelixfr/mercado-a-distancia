<?php ob_start(); ?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="favicon/x-icon" href="<?=base_url?>assets/img/logo/carrito-7.svg" />
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/bootstrap.min.css"/>
    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url?>assets/css/main.css"/>
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="<?=base_url?>assets/node_modules/bootstrap-icons/font/bootstrap-icons.css"/>
    <!-- Iconos de FontAwesowe -->
    <link rel="stylesheet" href="<?=base_url?>assets/css/font-awesome.min.css"/>
    <!-- Tarjeta de Crédito -->
    <link rel="stylesheet" href="<?=base_url?>assets/payment-card/css/payment.css"/>
    <title>Mercado a Distancia</title>
</head>
<body>
    <header>
		<div class="container-fluid bg-warning">
			<div class="row">
				<div class="col align-self-center">
                                    <a id="inicio" href="<?=base_url?>"><img class="img-fluid" src="<?=base_url?>assets/img/logo/logo-500.svg" alt="Mercado"></a>
				</div>
				<div class="row m-3">
				<div class="col-9 m-auto m-md-0">
					<div class="input-group mb-3">
					  <input type="text" class="form-group-search form-control" placeholder="Buscar productos" aria-label="Buscar productos en el mercado">
					  <div class="input-group-append">
					    <i class="btn btn-dark bi bi-search"></i>
					  </div>
					</div>
				</div>
				<div class="col-9">
                                        <!-- MENU -->
                                        <?php $categorias = Utils::showCategorias(); ?>
					<nav class="navbar navbar-expand-lg bg-warning">
					  <button class="navbar-toggler navbar-light border-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>


					<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav nav-tabs nav-fill">
						  <li class="nav-item">
						    <a class="nav-link btn btn-sm btn-outline-dark font-weight-bold barra-categ active" href="<?=base_url?>"><i class="bi bi-house"></i> Inicio</a>
						  </li>
                                                  <?php while ($cat = $categorias->fetch_object()): ?>
                                                  
						  <li class="nav-item">
						    <a class="nav-link btn btn-sm btn-outline-dark font-weight-bold barra-categ" href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
						  </li>
                                                  
                                                  <?php endwhile; ?>
						  
						</ul>
					</div>
				</nav>
				</div>
				
                                
				<div class="col-3 align-content-center d-none d-lg-flex">
                                        <?php $stats = Utils::statsCarrito(); ?>
                                        <a href="<?=base_url?>carrito/index" type="button" class="btn btn-outline-dark bi bi-cart4 m-0 p-1" style="font-size: 2rem;">
					   <span class="badge badge-light align-top" style="font-size: initial;"><?=$stats['count']?></span>
					   <span class="badge badge-warning align-bottom border-top border-bottom border-left border-right border-dark" style="font-size: initial;">$<?=$stats['total']?></span>
					</a>
				</div>

				<div class="col-3 align-content-center d-sm-flex d-lg-none">
                                        <?php $stats = Utils::statsCarrito(); ?>
                                        <a href="<?=base_url?>" type="button" class="btn btn-outline-dark bi bi-cart4 m-0 p-1" style="font-size: 2rem;">
					   <span class="badge badge-light align-top" style="font-size: initial;"><?=$stats['count']?></span>
					</a>
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
                                                            <img src="<?=base_url?>assets/img/carrousel/Milk-Carton-Mockup.png" alt="Carrousel 1" class="d-block img-fluid w-100">
							</div>

							<div class="carousel-item">
                                                            <img src="<?=base_url?>assets/img/carrousel/Soda-Cans.png" alt="Carrousel 2" class="d-block img-fluid w-100">
							</div>

							<div class="carousel-item">
                                                            <img src="<?=base_url?>assets/img/carrousel/Juice-Carton.png" alt="Carrousel 3" class="d-block img-fluid w-100">
							</div>

							<div class="carousel-item">
                                                            <img src="<?=base_url?>assets/img/carrousel/Bottles.png" alt="Carrousel 4" class="d-block img-fluid w-100">
							</div>

							<div class="carousel-item">
                                                            <img src="<?=base_url?>assets/img/carrousel/Coffee-Cups.png" alt="Carrousel 5" class="d-block img-fluid w-100">
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

    
    
<?php ob_end_flush(); ?>