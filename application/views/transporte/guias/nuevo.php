<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Ingreso de nueva Guia</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('transporte/pilotos') ?>">Guia</a></li>
          <li class="breadcrumb-item active">Nueva Guia</li>
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
            <h3 class="card-title">Nueva Guia</h3>
            </div>
            <!-- /.card-header -->
             <!-- form start -->
          <form role="form" method="post" action="<?php echo base_url() ?>transporte/guias/guardar_post/" >
           <div class="card-body">
            <!--codigo guia-->
            <div class="row">
              <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><strong>Código Guía</strong></span>
                    <input type="text"  name="codigo_guia" class="form-control" required="required" value="" >
                  </div>
              </div>
            </div>
        </br>
            <!-- /.row -->
            <div class="row">
            <div class="col-md-4">
                 <div class="form-group">
                    <label><strong>Cliente que Envía <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_cliente_envia">
                            <?php foreach ($clientes_lista as $list): ?> 
                            <option value="<?php echo $list->id_cliente ?>"><?php echo $list->nombre_comercial ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
              <div class="col-md-4">
                 <div class="form-group">
                  <label><strong>Responsable que Envía <FONT COLOR="red">*</FONT></strong></label>
                  <input type="text"  name="responsable_envia" class="form-control" required="required" value="" >
                </div>
              </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><strong>Teléfono  de quien Envía <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="telefono_envia" class="form-control" required="required" value="" >
                  </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><strong>Lugar Origen <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_lugar_origen">
                            <?php foreach ($lugares_lista as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
            <div class="col-md-8">
                 <div class="form-group">
                    <label><strong>Dirección de quien Envía <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="direccion_envia" class="form-control" required="required" value="" >
                  </div>
            </div>
             <div class="col-md-4">
               <div class="form-group">
                    <label><strong>Cliente que Recibe <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_cliente_recibe">
                            <?php foreach ($clientes_lista as $list): ?> 
                            <option value="<?php echo $list->id_cliente ?>"><?php echo $list->nombre_comercial ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
             <div class="col-md-4">
                 <div class="form-group">
                  <label><strong>Responsable que Recibe <FONT COLOR="red">*</FONT></strong></label>
                  <input type="text"  name="responsable_recibe" class="form-control" required="required" value="" >
                </div>
              </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><strong>Teléfono  de quien Recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="telefono_recibe" class="form-control" required="required" value="" >
                  </div>
            </div>
             <div class="col-md-4">
                 <div class="form-group">
                    <label><strong>Lugar Destino <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_lugar_destino">
                            <?php foreach ($lugares_lista as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
            <div class="col-md-8">
                 <div class="form-group">
                    <label><strong>Dirección de quien Recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="direccion_recibe" class="form-control" required="required" value="" >
                  </div>
            </div>           
            <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Servicio <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_servicio">
                            <?php foreach ($servicios_lista as $list): ?> 
                            <option value="<?php echo $list->id_servicio ?>"><?php echo $list->descripcion ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <label><strong>Peso <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number"  name="peso" class="form-control" required="required" value="" >
                  </div>
            </div>
             <div class="col-md-4">
                  <div class="form-group">
                    <label><strong>Tipo de pago <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_tipo_pago">
                            <?php foreach ($tipos_pago_lista as $list): ?> 
                            <option value="<?php echo $list->id_tipo_pago ?>"><?php echo $list->tipo_pago ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label><strong>% Pago de quien envia <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number"  name="porcentaje_pago_envia" class="form-control" required="required" value="" >
                  </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label><strong>% de pago de quien recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number"  name="porcentaje_pago_recibe" class="form-control" required="required" value="" >
                  </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label><strong>Total pago de quien envia </strong></label>
                    <input type="number"  name="total_pago_envia" class="form-control" required="required" value="" >
                  </div>
            </div>
           <div class="col-md-6">
                <div class="form-group">
                    <label><strong>Total pago de quien recibe </strong></label>
                    <input type="number"  name="total_pago_recibe" class="form-control" required="required" value="" >
                  </div>
            </div>
            </div>
            <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>transporte/guias"><i class="fa fa-undo"></i> Regresar </a>
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