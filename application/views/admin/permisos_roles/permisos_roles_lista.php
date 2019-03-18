<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->
  

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Permisos del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/roles') ?>">Roles</a></li> 
          <li class="breadcrumb-item active">Permisos</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Permisos</h3>
        </div>
        <!-- /.card-header -->
        <form role="form" method="post" action="<?php echo base_url() ?>admin/roles_permisos/guardar_post/<?php echo $parametros['rolid'] ?>" >

            <div class="card-body">
                <?php if (count($datos)):  ?>
                    <?php  $menuview = 0; ?>
                    <div class="card-columns">
                        <?php foreach($datos as $item): ?>
                            <?php if ($menuview != $item->MenuID and $menuview !=0): ?>
                                </div>
                            </div>  
                            <?php endif ?>
                            <?php if ($menuview != $item->MenuID): ?>

                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h5 class="card-title"><?php echo $item->nombreMenu ?></h5>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <p class="card-text">
                                            <label>
                                                <input type="checkbox" class="minimal" name="checkPermisos[]" value="<?php echo $item->controladorID ?>"  <?php echo ($item->permiso==1 ? 'checked' : '');?> >
                                                <?php echo $item->nombreControlador ?>
                                            </label>                                       
                                        </p>
                            <?php else: ?>
                                        <p class="card-text">
                                            <label>
                                                <input type="checkbox" class="minimal" name="checkPermisos[]" value="<?php echo $item->controladorID ?>" <?php echo ($item->permiso==1 ? 'checked' : '');?>>
                                                <?php echo $item->nombreControlador ?>
                                            </label> 
                                        </p>
                            <?php endif ?>
                            <?php if ($menuview != $item->MenuID) { $menuview = $item->MenuID; } ?>
                        <?php endforeach; ?>
                            </div>
                        </div>  
                    </div>
                <?php else: ?>
                    <p> No hay permisos </p>
                <?php endif; ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                <a class="btn btn-danger" href="<?= base_url('admin/roles') ?>"><i class="fa fa-undo"></i> Cancelar </a>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->

  <!-- Control pie de pagina -->
  <?php $this->load->view('main/pie_pagina')?> 
  <!-- /.control-pie de pagina -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('main/scripts')?> 




</body>
</html>