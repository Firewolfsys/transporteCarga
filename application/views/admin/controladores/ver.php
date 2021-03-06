<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->
  
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
          <li class="breadcrumb-item"><a href="<?= base_url('admin/menus') ?>">Menus</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/controladores/ControladorByMenu')."/".$datos->menuid ?>">Controladores</a></li>
          <li class="breadcrumb-item active">Controlador</li>
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
            <h3 class="card-title">Controlador</h3>
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
                    <label>Controlador</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->controlador; ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Orden</label>
                    <input type="text" class="form-control" placeholder="<?php echo ($datos->orden) ?>" disabled>
                  </div>
                </form>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a class="btn btn-info" href="<?= base_url('admin/controladores/ControladorByMenu')."/".$datos->menuid ?>"><i class="fa fa-undo"></i> Volver atrás </a>
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