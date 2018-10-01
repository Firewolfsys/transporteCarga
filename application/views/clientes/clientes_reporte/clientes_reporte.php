<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Reporte de Clientes</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Reporte de Clientes</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content"> 
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Filtros</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <!-- /.card-header --> 
        <div class="card-body">
          <form role="form" method="post" action="<?php echo base_url() ?>clientes/clientes_reporte/" >
      
          <div class="row">
            <div class="col-md-6">
              
              <div class="form-group">
                <label>Estado</label>
                
                  <select class="form-control select2" name="estado" id="estado">
                  <option value="-1" <?php if(-1==$parametros['id_estado']) echo "selected"  ?> >Todos</option>
                  <option value="0" <?php if(0==$parametros['id_estado']) echo "selected"  ?>>Inactivos</option>
                  <option value="1" <?php if(1==$parametros['id_estado']) echo "selected"  ?>>Activos</option>
                  </select>  
              </div>  
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->  
        </div>        
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar </button>
          <button type="button" class="btn btn-primary" onclick="relocate_home()"><i class="fa fa-print"></i> Imprimir </button>
        </div>
      </form>
    </div>
    <!-- /.card -->  

      <div class="card card-default">
        <div class="card-header" >
          <h3>Listado Clientes</h3>
        </div>
        <div class="card-body">
             
          <?php if (count($datos)):  ?>
            <table id="example" class="table table-bordered table-striped">
              <thead>
              <tr>

                <th class="text-center">Cliente</th>
                <th class="text-center">Razon Social</th>
                <th class="text-center">Fecha Ingreso</th>
                <th class="text-center">Nit</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Email</th>
                <th class="text-center">Estado</th>
                
                <!--<th> &nbsp; </th>-->
              </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $item): ?>
                  <tr>
                    <td  > <?php echo $item->nombre_comercial ?>  </td>
                    <td  > <?php echo $item->razon_social ?>  </td>
                    <td  > <?php echo date_format(date_create($item->fecha_ingreso), 'd-m-Y'); ?>  </td>

                    <td  > <?php echo $item->nit ?>  </td>
                    <td  > <?php echo $item->telefono ?>  </td>
                    <td  > <?php echo $item->email ?>  </td>
                    <td  > <?php echo $item->estado ?>  </td>

                    
                    <!--<td width="5%">
                      <div class="btn-group" >
                        <a class="btn btn-primary" title="Traslado de Guias" href="<?php echo base_url() ?>transporte/manifiestos_traslado/ver/<?php echo $item->id_manifiesto ?>"> <i class="fa fa-eye"></i> </a>
                      </div>
                    </td>-->
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          <?php else: ?>
            <p> No hay clientes </p>
          <?php endif; ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</section> 
<!-- /.content -->
  <!-- Control pie de pagina -->
  <?php $this->load->view('main/pie_pagina')?> 
  <!-- /.control-pie de pagina -->
<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('main/scripts')?> 
</body>
</html>

<script>
function relocate_home()
{
     var estado = document.getElementById("estado");
     var estadovalue = estado.options[estado.selectedIndex].value;
     window.open('<?php echo base_url() ?>clientes/clientes_reporte/imprimir/'+estadovalue, '_blank');
} 

    
  
</script>