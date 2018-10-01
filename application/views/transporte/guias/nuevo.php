<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->
<script>
function calcular() {
    var envia = document.getElementById("porcentaje_pago_envia");
    var recibe = document.getElementById("porcentaje_pago_recibe");
    if(envia.value>100)
    {
      envia.value = 0;
      recibe.value = 0;
      alert('El valor ingresado para el porcentaje de envio no puede ser mayor a 100!.');
      $('#porcentaje_pago_envia').focus()
    }
    else
    {
    recibe.value = 100 - envia.value;
    calculapago();
    }
}

function seleccion()
{
var tipo_pago = document.getElementById("id_tipo_pago");
var tipo = tipo_pago.options[tipo_pago.selectedIndex].text;
if(tipo=='Mixto')
{
  document.getElementById("porcentaje_pago_envia").readOnly  = false;
  document.getElementById("porcentaje_pago_recibe").readOnly  = true;
    document.getElementById("porcentaje_pago_envia").value= 0;
  document.getElementById("porcentaje_pago_recibe").value = 0;
}
if(tipo=='Paga Envia')
{
  document.getElementById("porcentaje_pago_envia").readOnly  = true;
  document.getElementById("porcentaje_pago_recibe").readOnly  = true;
  document.getElementById("porcentaje_pago_envia").value= 100;
  document.getElementById("porcentaje_pago_recibe").value = 0;
}
if(tipo=='Paga Recibe')
{
  document.getElementById("porcentaje_pago_envia").readOnly  = true;
  document.getElementById("porcentaje_pago_recibe").readOnly  = true;
  document.getElementById("porcentaje_pago_envia").value= 0;
  document.getElementById("porcentaje_pago_recibe").value = 100;
}
calculapago();
}
function calculapago()
{
  var porcentajeenvia = Number(document.getElementById("porcentaje_pago_envia").value);
  var porcentajerecibe = Number(document.getElementById("porcentaje_pago_recibe").value);
  var peso = Number(document.getElementById("peso").value);
  var peso_maximo = Number(document.getElementById("peso_maximo").value);
  var precio = Number(document.getElementById("precio").value);
  var precio_peso_adicional = Number(document.getElementById("precio_peso_adicional").value);
  var peso_adicional = peso_maximo - peso;
  if(peso_adicional < 0)
  {
       if(porcentajeenvia>0 || porcentajerecibe>0)
    {
  var peso_adicional_cobra = peso - peso_maximo;
  document.getElementById("total_pago_envia").value = (((peso_adicional_cobra*precio_peso_adicional)+precio)*porcentajeenvia)/100;
  document.getElementById("total_pago_recibe").value = (((peso_adicional_cobra*precio_peso_adicional)+precio)*porcentajerecibe)/100;
}
  }
  else
  {
    if(porcentajeenvia>0 || porcentajerecibe>0)
    {
  document.getElementById("total_pago_envia").value = ((precio)*porcentajeenvia)/100;
  document.getElementById("total_pago_recibe").value = ((precio)*porcentajerecibe)/100;
  }
  }
}
function disabled()
{
var tipo_pago = document.getElementById("id_tipo_pago");
var tipo = tipo_pago.options[tipo_pago.selectedIndex].text;
if(tipo=='Mixto')
{
  document.getElementById("porcentaje_pago_envia").readOnly  = false;
  document.getElementById("porcentaje_pago_recibe").readOnly  = true;
}
if(tipo=='Paga Envia')
{
  document.getElementById("porcentaje_pago_envia").readOnly  = true;
  document.getElementById("porcentaje_pago_recibe").readOnly  = true;
}
if(tipo=='Paga Recibe')
{
  document.getElementById("porcentaje_pago_envia").readOnly  = true;
  document.getElementById("porcentaje_pago_recibe").readOnly  = true;
}
calculapago();
}

