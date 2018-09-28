<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Servicios por cliente</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('transporte/servicios') ?>">Servicios por cliente</a></li>
          <li class="breadcrumb-item active">Detalle de servicios por cliente</li>
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
            <h3 class="card-title">Servicio</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="row">
                     <div class="col-md-4">
                       <div class="form-group">
                     <label><strong>Servicio</strong></label>
                    <input type="text"  name="servicio" class="form-control" required="required" value="<?php echo $datos->descripcion ?>" disabled>
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
          <h3 class="card-title">Detalle de servicios por cliente</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-plus"></i> Agregar nuevo cliente</a>

          </div>          
          <?php if (count($detalle_lista)):  ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center" width="10%">Cliente</th>
                      <th class="text-center">Peso Maximo</th>
                      <th class="text-center">Precio Publico</th>
                      <th class="text-center">Precio Peso Adicional</th>
                      <th width="1%"> &nbsp; </th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($detalle_lista as $item): ?>
                        <tr>
                          <td width="10%"> <?php echo $item->id_cliente ?>  </td>
                           <td  > <?php echo $item->peso_maximo ?>  </td>
                            <td  > <?php echo 'Q. '.$item->precio_publico ?>  </td>
                            <td  > <?php echo 'Q. '.$item->precio_peso_adicional ?>  </td>
                           <td width="1%">
                      <div class="btn-group">
                        <a class="btn btn-primary eliminar_item" title="Eliminar Guia Hija" href="<?php echo base_url() ?>transporte/servicios/eliminar_servicio_cliente/<?php echo $item->id_serviciocliente ?>/<?php echo $item->id_servicio?>"> <i class="fa fa-eraser"></i> </a> 
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

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="myModal" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Ingreso de nuevo cliente al servicio y/o producto</h3>
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
            <form role="form" id="form-guia" method="post" action="<?php echo base_url() ?>transporte/servicios/guardar_guia_hija/<?php echo $datos->id_servicio ?>" >
                <div class="card-body">
                 <div class="form-group">
                    <label><strong>Cliente<FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_cliente_envia">
                            <?php foreach ($clientes_lista as $list): ?> 
                            <option value="<?php echo $list->id_cliente ?>"><?php echo $list->nombre_comercial ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
                   <div class="form-group">
                        <label>Peso maximo</label>
                        <input type="number" placeholder="0.00"  step="any"  name="peso_maximo" class="form-control" required="required"  >
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" placeholder="0.00"  step="any"  name="precio_publico" class="form-control" required="required"  >
                    </div> 
                    <div class="form-group">
                        <label>Precio Peso Adicional</label>
                        <input type="number" placeholder="0.00"  step="any"  name="precio_peso_adicional" class="form-control" required="required" >
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

