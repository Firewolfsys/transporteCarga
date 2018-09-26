<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- DataTables -->
<script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('plugins/datatables/dataTables.bootstrap4.js')?>"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="<?= base_url('plugins/sparkline/jquery.sparkline.min.js')?>"></script>
<!-- jVectorMap -->
<script src="<?= base_url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script src="<?= base_url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?= base_url('plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?= base_url('plugins/fastclick/fastclick.js')?>"></script>
<!-- ChartJS 1.0.2 -->
<script src="<?= base_url('plugins/chartjs-old/Chart.min.js')?>"></script>

<!-- AdminLTE App -->
<script src="<?= base_url('dist/js/adminlte.js')?>"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('dist/js/demo.js')?>"></script>

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