window.onload=disabled;
</script>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Ingreso de nueva Guia</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('transporte/pilotos') ?>">Guia</a></li>
          <li class="breadcrumb-item active">Nueva Guia</li>
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
            <h3 class="card-title">Nueva Guia </h3>
            </div>
            <!-- /.card-header -->
             <!-- form start -->
          <form role="form" method="post" action="<?php echo base_url() ?>transporte/guias/guardar_post/" >
           <div class="card-body">
              <input type="hidden"  id="precio_especial" name="precio_especial" value = "0"/>
             <input type="hidden"  id="peso_maximo" name="peso_maximo" value = "0" />
              <input type="hidden"  id="precio"  name="precio" value ="0" />
              <input type="hidden"  id="precio_peso_adicional" name="precio_peso_adicional" value ="0"/>
            <!--codigo guia-->
            <div class="row">
              <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><strong>Código Guía </strong></span>
                    <input type="text"  name="codigo_guia" class="form-control" required="required" value="" >
                  </div>
              </div>
            </div>
        </br>
            <!-- /.row -->
            <div class="row">
            <div class="col-md-4">
                 <div class="form-group">
                    <label><strong>Cliente que Envía <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2"  id="id_cliente_envia" name="id_cliente_envia">
                            <?php foreach ($clientes_lista as $list): ?> 
                            <option data-precio="<?php echo $list->precio ?>" data-precio_peso_adicional="<?php echo $list->precio_peso_adicional ?>" data-pesomaximo="<?php echo $list->peso_maximo ?>" value="<?php echo $list->id_cliente ?>"><?php echo $list->nombre_comercial ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
              <div class="col-md-4">
                 <div class="form-group">
                  <label><strong>Responsable que Envía <FONT COLOR="red">*</FONT></strong></label>
                  <input type="text"  name="responsable_envia" class="form-control" required="required" value="" >
                </div>
              </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><strong>Teléfono  de quien Envía <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="telefono_envia" class="form-control" required="required" value="" >
                  </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><strong>Lugar Origen <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_lugar_origen">
                            <?php foreach ($lugares_lista as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
            <div class="col-md-8">
                 <div class="form-group">
                    <label><strong>Dirección de quien Envía <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="direccion_envia" class="form-control" required="required" value="" >
                  </div>
            </div>
             <div class="col-md-4">
               <div class="form-group">
                    <label><strong>Cliente que Recibe <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_cliente_recibe">
                            <?php foreach ($clientes_lista as $list): ?> 
                            <option value="<?php echo $list->id_cliente ?>"><?php echo $list->nombre_comercial ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
             <div class="col-md-4">
                 <div class="form-group">
                  <label><strong>Responsable que Recibe <FONT COLOR="red">*</FONT></strong></label>
                  <input type="text"  name="responsable_recibe" class="form-control" required="required" value="" >
                </div>
              </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><strong>Teléfono  de quien Recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="telefono_recibe" class="form-control" required="required" value="" >
                  </div>
            </div>
             <div class="col-md-4">
                 <div class="form-group">
                    <label><strong>Lugar Destino <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_lugar_destino">
                            <?php foreach ($lugares_lista as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
            <div class="col-md-8">
                 <div class="form-group">
                    <label><strong>Dirección de quien Recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="direccion_recibe" class="form-control" required="required" value="" >
                  </div>
            </div>           
            <div class="col-md-4">
               <div class="form-group">
                    <label><strong>Servicio <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" id="id_servicio" name="id_servicio">
                        <option value="">Seleccione el tipo de servicio a vender</option>
                            <?php foreach ($servicios_lista as $list): ?> 
                            <option data-precio="<?php echo $list->precio_publico ?>" data-precio_peso_adicional="<?php echo $list->precio_peso_adicional ?>" data-pesomaximo="<?php echo $list->peso_maximo ?>" value="<?php echo $list->id_servicio ?>"><?php echo $list->descripcion ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
             <div class="col-md-8">
                  <div class="form-group">
                    <label><strong>Tipo de pago <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" id='id_tipo_pago'  onchange="seleccion()" name="id_tipo_pago">
                            <?php foreach ($tipos_pago_lista as $list): ?> 
                            <option value="<?php echo $list->id_tipo_pago ?>"><?php echo $list->tipo_pago ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
            <div class="col-md-4">
             <div class="form-group">
                    <label><strong>Peso <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number" onchange="calculapago()"  name="peso" class="form-control"  id="peso" required="required" value="0" >
                  </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label><strong>% Pago de quien envia <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number" onchange="calcular()" name="porcentaje_pago_envia" id="porcentaje_pago_envia"  class="form-control" required="required" value="0" >
                  </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label><strong>% de pago de quien recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number"  name="porcentaje_pago_recibe" id="porcentaje_pago_recibe"  class="form-control" required="required" value="0" >
                  </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label><strong>Total pago de quien envia </strong></label>
                    <input type="number" id="total_pago_envia"  name="total_pago_envia" class="form-control" required="required" value="" readonly>
                  </div>
            </div>
           <div class="col-md-6">
                <div class="form-group">
                    <label><strong>Total pago de quien recibe </strong></label>
                    <input type="number" id="total_pago_recibe"  name="total_pago_recibe" class="form-control" required="required" value="" readonly>
                  </div>
            </div>
            </div>
            <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>transporte/guias"><i class="fa fa-undo"></i> Regresar </a>
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
<?php $this->load->view('main/scripts')?> 

<script>
$('#id_cliente_envia').change(function () {
var peso_maximo=$(this).find('option:selected').attr('data-pesomaximo');
var precio=$(this).find('option:selected').attr('data-precio');
var precio_peso_adicional=$(this).find('option:selected').attr('data-precio_peso_adicional');
if(peso_maximo > "0.00"|| precio > "0.00" || precio_peso_adicional > "0.00")
{
$('#peso_maximo').val(peso_maximo);
$('#precio').val(precio);
$('#precio_peso_adicional').val(precio_peso_adicional);
$('#precio_especial').val(1);
}else
{
var peso_maximo=$('#id_servicio').find('option:selected').attr('data-pesomaximo');
var precio=$('#id_servicio').find('option:selected').attr('data-precio');
var precio_peso_adicional=$('#id_servicio').find('option:selected').attr('data-precio_peso_adicional');
var peso_maximo_a = $('#peso_maximo').val();
var precio_a = $('#precio').val();
var precio_peso_adicional_a = $('#precio_peso_adicional').val();
$('#peso_maximo').val(peso_maximo);
$('#precio').val(precio);
$('#precio_peso_adicional').val(precio_peso_adicional);
$('#precio_especial').val(0);
}
calculapago();
});

$('#id_servicio').change(function () {
var peso_maximo=$(this).find('option:selected').attr('data-pesomaximo');
var precio=$(this).find('option:selected').attr('data-precio');
var precio_peso_adicional=$(this).find('option:selected').attr('data-precio_peso_adicional');
var precioespecial = $('#precio_especial').val();
if(precioespecial==0)
{
$('#peso_maximo').val(peso_maximo);
$('#precio').val(precio);
$('#precio_peso_adicional').val(precio_peso_adicional);
calculapago();
}
});

</script>


</body>
</html>