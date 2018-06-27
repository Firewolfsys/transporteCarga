<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Controladores del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('menus') ?>">Menus</a></li>
          <li class="breadcrumb-item active">Controladores</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Controladores</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <?php if (count($datos)):  ?>
                    <table id="example1" class="table table-bordered table-striped">
                      <a class="btn btn-info" href="<?php echo base_url() ?>controladores/nuevo"> Nuevo </a>

                      <thead>
                      <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th> &nbsp; </th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php foreach($datos as $item): ?>
                          <tr>
                            <td> <?php echo $item->controladorID ?>  </td>
                            <td> <?php echo $item->nombre ?>  </td>
                            <td>
                              <a class="btn btn-info" href="<?php echo base_url() ?>controladores/ver/<?php echo $item->controladorID ?>"> Ver </a>
                              <a class="btn btn-info" href="<?php echo base_url() ?>controladores/guardar/<?php echo $item->controladorID ?>"> Editar </a>
                              <a class="btn btn-danger eliminar_menu"  href="<?php echo base_url() ?>controladores/eliminar/<?php echo $item->controladorID ?>"> Eliminar </a>
                              <a class="btn btn-info" href="<?php echo base_url() ?>controladores/ControladorByMenu/<?php echo $item->controladorID ?>"> acciones </a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                        <tr>
                        </tr>
                      </tfoot>
                    </table>
                  <?php else: ?>
                    <p> No hay menus </p>
                  <?php endif; ?>
                </div>
                <!-- /.card-body -->
              </div>

        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
</div>
<!-- /.content -->