<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Guias del sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Guias</li>
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
          <h3 class="card-title">Guias</h3>
        </div>
         <!-- /.card-header -->
        <div class="card-body">
        <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url() ?>transporte/guias/nuevo"><i class="fa fa-plus"></i> Nueva Guia</a>
          </div> 
              <?php if (count($guias_lista)):  ?>
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center" width="10%">No. Guia</th>
                      <th class="text-center">Origen</th>
                      <th class="text-center">Destino</th>
                      <th class="text-center" width="15%">Fecha Creacion</th>
                      <th class="text-center" width="15%">Estado</th>
                      <th> &nbsp; </th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($guias_lista as $item): ?>
                        <tr>
                          <td width="10%"> <?php echo $item->codigo_guia ?>  </td>
                          <td> <?php echo $item->lugar_origen ?>  </td>
                          <td> <?php echo $item->lugar_destino ?>  </td>
                          <td width="15%"> <?php echo $item->fecha_creacion ?>  </td>
                          <td width="15%"> <?php echo $item->estado ?>  </td>
                          <td width="10%">
                            <div class="btn-group">
                              <a class="btn btn-primary" title="Ver Guia" href="<?php echo base_url() ?>transporte/guias/visualizar/<?php echo $item->id_guia ?>"> <i class="fa fa-eye"></i> </a>
                              <a class="btn btn-primary" title="Modificar Guia" href="<?php echo base_url() ?>transporte/guias/editar/<?php echo $item->id_guia ?>"> <i class="fa fa-edit"></i></a>
                              <?php if($item->id_guia_estado != 5) { ?>
                              <a class="btn btn-primary debaja_item" title="Cancelar Guia" href="<?php echo base_url() ?>transporte/guias/cancelar/<?php echo $item->id_guia ?>"> <i class="fa fa-eraser"></i></a>
                              <a class="btn btn-primary" title="Guias Hijas" href="<?php echo base_url() ?>transporte/guias/ver_guias_hija/<?php echo $item->id_guia ?>"> <i class="fa fa-list"></i></a>
                              <?php } ?>
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


  <!-- Control pie de pagina -->
  <?php $this->load->view('main/pie_pagina')?> 
  <!-- /.control-pie de pagina -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('main/scripts')?> 




</body>
</html>