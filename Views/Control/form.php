<input type="hidden" name="id" value="<?php echo $usuario->id_usuario ?? '' ?>">

<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Cliente <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <select class="form-control" name="selcli">
    <option>Seleccione el cliente</option>
  <?php foreach ($data['clientes'] as $clientes ):?>
 <option> <?php echo $clientes['cliente'];?></option>
  <?php endforeach ?> 
    </select>
  </div>
</div>

<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Pedido <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <select class="form-control" name="selpe">
    <option>Seleccione el pedido</option>
  <?php foreach ($data['pedido'] as $pedido ):?>
 <option> <?php echo $pedido['pedido'];?></option>
  <?php endforeach ?> 
    </select>
  </div>
</div>


<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Factura <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="factura" name="factura" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fecha de Factura<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="date" id="fefactura" name="fefactura" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alta <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="alta" name="alta" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fecha de Alta <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="date" id="fealta" name="fealta" required="required" class="form-control ">
    </div>
  </div>

  
  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fecha de Revision <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="date" id="ferevi" name="ferevi" required="required" class="form-control ">
    </div>
  </div>

    
  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">¿Quien lo ingreso a revsion?<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="quien" name="quien" required="required" class="form-control ">
    </div>
  </div>

  
  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Contra recibo <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="contrareci" name="contrareci" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Importe Contra Recibo <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="Importecontra" name="Importecontra" required="required" class="form-control ">
    </div>
  </div>

  
  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fecha de Probable de Pago <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="date" id="fepro" name="fepro" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">¿Ingreso a revsion?<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="ingreso" name="ingreso" required="required" class="form-control ">
    </div>
  </div>

