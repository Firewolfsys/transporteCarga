

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Usuarios del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/usuario_admin') ?>">Usuarios Admin</a></li>
          <li class="breadcrumb-item active">Usuarios Admin</li>
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
            <h3 class="card-title">Usuario Administracion</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
            <div class="card-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->username ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="<?php echo $datos->email; ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Avatar</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->avatar ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Creada</label>
                    <input type="date" name="fecha_created" max="3000-12-31" min="1000-01-01" class="form-control"  value="<?php echo $datos->created_at ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Rol</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->descripcion ?>" disabled>
                  </div>
                  
                  <div class="form-group">
                    <label>Actualizado</label>
                    <input type="date" name="fecha_updated" max="3000-12-31" min="1000-01-01" class="form-control"  value="<?php echo $datos->updated_at ?>" disabled>

                  </div>


                </form>
              </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <a class="btn btn-info" href="<?php echo base_url() ?>admin/usuario_admin"><i class="fa fa-undo"></i> Volver atrás </a>
            </div>
            </form>
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

