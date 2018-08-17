<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->
  
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Acciones del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/menus') ?>">Menus</a></li>
          
          <li class="breadcrumb-item"><a href="<?= base_url('admin/controladores/ControladorByMenu')."/".$datos->menuid ?>">Controladores</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/acciones/accionesBycontrolador')."/".$datos->menuid ?>">Controladores</a></li>
          
          <li class="breadcrumb-item active">Guardar Accion</li>
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
                <h3 class="card-title">Accion</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo base_url() ?>admin/acciones/guardar_post/<?php echo $datos->accionid; ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text"  name="nombre" class="form-control" required="required" value="<?php echo $datos->nombre ?>" >
                    </div>
                    
                    <input type="hiden" name="controladorid" value="<?php echo $datos->controladorid ?>" />
                    <input type="hiden" name="menuid" value="<?php echo $datos->controladorid ?>" />
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?= base_url('admin/acciones/ControladorByMenu')."/".$datos->controladorid ?>"><i class="fa fa-undo"></i> Cancelar </a>
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