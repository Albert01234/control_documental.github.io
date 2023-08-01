<input type="hidden" name="id" value="<?php echo $usuario->id_usuario ?? '' ?>">

<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Cliente<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="cliente" name="cliente" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Pedido <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="pedido" name="pedido" required="required" class="form-control ">
    </div>
  </div>


<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fecha de Elaboracion de Pedido <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="date" id="elaboracion" name="elaboracion" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fecha de Entrega Limite de Pedido <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="date" id="entrega" name="entrega" required="required" class="form-control ">
    </div>
  </div>


  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Numero de Partida <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="partida" name="partida" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Descripción del Producto <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="descripcion" name="descripcion" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Cantidad de Entrega<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="cantidad" name="cantidad" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Unidad <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="unidad" name="unidad" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Precio Unitario <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="precio" name="precio" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Subtotal <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="subtotal" name="subtotal" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Impuesto <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="impuesto" name="impuesto" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Total <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="total" name="total" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Numero de Fianza <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="fianza" name="fianza" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fecha de Finza <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="date" id="fefianza" name="fefianza" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Importe <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="number" id="importe" name="importe" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Motivo de la Fianza <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="motivo" name="motivo" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Remision SAE <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="remision" name="remision" required="required" class="form-control ">
    </div>
  </div>

  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fecha de Entrega del Producto <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="date" id="feentrega" name="feentrega" required="required" class="form-control ">
    </div>
  </div>

