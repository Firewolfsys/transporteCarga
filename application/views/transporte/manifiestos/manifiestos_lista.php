<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Manifiestos del sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Manifiestos</li>
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
          <h3 class="card-title">Manifiestos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url() ?>transporte/manifiestos/nuevo"><i class="fa fa-plus"></i> Nuevo</a>
          </div>          
          <?php if (count($datos)):  ?>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center" width="15%">Fecha Creacion</th>
                <th class="text-center">Piloto</th>
                <th class="text-center">Origen</th>
                <th class="text-center">Destino</th>
                <th> &nbsp; </th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $item): ?>
                  <tr>
                    <td width="15%"> <?php echo $item->fecha_creacion ?>  </td>
                    <td  > <?php echo $item->piloto ?>  </td>
                    <td  > <?php echo $item->origen ?>  </td>
                    <td  > <?php echo $item->destino ?>  </td>
                    <td width="10%">
                      <div class="btn-group">
                        <a class="btn btn-primary" title="Ver Registro" href="<?php echo base_url() ?>transporte/manifiestos/ver/<?php echo $item->id_manifiesto ?>"> <i class="fa fa-eye"></i> </a>
                        <a class="btn btn-primary" title="Modificar Registro" href="<?php echo base_url() ?>transporte/manifiestos/guardar/<?php echo $item->id_manifiesto ?>"> <i class="fa fa-edit"></i></a>
                        <a class="btn btn-primary eliminar_item" title="Finalizar Manifiesto"  href="<?php echo base_url() ?>transporte/manifiestos/finalizar/<?php echo $item->id_manifiesto ?>"><i class="fa fa-eraser"></i></a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          <?php else: ?>
            <p> No hay manifiestos </p>
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


