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
          <li class="breadcrumb-item"><a href="<?= base_url('facturacion/facturacion') ?>">Facturas</a></li>
          <li class="breadcrumb-item active">Guardado de Factura</li>
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
            <h3 class="card-title">Facturas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo base_url() ?>facturacion/facturacion/guardar_encabezado" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Tipo Documento<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="tipo_docto">
                            <?php foreach ($tipo_doctos as $list): ?> 
                            <option value="<?php echo $list->tipo_doctoid ?>"><?php echo $list->descripcion ?> </option>
                            <?php endforeach; ?>
                        </select>
                          </div>
                    </div>
                    </div>
                  <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                            <label><strong>Cliente<FONT COLOR="red">*</FONT></strong></label>
                              <select class="form-control select2" name="id_cliente">
                            <?php foreach ($clientes as $list): ?> 
                            <option value="<?php echo $list->id_cliente ?>"><?php echo $list->nombre_comercial ?> </option>
                            <?php endforeach; ?>
                        </select>
                          </div>
                    </div>
                  </div>
                    <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Fecha Inicio<FONT COLOR="red">*</FONT></strong></label>
                             <input type="date"  name="fecha_inicio" class="form-control" required="required"  >
                          </div>
                    </div>
                        <div class="col-md-6">
                       <div class="form-group">
                            <label><strong>Fecha Fin<FONT COLOR="red">*</FONT></strong></label>
                             <input type="date"  name="fecha_fin" class="form-control" required="required"  >
                          </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>facturacion/facturacion"><i class="fa fa-undo"></i> Cancelar </a>
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