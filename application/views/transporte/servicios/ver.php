<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">servicios</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">servicios</li>
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
            <h3 class="card-title">servicios</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
            <div class="card-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->descripcion ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Precio Publico</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->precio_publico; ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Unidad Medida</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->unidad_medida ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Peso Maximo</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->peso_maximo ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Precio Peso Adicional</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->precio_peso_adicional ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Fecha Creacion</label>
                    <input type="date" max="3000-12-31" min="1000-01-01" class="form-control" required="required" value="<?php echo $datos->fecha_creacion ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Tipo Servicio</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->tipo_servicio ?>" disabled>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?php if ($datos->activo==1)  echo "checked='checked'" ?>  disabled>
                        <label class="form-check-label">Activo</label>
                    </div>
                  </div>
                </form>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a class="btn btn-info" href="<?= base_url('transporte/servicios') ?>"><i class="fa fa-undo"></i> Volver atrás </a>
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