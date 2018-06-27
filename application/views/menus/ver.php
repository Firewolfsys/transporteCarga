

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Menus del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('menus') ?>">Menus</a></li>
          <li class="breadcrumb-item active">Menu</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Menu</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
            <div class="card-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->nombre ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Icono</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->icono; ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Orden</label>
                    <input type="text" class="form-control" placeholder="<?php echo ($datos->orden) ?>" disabled>
                  </div>




                </form>
              </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <a class="btn btn-info" href="<?php echo base_url() ?>menus"><i class="fa fa-undo"></i> Volver atrás </a>
            </div>
            </form>
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

