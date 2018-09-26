<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Reporte de Guias</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Reporte de Guias</li>
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
          <form role="form" method="post" action="<?php echo base_url() ?>transporte/guias_reporte/" >
      
          <div class="row">
            <div class="col-md-6">
              
              <div class="form-group">
                <label>Estado</label>
                
                  <select class="form-control select2" name="estado" id="estado">
                    <option value="0">Todos</option>
                    <option value="1" <?php if(1==$parametros['id_estado']) echo "selected"  ?>>Vigentes</option>
                    <option value="2" <?php if(2==$parametros['id_estado']) echo "selected"  ?>>Finalizados</option>
                  </select>
              </div>  
              <!-- /.form-group -->
              <div class="form-group">
                <label>Cliente</label>
                <select class="form-control select2" name="id_cliente" id="id_cliente">
                  <option value="0" >TODOS</option>
                  <?php foreach ($parametros['clientes'] as $list): ?> 
                  <option value="<?php echo $list->id_cliente ?>" <?php if($list->id_cliente==$parametros['id_cliente']) echo "selected"  ?>><?php echo($list->nombre_comercial) ?> </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <!-- /.form-group -->
              </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Fechas</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                  </div>
                  <input type="text" class="form-control float-right" name="rangofecha" id="rangofecha" value="<?php echo $parametros['id_rango'] ?>" >
                  
                </div>
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
          <h3>Listado Guias</h3>
        </div>
        <div class="card-body">
             
          <?php if (count($datos)):  ?>
            <table id="example" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center">Piloto</th>
                <th class="text-center">Origen</th>
                <th class="text-center">Destino</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Estado</th>
                <!--<th> &nbsp; </th>-->
              </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $item): ?>
                  <tr>
                    <td  > <?php echo $item->nombres." ".$item->apellidos ?>  </td>
                    <td  > <?php echo $item->lugar_origen ?>  </td>
                    <td  > <?php echo $item->lugar_destino ?>  </td>
                    <td  > <?php echo date_format(date_create($item->fecha_creacion), 'd-m-Y'); ?>  </td>
                    <td  > <?php 
                              switch($item->finalizado) {
                                case 0: 
                                    echo "Vigente";
                                    break;
                                case 1:
                                    echo "Finalizado";
                                    break;
                              }
                    
                    
                    
                          ?>  
                  
                    </td>
                    
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
            <p> No hay manifiestos </p>
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
     var piloto = document.getElementById("id_piloto");
     var estado = document.getElementById("estado");
     var rango  = document.getElementById("rangofecha");
     var pilotovalue = piloto.options[piloto.selectedIndex].value;
     var estadovalue = estado.options[estado.selectedIndex].value;
     var rangovalue = rango.value;

     //alert("piloto " + pilotovalue );
     //alert("estado " + estadovalue );
     //alert("rango " + rangovalue );

     //location.href = '<?php echo base_url() ?>transporte/manifiestos_reporte/impirmir/'+value;
     window.open('<?php echo base_url() ?>transporte/manifiestos_reporte/imprimir/'+pilotovalue+'/'+estadovalue+'/'+rangovalue, '_blank');
     // var url = '<?php echo base_url() ?>transporte/manifiestos_reporte/';
    // $.post(
     // url,
     // { id_piloto: value},
     // function(data) {
     //   alert("Response: " + data);
     // }
     //  );
} 

  $(function () {
    //Date range picker 
    $('#rangofecha').daterangepicker(
    {
      format             : 'DD-MM-YYYY'
    })
    
  })
</script>