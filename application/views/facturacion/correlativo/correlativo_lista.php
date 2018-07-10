<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Correlativo de Documentos</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('facturacion/tipo_doctos') ?>">Tipo Documentos</a></li>
          <li class="breadcrumb-item active">Correlativos</li>
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
          <h3 class="card-title">Correlativos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url() ?>facturacion/correlativo/nuevo/<?php echo $parametros['tipo_doctoid'] ?>"><i class="fa fa-plus"></i> Nuevo</a>
          </div> 
          <?php if (count($datos)):  ?>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center">Codigo</th>
                <th class="text-center">Nombre</th>
                <th> &nbsp; </th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $item): ?>
                  <tr>
                    <td> <?php echo $item->correlativoid ?>  </td>
                    <td> <?php echo $item->serie ?>  </td>
                    <td> <?php echo $item->correlativo_toca ?>  </td>
                    <td width="10%">
                      <div class="btn-group">
                        <a class="btn btn-primary" title="Ver Registro" href="<?php echo base_url() ?>admin/controladores/ver/<?php echo $item->controladorID ?>"> <i class="fa fa-eye"></i> </a>
                        <a class="btn btn-primary" title="Modificar Registro" href="<?php echo base_url() ?>admin/controladores/guardar/<?php echo $item->controladorID ?>"> <i class="fa fa-edit"></i> </a>
                        <a class="btn btn-primary eliminar_item" title="Eliminar Registro" href="<?php echo base_url() ?>admin/controladores/eliminar/<?php echo $item->controladorID ?>"> <i class="fa fa-eraser"></i> </a> 
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          <?php else: ?>
            <p> No hay correlativos </p>
          <?php endif; ?>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->