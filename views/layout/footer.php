<?php ob_start(); ?> 
</div>
    <!-- /#page-content-wrapper -->
  </div>
	<!-- Footer -->
	<footer class="bg-warning">
    	<div class="section contact bg-dark">
			<div class="container">
				<div class="py-5 row justify-content-center align-items-center">
					<div class="col-auto mb-4 col mb-md-0">
						<p class="mt-3 mb-0 text-white m-sm-0">¿Necesitas ayuda? Estamos aquí mismo</p>
					</div>
					<div class="col-auto col">
						<a href="#" class="boton-login btn btn-warning font-weight-bold">Contáctanos</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">

			<div class="py-3 mb-0 row justify-content-md-between align-items-center">
		
				<div class="order-1 my-4 text-center col-md-4 text-md-left order-md-0 my-md-0">
					<p class="mb-0 text-white"><small class="font-weight-bold">Desarrollado por Axel Félix Flores Ramírez &copy; 2021</small></p>
				</div>

				<div class="col-md-4">
					<ul class="nav justify-content-center font-weight-bold">
						<li class="nav-item item-nav"><a href="#ofertas" class="text-white nav-link">Ofertas</a></li>
						<li class="nav-item item-nav"><a href="#nosotros" class="text-white nav-link">Nosotros</a></li>
						<li class="nav-item item-nav"><a href="#contacto" class="text-white nav-link">Contacto</a></li>
					</ul>
				</div>
				
				<div class="order-2 text-center col-md-4 text-md-right order-md-0">
					<a href="#" class="mr-1 text-dark text-decoration-none">
						<i class="bi bi-facebook"></i>
					</a>
					<a href="#" class="mr-1 text-dark text-decoration-none">
						<i class="bi bi-twitter"></i>
					</a>
					<a href="#" class="mr-1 text-dark text-decoration-none">
						<i class="bi bi-instagram"></i>
					</a>
					<a href="#" class="mr-1 text-dark text-decoration-none">
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
	
        <script src="<?=base_url?>assets/js/jquery-3.5.1.min.js"></script>
        <script src="<?=base_url?>assets/js/popper.min.js"></script>
        <script src="<?=base_url?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url?>assets/js/formulario.js"></script>
        <script src="<?=base_url?>assets/js/bgParallax.js"></script>
        <script src="<?=base_url?>assets/js/lightbox.js"></script>
        <script src="<?=base_url?>assets/payment-card/js/angular.min.js"></script>
        <script src="<?=base_url?>assets/payment-card/js/jquery-ui.min.js"></script>
        <script src="<?=base_url?>assets/payment-card/js/payment.js"></script>
	<script>
            $("#menu-toggle").click(function(e) {
              e.preventDefault();
              $("#wrapper").toggleClass("toggled");
            });
        </script>
</body>
</html>

<?php ob_end_flush(); ?>
