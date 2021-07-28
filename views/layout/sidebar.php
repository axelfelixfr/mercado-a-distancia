<?php ob_start(); ?> 
<!-- Sidebar -->
		<div class="d-flex" id="wrapper">
    <div class="bg-light border-right barra-nav" id="sidebar-wrapper">
      <?php if(!isset($_SESSION['identity'])):?>
      <div class="sidebar-heading text-center bg-dark text-warning font-weight-bold">Inicio de Sesión</div>
      <div class="list-group list-group-flush">
      	<form action="<?=base_url?>usuario/login" method="POST" class="px-4 py-3">
	    <div class="form-group">
                <label for="email" class="font-weight-bold">Correo Electrónico</label>
              <input type="email" name="email" class="form-control formulario-side" placeholder="email@example.com" autocomplete="new-text">
	    </div>
	    <div class="form-group">
	      <label for="password" class="font-weight-bold">Contraseña</label>
              <input type="password" name="password" class="form-control formulario-side" placeholder="password" autocomplete="new-password">
	    </div>
	    <div class="form-group">
	      <div class="form-check">
	        <input type="checkbox" class="form-check-input" id="formCheck">
	        <label class="form-check-label" for="formCheck">
	          Recordarme
	        </label>
	      </div>
	    </div>
            <input id="entrar" type="submit" value="Iniciar Sesión" name="enviar" class="boton-login btn btn-outline-warning font-weight-bold text-dark">
	  </form>
          <?php else: ?>
          <div class="sidebar-heading text-center bg-dark text-warning font-weight-bold" style="font-size: 1.1rem"><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></div>
          <?php endif; ?>
	  
          
          <?php if(isset($_SESSION['admin'])): ?>
	  <a class="dropdown-item" href="<?=base_url?>categoria/index"><i class="bi bi-clipboard-data" style="font-size: 1.3em;"></i> Gestionar categorías</a>
	  <a class="dropdown-item" href="<?=base_url?>producto/gestion"><i class="bi bi-shop" style="font-size: 1.3em;"></i> Gestionar productos</a>
	  <a class="dropdown-item" href="<?=base_url?>pedido/gestion"><i class="bi bi-basket" style="font-size: 1.3em;"></i> Gestionar mandados</a>
          <?php endif; ?>
                                
          <?php if(isset($_SESSION['identity'])): ?>
	  <a class="dropdown-item" href="<?=base_url?>pedido/mis_pedidos"><i class="bi bi-bag-plus" style="font-size: 1.3em;"></i> Mis mandados</a>
	  <a class="dropdown-item text-danger font-weight-bold" href="<?=base_url?>usuario/logout"><i class="bi bi-door-open" style="font-size: 1.3em;"></i> Cerrar sesión</a>
          
          <?php else: ?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=base_url?>usuario/registro"><span class="text-decoration-none text-muted">¿Nuevo en el mercado?</span>
	  <p class="p-0 m-0"><i class="bi bi-person-plus-fill" style="font-size: 1.3em;"></i> Haz tu cuenta aquí</p></a>
          <?php endif; ?>
          <div class="border-top mt-3">
      	<div class="sidebar-heading text-center bg-dark text-warning font-weight-bold">Aprende nuevas recetas</div>
      	<a href="https://www.kiwilimon.com/receta/desayunos/desayunos-mexicanos/tamales-oaxaquenos" target="_blank">
            <img height="502.6px" src="<?=base_url?>assets/img/ofertas/anuncio.jpg" alt="Anunciate">
      	</a>
      </div>
      </div>
      
      <?php if(!isset($_SESSION['identity'])):?>
      </div>
      <?php else: ?>
      
       <?php endif; ?>
    <!-- /#sidebar-wrapper -->
<?php ob_end_flush(); ?>
