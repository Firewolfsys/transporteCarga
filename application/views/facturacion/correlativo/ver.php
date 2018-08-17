<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Correlativo de los Documentos</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('facturacion/tipo_doctos') ?>">Tipo Documentos</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('facturacion/correlativo/CorrelativoByTipoDocto')."/".$datos->tipo_doctoid ?>">Correlativos</a></li>
          <li class="breadcrumb-item active">Correlativo</li>
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
            <h3 class="card-title">Correlativo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
            <div class="card-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->serie ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>correlativo_inicial</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->correlativo_inicial; ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>correlativo_final</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->correlativo_final ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>correlativo_toca</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->correlativo_toca ?>" disabled>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?php if ($datos->correlativo_usa==1)  echo "checked='checked'" ?> disabled>
                        <label class="form-check-label">Correlativo en uso</label>
                    </div>
                  </div>
                </form>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a class="btn btn-info" href="<?= base_url('facturacion/correlativo/CorrelativoByTipoDocto')."/".$datos->tipo_doctoid ?>"><i class="fa fa-undo"></i> Volver atrás </a>
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