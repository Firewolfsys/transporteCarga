<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->


<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Pilotos del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('transporte/pilotos') ?>">Pilotos</a></li>
          <li class="breadcrumb-item active">Guardar Piloto</li>
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
            <h3 class="card-title">Piloto</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo base_url() ?>transporte/pilotos/guardar_post/<?php echo $datos->id_piloto; ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text"  name="nombres" class="form-control" required="required" value="<?php echo $datos->nombres ?>" >
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text"  name="apellidos" class="form-control" required="required" value="<?php echo $datos->apellidos ?>" >
                    </div>
                    <div class="form-group">
                        <label>Identificacion</label>
                        <input type="text"  name="identificacion" class="form-control" required="required" value="<?php echo $datos->identificacion ?>" >
                    </div>
                    <div class="form-group">
                        <label>Tipo Licencia</label>
                        <input type="text"  name="licencia_tipo" class="form-control" required="required" value="<?php echo $datos->licencia_tipo ?>" >
                    </div>
                    <div class="form-group">
                        <label>licencia</label>
                        <input type="text"  name="licencia" class="form-control" required="required" value="<?php echo $datos->licencia ?>" >
                    </div>
                    <div class="form-group">
                        <label>Fecha Ingreso</label>
                        <input type="date" name="fecha_ingreso" max="3000-12-31" min="1000-01-01" class="form-control" required="required" value="<?php echo $datos->fecha_ingreso ?>" >
                    </div>
 

                    <div class="form-group">
                        <label>Pago Mensual</label>
                        <input type="text"  name="pago_mensual" class="form-control" required="required" value="<?php echo $datos->pago_mensual ?>" >
                    </div>
                    <div class="form-group">
                        <label>Bonificacion Ley</label>
                        <input type="text"  name="bonificacion_ley" class="form-control" required="required" value="<?php echo $datos->bonificacion_ley ?>" >
                    </div>
                    <div class="form-group">
                        <label>Bonificacion Incentivo</label>
                        <input type="text"  name="bonificacion_incentivo" class="form-control" required="required" value="<?php echo $datos->bonificacion_incentivo ?>" >
                    </div>
                    <div class="form-group">
                        <label>Estado Piloto</label>
                         <!-- select -->
                        <select class="form-control select2" name="id_piloto_estado">
                            <?php foreach ($parametros as $list): ?> 
                            <option value="<?php echo $list->id_piloto_estado ?>" <?php if($list->id_piloto_estado==$datos->id_piloto_estado) echo "selected"  ?> ><?php echo $list->estado ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>telefono</label>
                        <input type="text"  name="telefono" class="form-control" required="required" value="<?php echo $datos->telefono ?>" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text"  name="email" class="form-control" required="required" value="<?php echo $datos->email ?>" >
                    </div>
                    <div class="form-group">
                        <label>Direccion</label>
                        <input type="text"  name="direccion" class="form-control" required="required" value="<?php echo $datos->direccion ?>" >
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

  <!-- Control pie de pagina -->
  <?php $this->load->view('main/pie_pagina')?> 
  <!-- /.control-pie de pagina -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('main/scripts')?> 




</body>
</html>