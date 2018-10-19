
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
            <h3 class="card-title">Cliente</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo base_url() ?>clientes/clientes/guardar_post/<?php echo $datos->id_cliente; ?>" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nombre Comercial</label>
                        <input type="text"  name="nombre_comercial" class="form-control" required="required" value="<?php echo $datos->nombre_comercial ?>" >
                    </div>
                    <div class="form-group">
                        <label>Razon Social</label>
                        <input type="text"  name="razon_social" class="form-control" required="required" value="<?php echo $datos->razon_social ?>" >
                    </div>
                    <div class="form-group">
                        <label>Nit</label>
                        <input type="text"  name="nit" class="form-control" required="required" value="<?php echo $datos->nit ?>" >
                    </div>
                    <div class="form-group">
                        <label>direccion</label>
                        <input type="text"  name="direccion" class="form-control" required="required" value="<?php echo $datos->direccion ?>" >
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
                        <label>Fecha Ingreso</label>
                        <input type="date"  name="fecha_ingreso" class="form-control" required="required" value="<?php echo $datos->fecha_ingreso ?>" >
                    </div>
                     <div class="form-group">
                      <label>Vendedor asignado</label>
                      <select class="form-control select2" multiple="multiple" required="required" name="vendedores[]" data-placeholder="Seleccione vendedores"
                              style="width: 100%;">
                         <?php foreach ($vendedoresseleccionados as $list): ?> 
                                <option value="<?php echo $list->id ?>" selected><?php echo $list->username ?> </option>
                         <?php endforeach; ?>
                          <?php foreach ($vendedorespendientes as $list): ?> 
                                <option value="<?php echo $list->id ?>"><?php echo $list->username ?> </option>
                         <?php endforeach; ?>
                      </select>
                    </div>
                    <!-- checkbox -->
                     <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="pago_mensual" type="checkbox" <?php if ($datos->aplica_pago_mensual==1)  echo "checked='checked'" ; ?>" >
                            <label class="form-check-label">Activo para pagos mensuales</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="activo" type="checkbox" <?php if ($datos->activo==1)  echo "checked='checked'" ; ?>" >
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
<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- DataTables -->
<script src="<?= base_url('plugins/datatables/jquery.dataTables.js')?>"></script>
<script src="<?= base_url('plugins/datatables/dataTables.bootstrap4.js')?>"></script>
<!-- SlimScroll -->
<script src="<?= base_url('plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?= base_url('plugins/fastclick/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('dist/js/adminlte.min.js')?>"></script>



<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="<?= base_url('plugins/sparkline/jquery.sparkline.min.js')?>"></script>
<!-- jVectorMap -->
<script src="<?= base_url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script src="<?= base_url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
<!-- ChartJS 1.0.2 -->
<script src="<?= base_url('plugins/chartjs-old/Chart.min.js')?>"></script>
<!-- PAGE SCRIPTS  --> 
<script src="<?= base_url('dist/js/pages/administracion.js')?>"></script>
<!-- Select2 -->
<script src="<?= base_url('plugins/select2/select2.full.min.js')?>"></script>
<!-- date-range-picker -->
<script src="<?= base_url('plugins/daterangepicker/moment.min.js')?>"></script>
<script src="<?= base_url('plugins/daterangepicker/daterangepicker.js')?>"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>

<script>
  $(function () {
    $("#example1").DataTable();
    $("#table1").DataTable();
    $("#table2").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
   $("#example3").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
  });
</script>







</body>
</html>