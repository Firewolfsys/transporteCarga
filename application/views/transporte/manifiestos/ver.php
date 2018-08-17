<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Manifiestos</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('transporte/servicios') ?>">Manifiestos</a></li>
          <li class="breadcrumb-item active">Detalle Guias</li>
          <input type="hidden" class="form-control" id="autopopup" value="<?php echo($parametros['autopopup']); ?>">
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
            <h3 class="card-title">Manifiestos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url() ?>transporte/manifiestos/guardar_encabezado/<?php echo $datos->id_manifiesto ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                            <label><strong>Piloto<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_piloto" disabled="">
                            <?php foreach ($parametros['pilotos'] as $list): ?> 
                            <option value="<?php echo $list->id_piloto ?>" <?php if($list->id_piloto==$datos->id_piloto) echo "selected"  ?>><?php echo $list->nombres ?> </option>
                            <?php endforeach; ?>
                        </select>
                          </div>
                    </div>
                    </div>
                    <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Origen<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_lugar_origen" disabled="">
                            <?php foreach ($parametros['lugares'] as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"<?php if($list->id_lugar==$datos->id_lugar_origen) echo "selected"  ?>><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
                          </div>
                    </div>
                      <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Destino<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_lugar_destino" disabled="">
                            <?php foreach ($parametros['lugares'] as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"<?php if($list->id_lugar==$datos->id_lugar_destino) echo "selected"  ?>><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
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
          <h3 class="card-title">Guias en Manifiesto</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url() ?>transporte/lugares/nuevo" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-plus"></i> Nuevo</a>

          </div>          
          <?php if (count($parametros['detalle_lista'])):  ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center" width="10%">No. Guia</th>
                      <th class="text-center">Origen</th>
                      <th class="text-center">Destino</th>
                      <th class="text-center" width="15%">Fecha Creacion</th>
                      <th class="text-center" width="15%">Estado</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($parametros['detalle_lista'] as $item): ?>
                        <tr>
                          <td width="10%"> <?php echo $item->codigo_guia ?>  </td>
                          <td> <?php echo $item->lugar_origen ?>  </td>
                          <td> <?php echo $item->lugar_destino ?>  </td>
                          <td width="15%"> <?php echo $item->fecha_creacion ?>  </td>
                          <td width="15%"> <?php echo $item->estado ?>  </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>

                  </table>
                <?php else: ?>
                      <p> No existen guias en manifiesto</p>
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
              <?php if ($parametros['resultado']!="") : ?>
               <div class="alert alert-<?= $parametros['claseresultado'] ?> alert-dismissible fade show" role="alert">
              <strong><?= $parametros['resultado'] ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <?php endif; ?>
            <!--termina error-->
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="form-guia" method="post" action="<?php echo base_url() ?>transporte/manifiestos/guardar_detalle/<?php echo $datos->id_manifiesto ?>" >
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

