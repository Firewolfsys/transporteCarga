<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Usuarios Plataforma WEB </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/usuario_admin') ?>">Usuarios</a></li>
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
            <h3 class="card-title">Visualización Información del Cliente <?php echo $datos->username ?></h3>
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
                    <label>Nombre</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->nombre ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Creada</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->telefono ?>" disabled>
                  </div>



                </form>
              </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <a class="btn btn-info" href="<?php echo base_url() ?>clientes/clientes_usuarios/lista/<?php echo $clienteid ?>"><i class="fa fa-undo"></i> Volver atrás </a>
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