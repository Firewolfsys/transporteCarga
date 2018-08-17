<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

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
            <form role="form" method="post" action="<?php echo base_url() ?>transporte/manifiestos/guardar_encabezado/<?php echo $datos->id_manifiesto ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                            <label><strong>Piloto<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_piloto" >
                            <?php foreach ($parametros['pilotos'] as $list): ?> 
                            <option value="<?php echo $list->id_piloto ?>" <?php if($list->id_piloto==$datos->id_piloto) echo "selected"  ?>><?php echo $list->nombres ?> </option>
                            <?php endforeach; ?>
                        </select>
                          </div>
                    </div>
                    </div>
                    <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Origen<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_lugar_origen" >
                            <?php foreach ($parametros['lugares'] as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"<?php if($list->id_lugar==$datos->id_lugar_origen) echo "selected"  ?>><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
                          </div>
                    </div>
                      <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Destino<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_lugar_destino" >
                            <?php foreach ($parametros['lugares'] as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"<?php if($list->id_lugar==$datos->id_lugar_destino) echo "selected"  ?>><?php echo $list->lugar ?> </option>
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
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Guias en Manifiesto</h3>
            </div>
             <?php if (count($parametros['detalle_lista'])):  ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center" width="10%">No. Guia</th>
                      <th class="text-center">Origen</th>
                      <th class="text-center">Destino</th>
                      <th class="text-center" width="15%">Fecha Creacion</th>
                      <th class="text-center" width="15%">Estado</th>
                      <th> &nbsp; </th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($parametros['detalle_lista'] as $item): ?>
                        <tr>
                          <td width="10%"> <?php echo $item->codigo_guia ?>  </td>
                          <td> <?php echo $item->lugar_origen ?>  </td>
                          <td> <?php echo $item->lugar_destino ?>  </td>
                          <td width="15%"> <?php echo $item->fecha_creacion ?>  </td>
                          <td width="15%"> <?php echo $item->estado ?>  </td>
                          <td width="10%">
                            <div class="btn-group">
                              <a class="btn btn-primary" title="Ver Guia" href="<?php echo base_url() ?>verguia/<?php echo $item->id_guia ?>"> <i class="fa fa-eye"></i> </a>
                              <a class="btn btn-primary" title="Modificar Guia" href="<?php echo base_url() ?>editarguia/<?php echo $item->id_guia ?>"> <i class="fa fa-edit"></i></a>
                              <a class="btn btn-primary" title="Ver Tracking" href="<?php echo base_url() ?>tracking/ver_tracking/<?php echo $item->codigo_guia ?>"> <i class="fa fa-list"></i></a>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>

                  </table>
                <?php else: ?>
                      <p> No existen guias en manifiesto</p>
          <?php endif; ?>
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
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