<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Facturas Generadas</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Facturas</li>
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
          <h3 class="card-title">Facturas Generadas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
            <form role="form" method="post" action="<?php echo base_url() ?>facturacion/facturacion/" >
            <div align="center" class="pull-right">
               Cliente: 
             <select class="form-control select2" name="id_cliente">
              <option value="0" >TODOS</option>
                            <?php foreach ($clientes as $list): ?> 
                            <option value="<?php echo $list->id_cliente ?>" <?php if($list->id_cliente==$id_cliente) echo "selected"  ?>><?php echo($list->nombre_comercial) ?> </option>
                            <?php endforeach; ?>
                        </select>
                        &nbsp;
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar </button>
               <a class="btn btn-primary" href="<?php echo base_url() ?>facturacion/facturacion/nuevo"><i class="fa fa-plus"></i> Nuevo</a>
          </div>  
        </form>
          <?php if (count($datos)):  ?>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center" width="5%">No. Docto</th>
                <th class="text-center">Tipo Docto</th>
                <th class="text-center">Cliente</th>
                <th class="text-center">Fecha Creacion</th>
                <th class="text-center">Total Facturado</th>
                <th class="text-center">Estado</th>
                <th> &nbsp; </th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $item): ?>
                  <tr>
                    <td  width="5%"> <?php echo $item->correlativo ?>  </td>
                    <td  > <?php echo $item->tipo_docto ?>  </td>
                    <td  > <?php echo $item->cliente ?>  </td>
                    <td  > <?php echo $item->fecha_creacion ?>  </td>
                    <td  > <?php echo $item->total_general ?>  </td>
                    <td  > <?php echo $item->documento_estado ?>  </td>
                    <td width="5%">
                      <div class="btn-group" >
                        <a class="btn btn-primary" title="Ver Factura" href="<?php echo base_url() ?>facturacion/facturacion/ver/<?php echo $item->id_documento ?>"> <i class="fa fa-eye"></i> </a>
                        <?php if($item->documento_estado_id==1) { ?>
                        <a class="btn btn-primary" title="Modificar Factura" href="<?php echo base_url() ?>facturacion/facturacion/editar/<?php echo $item->id_documento ?>"> <i class="fa fa-edit"></i> </a>
                        <a class="btn btn-primary anular_item" title="Anular factura"  href="<?php echo base_url() ?>facturacion/facturacion/anular_factura/<?php echo $item->id_documento ?>"><i class="fa fa-eraser"></i></a>
                      <?php } ?>
                      <a class="btn btn-primary" title="Imprimir Factura Digital" href="<?php echo base_url() ?>facturacion/facturacion/imprimir_fatura/<?php echo $item->id_documento ?>"> <i class="fa fa-print"></i> </a>
                      <a class="btn btn-primary" title="Imprimir Factura Matricial" href="<?php echo base_url() ?>facturacion/facturacion/imprimir_factura_matricial/<?php echo $item->id_documento ?>"> <i class="fa fa-print"></i> </a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          <?php else: ?>
            <p> No hay facturas </p>
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