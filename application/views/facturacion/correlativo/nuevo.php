<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Correlativo de documentos</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('facturacion/tipo_doctos') ?>">Tipo Documentos</a></li>
          <li class="breadcrumb-item active">Guardar Correlativo Documento</li>
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
            <h3 class="card-title">Correlativo Documento</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo base_url() ?>facturacion/correlativo/guardar_post/<?php echo $datos['correlativo_doctoid']; ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Serie</label>
                        <input type="text"  name="serie" class="form-control" required="required" value="<?php echo $datos['serie'] ?>" >
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                        <label>correlativo_inicial</label>
                        <input type="text"  name="correlativo_inicial" class="form-control" required="required" value="<?php echo $datos['correlativo_inicial'] ?>" >
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                        <label>correlativo_final</label>
                        <input type="text"  name="correlativo_final" class="form-control" required="required" value="<?php echo $datos['correlativo_final'] ?>" >
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                        <label>correlativo_toca</label>
                        <input type="text"  name="correlativo_toca" class="form-control" required="required" value="<?php echo $datos['correlativo_toca'] ?>" >
                    </div>
                    <input type="hiden" name="tipo_doctoid" value="<?php echo $datos['tipo_doctoid'] ?>" >
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>facturacion/correlativo"><i class="fa fa-undo"></i> Cancelar </a>
                </div>
            </form>

        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

