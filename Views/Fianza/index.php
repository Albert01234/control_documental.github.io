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
              <li><a href="<?= base_url ?>/fianza/nuevo" class=""><button class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> Nuevo Fianza</button></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          <?php echo Alertas::mostraAlerta(); ?>
            <table id="tblFianza" class="display responsive nowrap" style="width:100%">
              <thead>
              <tr>
            <th>CLIENTE</th>
            <th>PEDIDO</th>
            <th>CONTRA RECIBO DIGITAL </th>
            <th>ESTATUS</th>
            <th>BANCO</th>
            <th>FECHA DE COBRO</th>
            <th>FACTORAJE</th>
            <th>COBRO</th>
            <th>VALOR FACTURA</th>
            <th>SANCION</th>
            <th>NOTA DE CREDITO</th>
            <th>IMPORTE</th>
            <th>MOTIVO</th>
            <th>SALDO FINAL</th>
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