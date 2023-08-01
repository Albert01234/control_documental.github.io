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
              <li><a href="<?= base_url ?>/control/nuevo" class=""><button class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> Nuevo Control</button></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          <?php echo Alertas::mostraAlerta(); ?>
            <table id="tblControl" class="display responsive nowrap" style="width:100%">
              <thead>
              <tr>
            
            <th>CLIENTE</th>
            <th>PEDIDO</th>
            <th>FACTURA</th>
            <th>FECHA DE FACTURA</th>
            <th>ALTA</th>
            <th>FECHA DE ALTA</th>
            <th>FECHA DE REVISION</th>
            <th>¿QUIEN LO INGRESO A REVISION?</th>
            <th>CONTRA RECIBO</th>
            <th>IMPORTE CONTRA RECIBO</th>
            <th>FECHA PROBABLE DE PAGO</th>
            <th>¿INGRESO A REVISION?</th>
            <!-- <th>Acciones</th> -->
        </tr>
              </thead>
              <tbody>

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