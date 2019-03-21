<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

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
          <li class="breadcrumb-item"><a href="<?= base_url('admin/usuario_admin') ?>">Usuarios</a></li>
          <li class="breadcrumb-item active">Guardar Usuario</li>
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
            <h3 class="card-title">Modificación Información del cliente <?php echo $datos->nombre ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo base_url() ?>clientes/clientes_usuarios/guardar_post/<?php echo $datos->id_cliente ?>/<?php echo $datos->id ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text"  name="username" class="form-control" required="required" value="<?php echo $datos->username ?>" >
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password"  name="password" class="form-control"   >
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text"  name="nombre" class="form-control" required="required" value="<?php echo $datos->nombre ?>" >
                    </div>
                     <div class="form-group">
                        <label>Telefono</label>
                        <input type="text"  name="telefono" class="form-control" required="required" value="<?php echo $datos->telefono ?>" >
                    </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email"  name="email" class="form-control" required="required" value="<?php echo $datos->email ?>" >
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>clientes/clientes_usuarios/lista/<?php echo $clienteid ?>"><i class="fa fa-undo"></i> Cancelar </a>
                </div>
            </form>

        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

  <!-- Control pie de pagina -->
  <?php $this->load->view('main/pie_pagina')?> 
  <!-- /.control-pie de pagina -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('main/scripts')?> 




</body>
</html>