<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Pilotos del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Pilotos</li>
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
          <h3 class="card-title">Pilotos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url() ?>transporte/pilotos/nuevo"><i class="fa fa-plus"></i> Nuevo Piloto</a>
          </div>          
          <?php if (count($datos)):  ?>
            <table id="example3" class="table table-bordered table-striped" >
              <thead>
              <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Identificación</th>
                <th class="text-center">Telefonó</th>
                <th class="text-center">Estado</th>
                <th> &nbsp; </th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $item): ?>
                  <tr>
                    <td  > <?php echo $item->nombres." ".$item->apellidos ?>  </td>
                    <td  > <?php echo $item->identificacion ?>  </td>
                    <td  > <?php echo $item->telefono ?>  </td>
                    <td  > <?php echo $item->estado ?>  </td>
                    <td width="10%">
                      <div class="btn-group">
                        <a class="btn btn-primary" title="Ver Registro" href="<?php echo base_url() ?>transporte/pilotos/ver/<?php echo $item->id_piloto ?>"> <i class="fa fa-eye"></i> </a>
                        <a class="btn btn-primary" title="Modificar Registro" href="<?php echo base_url() ?>transporte/pilotos/guardar/<?php echo $item->id_piloto ?>"> <i class="fa fa-edit"></i></a>
                        <a class="btn btn-primary" title="Imprimir Recibo"  href="<?php echo base_url() ?>transporte/pilotos/recibo/<?php echo $item->id_piloto ?>"><i class="fa fa-print"></i></a>
                        <a class="btn btn-primary debaja_item" title="Dar de Baja"  href="<?php echo base_url() ?>transporte/pilotos/darbaja/<?php echo $item->id_piloto ?>"><i class="fa fa-eraser"></i></a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          <?php else: ?>
            <p> No hay pilotos </p>
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