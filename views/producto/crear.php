<div class="container-fluid">
 <section class="form-registro" id="form-registro">
     <?php if(isset($edit) && isset($pro) && is_object($pro)):?>
          <div class="datos parallax">
            <div class="overlay"></div>
            <div class="container">
                <div class="blur">
                    <h3>Editar el producto "<?=$pro->nombre?>" del mercado</h3>
                    <p>Se veran reflejados los cambios una vez enviado el formulario</p>
                    <?php $url_action = base_url."producto/save&id=".$pro->id; ?>
                </div>
            </div>  
          </div>  
    <?php else: ?>
          <div class="datos parallax">
            <div class="overlay"></div>
            <div class="container">
                <div class="blur">
                    <h3>Crear nuevo producto para el mercado</h3>
                    <p>Se vera puesto en el mercado de forma inmediata</p>
                    <?php $url_action = base_url."producto/save"; ?>
                </div>
            </div>  
          </div>    
    <?php endif; ?>
    <div class="formulario col">
        <form action="<?=$url_action?>" method="POST" enctype="multipart/form-data" class="formulario-contacto" name="formulario_contacto">
            <p class="text-danger font-weight-bold">Favor de no incluir carácteres raros en los campos</p>
            
            <div class="input-group">
                <input type="text" name="nombre" pattern="[A-Z a-z]+" value="<?= isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>"/>
                <label class="label" for="nombre">Nombre del producto</label>
            </div>
            
            <div class="input-group">
                <textarea name="descripcion" pattern="[A-Z a-z]+" ><?= isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>
                <label class="label" for="descripcion">Descripción</label>
            </div>
            
            <div class="input-group">
                <input type="number" min="1" step="any" name="precio" value="<?= isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>
                <label class="label" for="precio">Precio por unidad</label>
            </div>
            
            <div class="input-group">
                <input type="number" min="1" name="stock" value="<?= isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"/>
                <label class="label" for="stock">Unidades en existencia</label>
            </div>
                      
            <div class="input-group">
                <div class="form-check form-check-inline">
                    <label class="form-check-label pr-3" for="oferta">¿En oferta?</label>
                    Si <input class="form-check-input" value="Si" type="radio" name="oferta" required />
                 </div>
                <div class="form-check form-check-inline">
                    No <input class="form-check-input" value="No" type="radio" name="oferta" required/>
                 </div>
             </div> 
            
            <div class="input-group">    
                <label for="categoria" class="align-middle pt-2 pr-2">Categoria</label>
                
                <?php $categorias = Utils::showCategorias(); ?>
                <select class="custom-select align-middle" name="categoria" required>
                    <?php while ($cat = $categorias->fetch_object()): ?>
                        <option value="<?=$cat->id?>" <?= isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?> />
                                <?=$cat->nombre?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            
            <div class="input-group">
                <label for="imagen">Presentación/imagen del producto</label>
                <?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
                <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" width="200px"/>
                <?php endif; ?>
                <input type="file" class="form-control-file" name="imagen"/>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-outline-warning font-weight-bold text-dark"  value="Guardar producto">
            </div>
            
        </form>
    </div>
</section>
</div>
  
