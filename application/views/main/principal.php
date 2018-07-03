<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Administracion | Home</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('plugins/font-awesome/css/font-awesome.min.css')?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('plugins/datatables/dataTables.bootstrap4.min.css')?>">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css')?>">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?= base_url('dist/css/fontsgoogle.css')?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <!-- Navbar -->
  <?php $this->load->view('main/navbar')?> 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('main/mainsidebar',$vista)?> 
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php 
      if (isset($datos)):
        if(isset($parametros)):
          $this->load->view($vista, $datos,$parametros);
        else:
          $this->load->view($vista, $datos);
        endif;
      else: 
         $this->load->view($vista);
      endif;
    ?>
    
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <?php $this->load->view('main/controlsidebar')?> 
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php $this->load->view('main/footer')?> 

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- DataTables -->
<script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('plugins/datatables/dataTables.bootstrap4.min.js')?>"></script>

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

</body>
</html>