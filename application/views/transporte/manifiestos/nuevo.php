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
          <li class="breadcrumb-item"><a href="<?= base_url('transporte/servicios') ?>">Manifiestos</a></li>
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
            <h3 class="card-title">Manifiestos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo base_url() ?>transporte/manifiestos/guardar_encabezado/<?php echo $datos['id_manifiesto']; ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                            <label><strong>Piloto<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_piloto">
                            <?php foreach ($parametros['pilotos'] as $list): ?> 
                            <option value="<?php echo $list->id_piloto ?>"><?php echo $list->nombres ?> </option>
                            <?php endforeach; ?>
                        </select>
                          </div>
                    </div>
                    </div>
                    <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Origen<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_lugar_origen">
                            <?php foreach ($parametros['lugares'] as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
                          </div>
                    </div>
                      <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Destino<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_lugar_destino">
                            <?php foreach ($parametros['lugares'] as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
                          </div>
                    </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>transporte/manifiestos"><i class="fa fa-undo"></i> Cancelar </a>
                </div>
            </form>

        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->