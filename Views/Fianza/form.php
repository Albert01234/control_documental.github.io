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
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Contra Recibo Digital<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="contradigi" name="contradigi" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Estatus<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="estatus" name="estatus" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Banco<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="banco" name="banco" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fecha de Cobro<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="date" id="fecobro" name="fecobro" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Factoraje<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="factoraje" name="factoraje" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Cobro<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="cobro" name="cobro" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Valor Factura<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="valorfac" name="valorfac" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sancion<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="sancion" name="sancion" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nota de Credito<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="notacredi" name="notacredi" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Importe<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="importe" name="importe" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Motivo<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="motivo" name="motivo" required="required" class="form-control ">
    </div>
  </div>
  

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Saldo Final<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="salfi" name="salfi" required="required" class="form-control ">
    </div>
  </div>
