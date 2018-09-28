<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->


<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">servicios del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">servicios</li>
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
          <h3 class="card-title">servicios</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url() ?>transporte/servicios/nuevo"><i class="fa fa-plus"></i> Nuevo</a>
          </div>          
          <?php if (count($datos)):  ?>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center">Producto y/o Servicio</th>
                <th class="text-center">Unidad Medida</th>
                <th class="text-center">Peso Maximo</th>
                <th class="text-center">Precio Publico</th>
                <th class="text-center">Precio Peso Adicional</th>
                <th class="text-center">Estado</th>
                <th> &nbsp; </th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $item): ?>
                  <tr>
                    <td  > <?php echo $item->descripcion ?>  </td>
                    <td  > <?php echo $item->unidad_medida ?>  </td>
                    <td  > <?php echo $item->peso_maximo ?>  </td>
                    <td  > <?php echo 'Q. '.$item->precio_publico ?>  </td>
                    <td  > <?php echo 'Q. '.$item->precio_peso_adicional ?>  </td>
                    <td  > <?php echo $item->estado ?>  </td>
                    <td width="10%">
                      <div class="btn-group">
                        <a class="btn btn-primary" title="Ver Registro" href="<?php echo base_url() ?>transporte/servicios/ver/<?php echo $item->id_servicio ?>"> <i class="fa fa-eye"></i> </a>
                        <a class="btn btn-primary" title="Modificar Registro" href="<?php echo base_url() ?>transporte/servicios/guardar/<?php echo $item->id_servicio ?>"> <i class="fa fa-edit"></i></a>
                        <a class="btn btn-primary debaja_item" title="Eliminar Registro"  href="<?php echo base_url() ?>transporte/servicios/inactivar/<?php echo $item->id_servicio ?>"><i class="fa fa-eraser"></i></a>
                         <a class="btn btn-primary" title="Productos y/o Servicios por cliente" href="<?php echo base_url() ?>transporte/servicios/ver_servicios_cliente/<?php echo $item->id_servicio ?>"> <i class="fa fa-list"></i></a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          <?php else: ?>
            <p> No hay servicios </p>
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