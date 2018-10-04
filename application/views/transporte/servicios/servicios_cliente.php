<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->
    <!--error-->
            <?php if ($resultado!="") : ?>
              <div class="alert alert-<?= $claseresultado ?> alert-dismissible fade show" role="alert" id="success-alert">
              <strong><?= $resultado ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <?php endif; ?>
            <!--termina error-->
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Servicios por cliente</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('transporte/servicios') ?>">Servicios por cliente</a></li>
          <li class="breadcrumb-item active">Detalle de servicios por cliente</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<body onload="onload()"></body>
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Servicio</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="" >
                <div class="card-body">
                    <!-- text input -->
                    <div class="row">
                     <div class="col-md-4">
                       <div class="form-group">
                     <label><strong>Servicio</strong></label>
                    <input type="text"  name="servicio" class="form-control" required="required" value="<?php echo $datos->descripcion ?>" disabled>
                  </div>
                    </div>
                    </div>
                </div>
            </form>
<!-- Main content -->
<section class="content"> 
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Detalle de servicios por cliente</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
          <div align="right" class="pull-right">
            <a class="btn btn-primary" href="" data-toggle="modal" onclick="editar('0.00','0.00','0.00','0');" data-target=".bd-example-modal-sm"><i class="fa fa-plus"></i> Agregar nuevo cliente</a>

          </div>          
          <?php if (count($detalle_lista)):  ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center" width="10%">Cliente</th>
                      <th class="text-center">Peso Maximo</th>
                      <th class="text-center">Precio Publico</th>
                      <th class="text-center">Precio Peso Adicional</th>
                      <th width="1%"> &nbsp; </th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($detalle_lista as $item): ?>
                        <tr>
                          <td width="10%"> <?php echo $item->nombre_comercial ?>  </td>
                           <td  > <?php echo $item->peso_maximo ?>  </td>
                            <td  > <?php echo 'Q. '.$item->precio ?>  </td>
                            <td  > <?php echo 'Q. '.$item->precio_peso_adicional ?>  </td>
                           <td width="1%">
                      <div class="btn-group">
                        <a class="btn btn-primary" title="Modificar servicio por cliente" onclick="editar(<?php echo $item->peso_maximo ?>,<?php echo $item->precio ?>,<?php echo $item->precio_peso_adicional ?>,<?php echo $item->id_serviciocliente ?>);" href ="" data-toggle="modal" data-target=".bd-example-modal-sm"> <i class="fa fa-edit"></i></a>
                        <a class="btn btn-primary eliminar_item" title="Eliminar servicio por cliente" href="<?php echo base_url() ?>transporte/servicios/eliminar_servicio_cliente/<?php echo $item->id_serviciocliente ?>/<?php echo $item->id_servicio?>"> <i class="fa fa-eraser"></i> </a> 
                      </div>
                    </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>

                  </table>
                <?php else: ?>
                      <p> No existen clientes para este servicio</p>
          <?php endif; ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
       <div class="card-footer">
                <a class="btn btn-info" href="<?= base_url('transporte/servicios') ?>"><i class="fa fa-undo"></i> Volver atrás </a>
            </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section> 
<!-- /.content -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<div class="modal fade bd-example-modal-sm" role="dialog" id="myModal" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Ingreso de nuevo cliente al servicio y/o producto</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="form-guia" method="post" action="<?php echo base_url() ?>transporte/servicios/guardar_servicio_cliente/<?php echo $datos->id_servicio ?>" >
                <div class="card-body">
                <input type="hidden"  id="id_serviciocliente" name="id_serviciocliente" class="form-control" value="0">
                 <div class="form-group">
                    <label><strong>Cliente<FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_cliente" id="id_cliente">
                            <?php foreach ($clientes_lista as $list): ?> 
                            <option value="<?php echo $list->id_cliente ?>"><?php echo $list->nombre_comercial ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
                   <div class="form-group">
                        <label>Peso maximo</label>
                        <input type="number" placeholder="0.00"  step="any" id="peso_maximo" name="peso_maximo" class="form-control" required="required"  >
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" placeholder="0.00"  step="any" id="precio_publico" name="precio_publico" class="form-control" required="required"  >
                    </div> 
                    <div class="form-group">
                        <label>Precio Peso Adicional</label>
                        <input type="number" placeholder="0.00"  step="any"  id="precio_peso_adicional" name="precio_peso_adicional" class="form-control" required="required" >
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" id="agregar" class="btn btn-primary"><i class="fa fa-save"></i>Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
     </div>

        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
    </div>
  </div>
</div>


  <!-- Control pie de pagina -->
  <?php $this->load->view('main/pie_pagina')?> 
  <!-- /.control-pie de pagina -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('main/scripts')?> 

<style type="text/css">
  .select2-container {
    width: 100% !important;
    padding: 0;
}
</style>

<script>
function editar(peso_maximo, precio, precio_peso_adicional, id_serviciocliente)
{
  if(id_serviciocliente != "0")
  {
    document.getElementById("id_serviciocliente").value = id_serviciocliente;
    document.getElementById("peso_maximo").value = peso_maximo;
    document.getElementById("precio_peso_adicional").value = precio_peso_adicional;
    document.getElementById("precio_publico").value = precio;
    document.getElementById("id_cliente").disabled = true;
  }
  else
  {
    document.getElementById("id_serviciocliente").value = id_serviciocliente;
    document.getElementById("peso_maximo").value = peso_maximo;
    document.getElementById("precio_peso_adicional").value = precio_peso_adicional;
    document.getElementById("precio_publico").value = precio;
    document.getElementById("id_cliente").disabled = false;
  }

}

$("#success-alert").fadeTo(2000, 800).slideUp(800, function(){
    $("#success-alert").slideUp(800);
});
</script>

</body>
</html>

