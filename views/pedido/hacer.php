<div class="container-fluid">
<section class="form-registro" id="form-registro">
<?php if(isset($_SESSION['identity'])):?>
    <div class="datos parallax">
            <div class="overlay"></div>
            <div class="container">
                <div class="blur">
                    <h3>Detalles para realizar mi mandado</h3>
                    <p>Recuerda no equivocarse en la dirección, ya que no hay correcciones</p>
                </div>
            </div>  
        </div>

    <div class="formulario col">
    <form id action="<?=base_url?>pedido/add" method="POST" class="formulario-contacto" name="formulario_contacto">
        <p class="text-danger font-weight-bold text-center">Recuerda que por ahora solo enviamos pedidos a la CDMX y al Estado de México</p>
        <div>
            <div class="input-group">
                <textarea name="direccion"></textarea>
                <label class="label" for="direccion">Dirección completa (calle, manzana, lote, etc)</label>          
            </div>
              
            <div class="input-group">
                <input type="text" name="colonia" pattern="[A-Z a-z]+" maxlength="30" autocomplete="new-text"/>
                <label class="label" for="colonia">Colonia</label>
            </div>
            
            <div class="input-group">
                <input type="number" min="1" name="codigo_postal" autocomplete="new-number"/>
                <label class="label" for="codigo_postal">Código Postal</label>           
            </div>
            
            <div class="text-center">
                <input class="fa  boton-login btn btn-outline-warning btn-lg font-weight-bold text-dark align-middle" id="registro" type="submit" value="Confirmar mi mandado &#xf290">
                <a href="<?=base_url?>carrito/index" class="fa  boton-login btn btn-outline-success btn-lg font-weight-bold align-middle">Regresar a ver mi carrito &#xf07a</a>
            </div>
        </div>
        
    </form>
    </div>
    
<?php else: ?>
    <div class="alert alert-danger align-middle mt-2" role="alert"><i class="bi bi-x-square-fill align-middle pr-2" style="font-size: 1.3em;"></i>
        No puedes realizar tus compras, es necesario que ingreses a tu cuenta de Mercado a Distancia&reg; <i class="bi bi-shop align-middle pl-1" style="font-size: 1.3em;"></i></div>
        
          <div class="col-sm-10 col-sm-offset-1 col-lg-12 text-center">
          <div class="four_zero_four_bg">
            <h1 class="text-center">:v</h1>
          </div>

          <div class="contant_box_404">
          <h3>Pareces estar perdido, no puedes continuar con tu compra</h3>

          <p>Para realizar mandados necesitas de una cuenta en Mercado a Distancia&reg;</p>

          <a href="<?=base_url?>usuario/registro" class="boton-login btn btn-outline-warning font-weight-bold text-dark">Crear mi cuenta</a>
        </div>
          </div>
<?php endif; ?>
</section>
</div>
