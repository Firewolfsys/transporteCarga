<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">clientes</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Clientes</li>
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
            <h3 class="card-title">Cliente</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
            <div class="card-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nombre Comercial</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->nombre_comercial ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Razon Social</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->razon_social; ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nit</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->nit ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Direccion</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->direccion ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->telefono ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="<?php echo $datos->email ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Fecha Ingreso</label>
                    <input type="date" class="form-control" placeholder="<?php echo $datos->fecha_ingreso ?>" disabled>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?php if ($datos->aplica_pago_mensual==1)  echo "checked='checked'" ; ?>"  disabled>
                        <label class="form-check-label">Activo para pagos mensuales</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?php if ($datos->activo==1)  echo "checked='checked'" ; ?>"  disabled>
                        <label class="form-check-label">Activo</label>
                    </div>
                  </div>


                </form>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a class="btn btn-info" href="<?= base_url('clientes/clientes') ?>"><i class="fa fa-undo"></i> Volver atrás </a>
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