<div class="container-fluid">
<section class="form-registro" id="form-registro">
        <div class="datos parallax">
            <div class="overlay"></div>
            <div class="container">
                <div class="blur">
                    <h3>Crear una nueva categoría</h3>
                    <p>Se vera reflejada en el menú de forma inmediata</p>
                </div>
            </div>  
        </div>    
    <div class="formulario col">
<form action="<?=base_url?>categoria/save" method="POST" class="formulario-contacto" name="formulario_contacto">
    <p class="text-danger font-weight-bold">Favor de no incluir carácteres raros en el nombre de la categoría</p>
    <div>
        <div class="input-group">
            <input id="nombre" type="text" name="nombre" pattern="[A-Z a-z]+" maxlength="20" autocomplete="new-text"/>
            <label class="label" for="nombre">Nombre</label>
        </div>
    </div>

    <div class="text-center">
        <input id="registro" class="btn btn-outline-warning font-weight-bold text-dark" type="submit" value="Crear categoría">
    </div>
</form>
        </div>
</section>
</div>
   
<?php
