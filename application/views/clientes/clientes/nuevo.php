<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Clientes del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('clientes/clientes') ?>">clientes</a></li>
          <li class="breadcrumb-item active">Guardar Cliente</li>
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
            <h3 class="card-title">Clientes</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo base_url() ?>clientes/clientes/guardar_post/<?php echo $datos['id_cliente']; ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>nombre comercial</label>
                        <input type="text"  name="nombre_comercial" class="form-control" required="required" value="<?php echo $datos['nombre_comercial'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>Razon Social</label>
                        <input type="text"  name="razon_social" class="form-control" required="required" value="<?php echo $datos['razon_social'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>nit</label>
                        <input type="text"  name="nit" class="form-control" required="required" value="<?php echo $datos['nit'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>direccion</label>
                        <input type="text"  name="direccion" class="form-control" required="required" value="<?php echo $datos['direccion'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>telefono</label>
                        <input type="text"  name="telefono" class="form-control" required="required" value="<?php echo $datos['telefono'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text"  name="email" class="form-control" required="required" value="<?php echo $datos['email'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>fecha ingreso</label>
                        <input type="date"  name="fecha_ingreso" class="form-control" required="required" value="<?php echo $datos['fecha_ingreso'] ?>" >
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="pago_mensual" type="checkbox"  >
                            <label class="form-check-label">Activo para pagos mensuales</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="activo" type="checkbox"  checked='checked'>
                            <label class="form-check-label">Activo</label>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>clientes/clientes"><i class="fa fa-undo"></i> Cancelar </a>
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