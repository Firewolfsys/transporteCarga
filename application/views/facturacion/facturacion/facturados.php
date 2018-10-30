<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Facturas Pendientes de Pago</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Facturas pendientes de pago</li>
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
          <h3 class="card-title">Facturas Pendientes de Pago</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <br>
            <form role="form" method="post" action="<?php echo base_url() ?>facturacion/facturacion/obtener_facturados" >
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
          </div>  
        </form>
          <?php if (count($datos)):  ?>
            <table id="example1" class="table table-bordered table-striped">
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
                        <a class="btn btn-primary" title="Marcar factura como pagada" href="<?php echo base_url() ?>facturacion/facturacion/factura_pagada/<?php echo $item->id_documento ?>"> <i class="fa fa-edit"></i> </a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          <?php else: ?>
            <p> No hay facturas pendientes de pago </p>
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