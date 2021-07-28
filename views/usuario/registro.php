
<div class="container">
  <div class="row">
    <div class="pb-3 mx-auto container-fluid">
        <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
<div class="mt-2 align-middle alert alert-success" role="alert"><i class="pr-2 align-middle bi bi-check-square-fill" style="font-size: 1.3em;"></i>
    Tu cuenta ya fue creada, ¡¡Ya puedes empezar a hacer tu mandado!!</div>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
<div class="mt-2 align-middle alert alert-danger" role="alert"><i class="pr-2 align-middle bi bi-x-square-fill" style="font-size: 1.3em;"></i>
    Hubo un error, checa bien los datos que introduciste</div>
<?php endif; ?>
        
    <section class="form-registro" id="form-registro">
    <div class="datos parallax">     
    <div class="overlay"></div>
        <div class="container">
            <div class="blur">
                <h3>¡Crea tu cuenta ahora mismo!</h3>
                <p>Solo necesitas un correo electrónico</p>
            </div>
        </div>
     </div>  
            
<?php Utils::deleteSession('register');?>
<div class="formulario col">
    <form action="<?=base_url?>usuario/save" method="POST" class="formulario-contacto" name="formulario_contacto">
        <p class="text-danger font-weight-bold">Favor de no incluir acentos en los campos: nombre y apellidos</p>
        <div>
        <div class="input-group">
            <input id="nombre" type="text" name="nombre" pattern="[A-Z a-z]+" maxlength="20" autocomplete="new-text"/>
            <label class="label" for="nombre">Nombre</label>
        </div>
        
        <div class="input-group">
            <input id="apellidos" type="text" name="apellidos" pattern="[A-Z a-z]+" minlength="7" autocomplete="new-text"/>
            <label class="label" for="apellidos">Apellidos</label>
        </div>
        
        <div class="input-group">
            <input id="email" type="email" name="email" autocomplete="new-text"/>
            <label class="label" for="email">Correo Electrónico</label>
        </div>
        
        <div class="input-group">     
            <input id="password" type="password" name="password" minlength="7" autocomplete="new-password"/>
            <label class="label" for="password">Contraseña</label>
        </div>
        
        
       </div>
    
    <div class="text-center">
        <input id="registro" class="btn btn-outline-warning font-weight-bold text-dark" type="submit" value="Crear mi cuenta">
    </div>
        </form>
   </div>
   </section>
      </div>
   </div>
</div>
