<?php
headerAdmin($data);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2><?php echo $data['page_name']; ?></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a href="<?= base_url ?>/cobranza/nuevo" class=""><button class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> Nueva Cobranza</button></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          <?php echo Alertas::mostraAlerta(); ?>
            <table id="tblCobranza" class="display responsive nowrap" style="width:100%">
              <thead>
              <tr>
            <TH>ID</TH>
            <TH>CLIENTE</TH>
            <TH>PEDIDO  </TH>
            <TH>FECHA DE ELABORACION DE PEDIDO</TH>
            <TH>FECHA DE ENTREGA LIMITE DE PEDIDO</TH> 
            <TH>NUMERO DE PARTIDA</TH>
            <TH>DESCRIPCION DEL PRODUCTO</TH>
            <TH>CANTIDAD DE ENTREGA</TH>
            <TH>UNIDAD</TH>
            <TH>PRECIO UNITARIO</TH>
            <TH>SUBTOTAL</TH>
            <TH>IMPUESTO</TH>
            <TH>TOTAL</TH>
            <TH>NUMERO DE FIANZA</TH>
            <TH>FECHA DE FIANZA</TH>
            <TH>IMPORTE</TH>
            <TH>MOTIVO DE LA FIANZA</TH>
            <TH>REMISION SAE</TH>
            <TH>ENTREGA DE PRODUCTO</TH>
            <!-- <th>Acciones</th> -->
        </tr>
    </thead>
    <tbody>
    </tbody>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->



<?php footerAdmin($data); ?>