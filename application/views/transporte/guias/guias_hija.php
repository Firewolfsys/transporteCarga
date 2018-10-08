<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Guias Hija</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('transporte/servicios') ?>">Guias HIja</a></li>
          <li class="breadcrumb-item active">Detalle Guias</li>
          <input type="hidden" class="form-control" id="autopopup" value="<?php echo($autopupup); ?>">
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<body onload="onload()"></body>
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Guia Madre</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="row">
                     <div class="col-md-4">
                       <div class="form-group">
                     <label><strong>Codigo Guía Madre</strong></label>
                    <input type="text"  name="codigo_guia" class="form-control" required="required" value="<?php echo $datos->codigo_guia ?>" disabled>
                  </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                    <div class="form-group">
                    <label><strong>Cliente que Envía</strong></label>
                       <select class="form-control select2" name="id_cliente_envia" disabled>
                                <?php foreach ($clientes_lista as $list): ?> 
                                <option value="<?php echo $list->id_cliente ?>" <?php if($list->id_cliente==$datos->id_cliente_envia) echo "selected"  ?>><?php echo $list->nombre_comercial ?> </option>
                                <?php endforeach; ?>
                            </select>
                          </div>
                    </div>
                     <div class="col-md-6">
                     <div class="form-group">
                          <label><strong>Cliente que Recibe </strong></label>
                             <select class="form-control select2" name="id_cliente_recibe" disabled>
                                  <?php foreach ($clientes_lista as $list): ?> 
                                  <option value="<?php echo $list->id_cliente ?>"<?php if($list->id_cliente==$datos->id_cliente_recibe) echo "selected"  ?>><?php echo $list->nombre_comercial ?> </option>
                                  <?php endforeach; ?>
                              </select>
                        </div>
                  </div>
                    </div>

                  <div class="row">
                      <div class="col-md-6">
                   <div class="form-group">
                    <label><strong>% Pago de quien envia <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number" id="porcentaje_pago_envia" name="porcentaje_pago_envia" class="form-control" required="required" value="<?php echo $datos->porcentaje_pago_envia ?>" readonly>
                  </div>
                    </div>
                     <div class="col-md-6">
                   <div class="form-group">
                    <label><strong>% de pago de quien recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number"  id="porcentaje_pago_recibe" name="porcentaje_pago_recibe" class="form-control" required="required" value="<?php echo $datos->porcentaje_pago_recibe ?>" readonly>
                  </div>
                  </div>
                    </div>
                </div>
            </form>
<!-- Main content -->
<section class="content"> 
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Guias Hijas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-plus"></i> Agregar Guia Hija</a>

          </div>          
          <?php if (count($detalle_lista)):  ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center" width="10%">No. Guia Hija</th>
                      <th class="text-center" width="10%">Servicio</th>
                      <th class="text-center" width="10%">Peso</th>
                      <th class="text-center" width="10%">Total Paga Envia</th>
                      <th class="text-center" width="10%">Total Paga Recibe</th>
                      <th class="text-center" width="15%">Fecha Creacion</th>
                      <th width="1%"> &nbsp; </th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($detalle_lista as $item): ?>
                        <tr>
                          <td width="10%"> <?php echo $item->codigo_guia_hija ?>  </td>
                          <td width="10%"> <?php echo $item->servicio ?>  </td>
                          <td width="10%"> <?php echo $item->peso ?>  </td>
                          <td width="10%"> <?php echo $item->total_pago_envia ?>  </td>
                          <td width="10%"> <?php echo $item->total_pago_recibe ?>  </td>
                          <td width="15%"> <?php echo $item->fecha_creacion ?>  </td>
                           <td width="1%">
                      <div class="btn-group">
                        <a class="btn btn-primary eliminar_item" title="Eliminar Guia Hija" href="<?php echo base_url() ?>transporte/guias/eliminar_guia_hija/<?php echo $item->id_guia_hija ?>/<?php echo $item->id_guia?>"> <i class="fa fa-eraser"></i> </a> 
                      </div>
                    </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>

                  </table>
                <?php else: ?>
                      <p> No existen guias hijas</p>
          <?php endif; ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section> 
<!-- /.content -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<div class="modal fade bd-example-modal-sm" role="dialog" id="myModal" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Ingreso de Guia Hija</h3>
            </div>
            <!--error-->
              <?php if ($resultado!="") : ?>
               <div class="alert alert-<?= $claseresultado ?> alert-dismissible fade show" role="alert">
              <strong><?= $resultado ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <?php endif; ?>
            <!--termina error-->
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="form-guia" method="post" action="<?php echo base_url() ?>transporte/guias/guardar_guia_hija/<?php echo $datos->id_guia ?>" >
                <div class="card-body">
                  <input type="hidden" name="porcentaje_pago_envia" class="form-control"  value="<?php echo $datos->porcentaje_pago_envia ?>">
                  <input type="hidden" name="porcentaje_pago_recibe" class="form-control"  value="<?php echo $datos->porcentaje_pago_recibe ?>">
                  <input type="hidden" name="precio_especial" class="form-control"  value="<?php echo $datos->precio_especial ?>">
                  <input type="hidden" name="id_cliente_envia" class="form-control"  value="<?php echo $datos->id_cliente_envia ?>">
                <div class="form-group">
                  <label><strong>Guia Hija<FONT COLOR="red">*</FONT></strong></label>
                  <input type="text"  name="codigo_guia_hija" id="codigo_guia_hija" class="form-control" required="required" value="" >
                </div>
                 <div class="form-group">
                    <label><strong>Servicio <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" id="id_servicio" name="id_servicio">
                            <?php foreach ($servicios_lista as $list): ?> 
                            <option  value="<?php echo $list->id_servicio ?>"><?php echo $list->descripcion ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
                  <div class="form-group">
                    <label><strong>Peso <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number" onchange="calculapago()"  name="peso" class="form-control"  id="peso" required="required" value="0" >
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" id="agregar" class="btn btn-primary"><i class="fa fa-save"></i>Agregar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
     </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
    </div>
  </div>
</div>


  <!-- Control pie de pagina -->
  <?php $this->load->view('main/pie_pagina')?> 
  <!-- /.control-pie de pagina -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('main/scripts')?> 

<style type="text/css">
  .select2-container {
    width: 100% !important;
    padding: 0;
}
</style>

<script>
function onload() {
  var autopopup = document.getElementById('autopopup').value;
  if (autopopup=="true") {
    $('#myModal').modal('show');
        $('#myModal').on('shown.bs.modal', function () {
      $('#codigo_guia_hija').focus()
    });
  }
}

$("#codigo_guia_hija").keyup(function(event) {
    if (event.keyCode === 13) {
        var form = document.getElementById("form-guia");
        document.getElementById("agregar").addEventListener("click", function () {
          form.submit();
        });
    }
});

</script>

</body>
</html>

