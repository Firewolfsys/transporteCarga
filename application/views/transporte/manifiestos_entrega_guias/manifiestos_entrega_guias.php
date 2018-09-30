<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->
<script type="text/javascript">
  function establecerguia(id_guia)
  {
      document.getElementById("id_guia").value = id_guia;
  }
</script>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Guias Listas para entregar</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Guias Listas para entregar</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content"> 
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Guias Listas para entregar</h3>
        </div>
         <!-- /.card-header -->
        <div class="card-body">
        <br>
              <?php if (count($guias_lista)):  ?>
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center" width="10%">No. Guia</th>
                      <th class="text-center">Origen</th>
                      <th class="text-center">Destino</th>
                      <th class="text-center">Tipo de Guia</th>
                      <th class="text-center" width="15%">Fecha Creacion</th>
                      <th class="text-center" width="15%">Estado</th>
                      <th class="text-center" width="15%">Recibe</th>
                      <th class="text-center" width="15%">Recibe Tel.</th>
                      <th width="5%"> &nbsp; </th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($guias_lista as $item): ?>
                        <tr>
                          <td width="10%"> <?php echo $item->codigo_guia ?>  </td>
                          <td> <?php echo $item->lugar_origen ?>  </td>
                          <td> <?php echo $item->lugar_destino ?>  </td>
                          <td width="15%"> <?php if($item->tipo_usuario_crea=="2"){echo("Interna");}else{echo("Externa");} ?>  </td>
                          <td width="15%"> <?php echo $item->fecha_creacion ?>  </td>
                          <td width="15%"> <?php echo $item->estado ?>  </td>
                          <td width="15%"> <?php echo $item->responsable_recibe ?>  </td>
                          <td width="15%"> <?php echo $item->responsable_recibe_telefono ?>  </td>
                          <td width="5%">
                            <div class="btn-group">
                              <a class="btn btn-primary" title="Entregar Guia" onclick="establecerguia(<?php echo $item->id_guia ?>)" href="" data-toggle="modal" data-target=".bd-example-modal-sm"> <i class="fa fa-dropbox"></i> </a>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>

                  </table>
                <?php else: ?>
                      <p> No tiene guias creadas</p>
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



<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="myModal" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Entrega de Guia</h3>
            </div>
            <!-- form start -->
            <form role="form" id="form-guia" method="post" action="<?php echo base_url() ?>transporte/manifiestos_entrega_guias/entregar_guia/" >
                <div class="card-body">
                <div class="form-group">
                  <label><strong>Observacion<FONT COLOR="red">*</FONT></strong></label>
                  <input type="text"  name="observacion" id="observacion" class="form-control" required="required" value="" >
                  <input type="text"  name="id_guia" id="id_guia" class="form-control" required="required" value="" >
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




</body>
</html>