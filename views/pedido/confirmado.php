<div class="container-fluid">
<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
    <div class="alert alert-success align-middle mt-2" role="alert"><i class="bi bi-check-square-fill align-middle pr-2" style="font-size: 1.3em;"></i>
    ¡¡Ya esta guardado tu pedido!!</div>
    <h2 class="text-center text-danger border-bottom pb-2 title-mercado">¡Listo, solo falta elegir la forma de pago!</h2>
    <p class="text-left text-success align-middle">Tu mandado ha sido guardado con éxito <i class="bi bi-hand-thumbs-up align-middle" style="font-size: 1.3em;"></i></p>
    <?php if (isset($pedido)): ?>
    <h5 class="text-left font-weight-bolder text-danger">Datos de tu mandado:</h5>
        <p><span class="font-weight-bolder">Número de pedido: </span><?= $pedido->id ?></p>
        <p><span class="font-weight-bolder">Total a pagar: </span>$<?= $pedido->costo_total ?></p>
        <p class="font-weight-bolder m-0">Los productos que haz comprado en nuestro mercado:</p>
        <div class="table-responsive">
        <div class="d-flex justify-content-center">
        <div class="col-sm-12 col-md-8">
        <table class="table table-sm text-center">
            <thead>
                <tr>
                    <th scope="col" class="bg-dark text-warning">Presentación</th>
                    <th scope="col" class="bg-dark text-warning">Nombre</th>
                    <th scope="col" class="bg-dark text-warning">Precio</th>
                    <th scope="col" class="bg-dark text-warning">Unidades</th>
                </tr>
            </thead>
            <?php while ($producto = $productos->fetch_object()): ?>
            <tbody>
                <tr>
                    <td scope="row"> 
                        <?php if ($producto->imagen != null): ?>
                            <img width="120px" src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" alt="producto"/>
                        <?php else: ?>
                            <img width="120px" src="<?= base_url ?>assets/img/no-foto.png" alt="sin foto"/>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>" class="text-decoration-none"><?= $producto->nombre ?></a>
                    </td>
                    <td>
                        $<?= $producto->precio ?>
                    </td>
                    <td>
                        <?= $producto->unidades ?>
                    </td>
                </tr>
            </tbody>
            <?php endwhile; ?>
        </table>
    </div>
    </div>
</div>

