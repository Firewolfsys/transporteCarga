<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Manifiestos con Guias pendientes de traslado</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Traslado de Manifiestos</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content"> 
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Manifiestos con Guias pendientes de traslado</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
            <form role="form" method="post" action="<?php echo base_url() ?>transporte/manifiestos_traslado/" >
            <div align="center" class="pull-right">
               Piloto: 
             <select class="form-control select2" name="id_piloto">
              <option value="0" >TODOS</option>
                            <?php foreach ($parametros['pilotos'] as $list): ?> 
                            <option value="<?php echo $list->id_piloto ?>" <?php if($list->id_piloto==$parametros['id_piloto']) echo "selected"  ?>><?php echo($list->nombres." ".$list->apellidos) ?> </option>
                            <?php endforeach; ?>
                        </select>
                        &nbsp;
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar </button>
          </div>  
        </form>
             
          <?php if (count($datos)):  ?>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center" width="5%">No</th>
                <th class="text-center">Piloto</th>
                <th class="text-center">Origen</th>
                <th class="text-center">Destino</th>
                <th> &nbsp; </th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $item): ?>
                  <tr>
                    <td  width="5%"> <?php echo $item->id_manifiesto ?>  </td>
                    <td  > <?php echo $item->piloto ?>  </td>
                    <td  > <?php echo $item->origen ?>  </td>
                    <td  > <?php echo $item->destino ?>  </td>
                    <td width="5%">
                      <div class="btn-group" >
                        <a class="btn btn-primary" title="Traslado de Guias" href="<?php echo base_url() ?>transporte/manifiestos_traslado/ver/<?php echo $item->id_manifiesto ?>"> <i class="fa fa-eye"></i> </a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          <?php else: ?>
            <p> No hay manifiestos </p>
          <?php endif; ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section> 
<!-- /.content -->


  <!-- Control pie de pagina -->
  <?php $this->load->view('main/pie_pagina')?> 
  <!-- /.control-pie de pagina -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('main/scripts')?> 




</body>
</html>