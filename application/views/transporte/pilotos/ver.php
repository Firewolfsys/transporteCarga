<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Pilotos</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Pilotos</li>
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
            <h3 class="card-title">Pilotos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
            <div class="card-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nombres</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->nombres ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->apellidos; ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>identificacion</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->identificacion ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Licencia Tipo</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->licencia_tipo ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Licencia</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->licencia ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Fecha Ingreso</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->fecha_ingreso ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Pago Mensual</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->pago_mensual ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Bonificacion Ley</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->bonificacion_ley ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Bonificacion Incentivo</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->bonificacion_incentivo ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Estado</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->id_piloto_estado ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->telefono ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->email ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Direccion</label>
                    <input type="text" class="form-control" placeholder="<?php echo $datos->direccion ?>" disabled>
                  </div>



                </form>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a class="btn btn-info" href="<?= base_url('transporte/pilotos') ?>"><i class="fa fa-undo"></i> Volver atrás </a>
            </div>
            </form>
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

