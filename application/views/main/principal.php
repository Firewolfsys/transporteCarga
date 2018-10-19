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
  <link rel="stylesheet" href="<?= base_url('plugins/datatables/dataTables.bootstrap4.css')?>">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css')?>">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?= base_url('dist/css/fontsgoogle.css')?>">

   <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('plugins/select2/select2.min.css')?>">

  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

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
<?php $this->load->view('main/scripts')?> 
<?php 
    if (isset($scriptJS)) $this->load->view($scriptJS);

  ?>
</body>
</html>