<div id="payment-form">
 <h5 class="text-left font-weight-bolder text-danger">Elige la forma de pago:</h5>
 <div class="accordion pb-4" id="payment-options">
     
     
    <div class="card">
      <div class="card-header" id="optionOne">
        <h2 class="mb-0">
          <button class="btn btn-block font-weight-bold text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Pago con Tarjeta de Crédito o Débito
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="optionOne" data-parent="#payment-options">
        <div class="card-body">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="paymentRadios" id="paymentRadio1" value="tarjeta" checked>
            <label class="form-check-label" for="paymentRadio1">
              Pagar con tarjeta
            </label>
          </div>
          <!-- Inicio de Tarjeta de Credito -->
            <div class="space-card">
                <div class="payment-body">
                  <div class="col1-payment">
                    <div class="card_payment">
                      <div class="front">
                        <div class="type">
                          <img class="bankid"/>
                        </div>
                        <span class="chip"></span>
                        <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
                        <div class="date"><span class="date_value">MM / AAAA</span></div>
                        <span class="fullname">Nombre Completo</span>
                      </div>
                      <div class="back">
                        <div class="magnetic"></div>
                        <div class="bar"></div>
                        <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
                        <span class="chip"></span><span class="disclaimer">Esta tarjeta es intransferible y propiedad del Banco Asignado en el número. <br>El titular acepta el uso de esta tarjeta se rige por los términos y condiciones del contrato.</span>
                      </div>
                    </div>
                  </div>
                  <div class="col2-payment">
                    <label>Número de la tarjeta</label>
                    <input class="number" type="text" ng-model="ncard" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                    <label>Nombre de la tarjeta</label>
                    <input class="inputname" type="text" placeholder=""/>
                    <label>Fecha de vencimiento</label>
                    <input class="expire" type="text" placeholder="MM / AAAA"/>
                    <label>Código de seguridad</label>
                    <input class="ccv" type="text" placeholder="CVC" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                    <!-- <button class="buy">Realizar pago</button> -->
                  </div>
                </div>
            </div>
        <!-- Fin de Tarjeta de Credito -->
        </div>
      </div>
    </div>
     
     
    <div class="card">
      <div class="card-header" id="optionTwo">
        <h2 class="mb-0">
          <button class="btn btn-block font-weight-bold text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Pago a Contrareembolso
          </button>
        </h2>
      </div>
        
      <div id="collapseTwo" class="collapse" aria-labelledby="optionTwo" data-parent="#payment-options">
        <div class="card-body">
          <h4 class="text-left text-info border-bottom pb-2">Recuerda que nosotros manejamos el pago contrareembolso <i class="bi bi-mailbox2"></i></h4>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="paymentRadios" id="paymentRadios2" value="contrareembolso">
            <label class="form-check-label" for="paymentRadios2">
              Pagar a contrareembolso
            </label>
          </div>
          <img class="mx-auto d-block" src="<?=base_url?>assets/img/pago.svg" width="200px" alt="pago_contrareembolso"/>
          <div class="text-justify pt-3">
            Esta modalidad les permite a nuestros clientes comprar los diferentes productos a distancia sin realizar el pago por adelantado, 
            sino al momento en que recibes tu compra. El pago puede ser en efectivo o con tarjeta, en donde nuestros mensajeros además de entregar los productos también cuentan con una terminal punto de venta que lo permita, 
            dándole seguridad a nuestros clientes, en donde su información bancaria no corre el riesgo de verse comprometida y sin contar que, además no es necesario tener una tarjeta de crédito para comprar. 
          </div>
        </div>
      </div>
    </div>
     
     
    <div class="card">
      <div class="card-header" id="optionThree">
        <h2 class="mb-0">
          <button class="btn btn-block font-weight-bold text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Pago por Transferencia Bancaria
          </button>
        </h2>
      </div>
        
      <div id="collapseThree" class="collapse" aria-labelledby="optionThree" data-parent="#payment-options">
        <div class="card-body">
          <h4 class="text-left text-info border-bottom py-2">¿O prefieres el pago por transferencia bancaria? <i class="bi bi-credit-card"></i></h4>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="paymentRadios" id="paymentRadios3" value="tranferencia">
            <label class="form-check-label" for="paymentRadios3">
              Pagar con transferencia
            </label>
          </div>
          <img class="mx-auto d-block" src="<?=base_url?>assets/img/transferencia.png" width="250px" alt="pago_contrareembolso"/>
          <div class="text-justify pt-3">
            Si prefieres pagar por transferencia bancaria, simplemente deposita el total de tu mandado con los demás detalles de tus compras, como lo es el número de pedido a nuestra cuenta bancaria.
            Cuenta bancaria: <span class="font-weight-bolder">002180701353672205</span>.
            Una vez teniendo nosotros el depósito, le enviaremos su mandado de inmediato!!
          </div>
        </div>
      </div>
    </div>
     
     
  </div>
    <div class="text-center pb-3">
        <a href="<?=base_url?>" class="btn btn-outline-warning font-weight-bold text-dark align-middle" type="button">Realizar compra <i class="bi bi-bag-check align-middle" style="font-size: 1.3em;"></i></a>
   </div>
</div>
        
    <?php endif; ?>
<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
    <div class="alert alert-danger align-middle mt-2" role="alert"><i class="bi bi-x-square-fill align-middle pr-2" style="font-size: 1.3em;"></i>
    Tu pedido NO sido guardado <i class="bi bi-emoji-frown align-middle pl-1" style="font-size: 1.3em;"></i></div>
    <div class="col-sm-10 col-sm-offset-1 col-lg-12 text-center">
          <div class="four_zero_four_bg">
            <h1 class="text-center">:v</h1>
          </div>

          <div class="contant_box_404">
          <h3>Parece que hubo un error, no puedes continuar con tu compra</h3>

          <p>Mejor regresa a la página principal de Mercado a Distancia&reg;</p>

          <a href="<?=base_url?>" class="boton-login btn btn-outline-warning font-weight-bold text-dark">Regresar</a>
        </div>
    </div>
<?php endif; ?>
</div>