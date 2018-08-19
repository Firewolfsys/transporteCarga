<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">servicios del Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('transporte/servicios') ?>">servicios</a></li>
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

            <form role="form" method="post" action="<?php echo base_url() ?>transporte/servicios/guardar_post/<?php echo $datos->id_servicio; ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text"  name="descripcion" class="form-control" required="required" value="<?php echo $datos->descripcion ?>" >
                    </div>
                    <div class="form-group">
                        <label>Precio Publico</label>
                        <input type="text"  name="precio_publico" class="form-control" required="required" value="<?php echo $datos->precio_publico ?>" >
                    </div>
                    <div class="form-group">
                        <label>Unidad medida</label>
                         <!-- select -->
                         <select class="form-control select2" name="id_unidad_medida">
                            <?php foreach ($parametros['unidad_medida'] as $list): ?> 
                            <option value="<?php echo $list->id_unidad_medida ?>">  ><?php echo $list->unidad_medida ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Peso Maximo</label>
                        <input type="text"  name="peso_maximo" class="form-control" required="required" value="<?php echo $datos->peso_maximo ?>" >
                    </div>
                    <div class="form-group">
                        <label>Precio peso adicional</label>
                        <input type="text"  name="precio_peso_adicional" class="form-control" required="required" value="<?php echo $datos->precio_peso_adicional ?>" >
                    </div>
                    <div class="form-group">
                        <label>Fecha Creacion</label>
                        <input type="date" name="fecha_creacion" max="3000-12-31" min="1000-01-01" class="form-control" required="required" value="<?php echo $datos->fecha_creacion ?>" >
                    </div>
                    <div class="form-group">
                        <label>Tipo Servicio</label>
                        <!-- select -->
                        <select class="form-control select2" name="id_tipo_servicio">
                            <?php foreach ($parametros['tipos_servicio'] as $list): ?> 
                            <option value="<?php echo $list->id_tipo_servicio ?>" <?php if($list->id_tipo_servicio==$datos->id_tipo_servicio) echo "selected"  ?> ><?php echo $list->tipo_servicio ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="activo" type="checkbox" <?php if ($datos->activo==1)  echo "checked='checked'"; ?>">
                            <label class="form-check-label">Activo</label>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>transporte/servicios"><i class="fa fa-undo"></i> Cancelar </a>
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