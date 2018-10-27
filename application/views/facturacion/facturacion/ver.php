<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Facturacion</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('facturacion/lista') ?>">Facturacion</a></li>
          <li class="breadcrumb-item active">Detalle de facturacion</li>
          <input type="hidden" class="form-control" id="autopopup" value="<?php echo($autopopup); ?>">
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
            <h3 class="card-title">Facturacion</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url() ?>facturacion/facturacion/guardar_encabezado/<?php echo $datos->id_documento; ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="row">
                     <div class="col-md-12">
                         <div class="form-group">
                            <label><strong>Tipo Documento<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="tipo_docto">
                            <?php foreach ($tipo_doctos as $list): ?> 
                            <option value="<?php echo $list->tipo_doctoid ?>"<?php if($list->tipo_doctoid==$datos->tipo_doctoid) echo "selected"  ?>><?php echo $list->descripcion ?> </option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                            <label><strong>Cliente<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_cliente">
                            <?php foreach ($clientes as $list): ?> 
                            <option value="<?php echo $list->id_cliente ?>"<?php if($list->id_cliente==$datos->id_cliente) echo "selected"  ?>><?php echo $list->nombre_comercial ?> </option>
                            <?php endforeach; ?>
                        </select>
                          </div>
                    </div>
                  </div>

                      <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Fecha Inicio<FONT COLOR="red">*</FONT></strong></label>
                             <input type="date"  name="fecha_inicio" class="form-control" required="required" value="<?php echo $datos->fecha_inicio?>" >
                          </div>
                    </div>
                        <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Fecha Fin<FONT COLOR="red">*</FONT></strong></label>
                             <input type="date"  name="fecha_fin" class="form-control" required="required" value="<?php echo $datos->fecha_fin?>" >
                          </div>
                    </div>
                  </div>
                </div>
                <?php if($disabled==""){ ?>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>facturacion/facturacion"><i class="fa fa-undo"></i> Cancelar </a>
                </div>
              <?php } ?>
            </form>
<!-- Main content -->
<section class="content"> 
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Detalle de facturacion</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url() ?>facturacion/facturacion/nuevo" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-plus"></i> Nuevo</a>

          </div>          
          <?php if (count($detalle_lista)):  ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center" width="10%">No. Guia</th>
                      <th class="text-center">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($detalle_lista as $item): ?>
                        <tr>
                          <td width="10%"> <?php echo $item->codigo_guia ?>  </td>
                          <td> <?php echo $item->total ?>  </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>

                  </table>
                <?php else: ?>
                      <p> No existe detalle en facturacion</p>
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

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="myModal" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Ingreso de Guia</h3>
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
            <form role="form" id="form-guia" method="post" action="<?php echo base_url() ?>facturacion/facturacion/guardar_detalle/<?php echo $datos->id_documento ?>" >
                <div class="card-body">
                <div class="form-group">
                  <label><strong>Guia<FONT COLOR="red">*</FONT></strong></label>
                  <input type="text"  name="codigo_guia" id="codigo_guia" class="form-control" required="required" value="" >
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


<script>
function onload() {
  var autopopup = document.getElementById('autopopup').value;
  if (autopopup=="true") {
    $('#myModal').modal('show');
        $('#myModal').on('shown.bs.modal', function () {
      $('#codigo_guia').focus()
    });
  }
}

$("#codigo_guia").keyup(function(event) {
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

