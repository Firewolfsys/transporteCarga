<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Menus del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('transporte/pilotos') ?>">pilotos</a></li>
          <li class="breadcrumb-item active">Guardar Menu</li>
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
            <h3 class="card-title">pilotos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo base_url() ?>transporte/pilotos/guardar_post/<?php echo $datos['id_piloto']; ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>nombres</label>
                        <input type="text"  name="nombres" class="form-control" required="required" value="<?php echo $datos['nombres'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>apellidos</label>
                        <input type="text"  name="apellidos" class="form-control" required="required" value="<?php echo $datos['apellidos'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>identificacion</label>
                        <input type="text"  name="identificacion" class="form-control" required="required" value="<?php echo $datos['identificacion'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>licencia tipo</label>
                        <input type="text"  name="licencia_tipo" class="form-control" required="required" value="<?php echo $datos['licencia_tipo'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>licencia</label>
                        <input type="text"  name="licencia" class="form-control" required="required" value="<?php echo $datos['licencia'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>fecha ingreso</label>
                        <input type="text"  name="fecha_ingreso" class="form-control" required="required" value="<?php echo $datos['fecha_ingreso'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>Pago Mensual</label>
                        <input type="text"  name="pago_mensual" class="form-control" required="required" value="<?php echo $datos['pago_mensual'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>Bonificacion Ley</label>
                        <input type="text"  name="bonificacion_ley" class="form-control" required="required" value="<?php echo $datos['bonificacion_ley'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>Bonificacion Incentivo</label>
                        <input type="text"  name="bonificacion_incentivo" class="form-control" required="required" value="<?php echo $datos['bonificacion_incentivo'] ?>" >
                    </div>
                    <div class="form-group">
                        <label>Estado Piloto</label>
                        <input type="text"  name="id_piloto_estado" class="form-control" required="required" value="<?php echo $datos['id_piloto_estado'] ?>" >
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
                        <label>direccion</label>
                        <input type="text"  name="direccion" class="form-control" required="required" value="<?php echo $datos['direccion'] ?>" >
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>transporte/pilotos"><i class="fa fa-undo"></i> Cancelar </a>
                </div>
            </form>

        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

