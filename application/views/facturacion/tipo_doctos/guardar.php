<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tipo de Documento</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('facturacion/tipo_doctos') ?>">Tipo Documento</a></li>
          <li class="breadcrumb-item active">Guardar Tipo Documento</li>
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
            <h3 class="card-title">Tipo Documento</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo base_url() ?>facturacion/tipo_doctos/guardar_post/<?php echo $datos->tipo_doctoid; ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text"  name="descripcion" class="form-control" required="required" value="<?php echo $datos->descripcion ?>" >
                    </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>facturacion/tipo_doctos"><i class="fa fa-undo"></i> Cancelar </a>
                </div>
            </form>

        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

