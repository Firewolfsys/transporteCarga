<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Usuarios Plataforma WEB Para el Cliente <?php echo $cliente ?></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Usuarios plataforma Web</li>
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
          <h3 class="card-title">Usuarios del Cliente <?php echo $cliente ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url() ?>clientes/clientes_usuarios/nuevo/<?php echo $clienteid ?>"><i class="fa fa-plus"></i> Nuevo</a>
          </div>          
          <?php if (count($datos)):  ?>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Email</th>
                <th> &nbsp; </th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $item): ?>
                  <tr>
                    <td> <?php echo $item->nombre ?>  </td>
                    <td  > <?php echo $item->telefono ?>  </td>
                    <td  > <?php echo $item->email ?>  </td>
                    <td width="10%">
                      <div class="btn-group">
                        <a class="btn btn-primary" title="Ver Registro" href="<?php echo base_url() ?>clientes/clientes_usuarios/ver/<?php echo $item->id ?>/<?php echo $clienteid ?>"> <i class="fa fa-eye"></i></a>
                        <a class="btn btn-primary" title="Modificar Registro" href="<?php echo base_url() ?>clientes/clientes_usuarios/guardar/<?php echo $item->id ?>/<?php echo $clienteid ?>"> <i class="fa fa-edit"></i></a>
                        <a class="btn btn-primary eliminar_item" title="Eliminar Registro"  href="<?php echo base_url() ?>clientes/clientes_usuarios/eliminar/<?php echo $item->id ?>/<?php echo $clienteid ?>"><i class="fa fa-eraser"></i></a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          <?php else: ?>
            <p> El cliente no tiene usuarios configurados </p>
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