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
  var peso_adicional_cobra = peso - peso_maximo;
  document.getElementById("total_pago_envia").value = (((peso_adicional_cobra*precio_peso_adicional)+precio)*porcentajeenvia)/100;
  document.getElementById("total_pago_recibe").value = (((peso_adicional_cobra*precio_peso_adicional)+precio)*porcentajerecibe)/100;
  }
  else
  {
  document.getElementById("total_pago_envia").value = ((precio)*porcentajeenvia)/100;
  document.getElementById("total_pago_recibe").value = ((precio)*porcentajerecibe)/100;
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
        <h1 class="m-0 text-dark">Visualizacion de Guia</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
          <li class="breadcrumb-item active">Guias</li>
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
            <h3 class="card-title">Guia <?php echo $datos->codigo_guia ?></h3>
            </div>
            <!-- /.card-header -->
             <!-- form start -->
             <!--manejo de datos-->
             <!--finaliza manejo de datos-->
          <form role="form" method="post" action="<?php echo base_url() ?>transporte/guias/guardar_post/<?php echo $datos->id_guia ?>" >
           <div class="card-body">
            <input type="hidden"  id="precio_especial" name="precio_especial" value = "<?php echo $datos->precio_especial ?>"/>
             <input type="hidden"  id="peso_maximo" name="peso_maximo" value = "<?php echo $datos->peso_maximo ?>" />
              <input type="hidden"  id="precio"  name="precio" value ="<?php echo $datos->precio ?>" />
              <input type="hidden"  id="precio_peso_adicional" name="precio_peso_adicional" value ="<?php echo $datos->precio_peso_adicional ?>"/>
            <!--codigo guia-->
            <div class="row">
             <div class="col-md-4">
                  <div class="form-group">
                     <label><strong>Codigo Guía <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="codigo_guia" class="form-control" required="required" value="<?php echo $datos->codigo_guia ?>" <?php echo($disabled); ?>>
                  </div>
              </div>
               <div class="col-md-4">
                  <div class="form-group">
                    <label><strong>Fecha Guía <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="fecha_guia" class="form-control" required="required" value="<?php echo $datos->fecha_creacion ?>" <?php echo($disabledheader); ?>>
                  </div>
              </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label><strong>Estado Guía <FONT COLOR="red">*</FONT></strong></label>
                    <select class="form-control select2" name="id_guia_estado" <?php echo($disabledheader); ?>>
                            <?php foreach ($guias_estado_lista as $list): ?> 
                            <option value="<?php echo $list->id_guia_estado ?>"<?php if($list->id_guia_estado==$datos->id_guia_estado) echo "selected"  ?>><?php echo $list->estado ?> </option>
                            <?php endforeach; ?>
                    </select>
                  </div>
              </div>
            </div>
        </br>
            <!-- /.row -->
            <div class="row">
            <div class="col-md-4">
                 <div class="form-group">
                    <label><strong>Cliente que Envía <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" id="id_cliente_envia" name="id_cliente_envia" <?php echo($disabled); ?>>
                            <?php foreach ($clientes_lista as $list): ?> 
                            <option data-precio="<?php echo $list->precio ?>" data-precio_peso_adicional="<?php echo $list->precio_peso_adicional ?>" data-pesomaximo="<?php echo $list->peso_maximo ?>" data-direccion="<?php echo $list->direccion ?>" value="<?php echo $list->id_cliente ?>" <?php if($list->id_cliente==$datos->id_cliente_envia) echo "selected"  ?>><?php echo $list->nombre_comercial ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
              <div class="col-md-4">
                 <div class="form-group">
                  <label><strong>Responsable que Envía <FONT COLOR="red">*</FONT></strong></label>
                  <input type="text"  name="responsable_envia" class="form-control" required="required" value="<?php echo $datos->responsable_envia ?>" <?php echo($disabled); ?>>
                </div>
              </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><strong>Teléfono  de quien Envía</strong></label>
                    <input type="text"  name="telefono_envia" class="form-control"  value="<?php echo $datos->responsable_envia_telefono ?>" <?php echo($disabled); ?>>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><strong>Lugar Origen <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_lugar_origen" <?php echo($disabled); ?>>
                            <?php foreach ($lugares_lista as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"<?php if($list->id_lugar==$datos->id_lugar_origen) echo "selected"  ?>><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
            <div class="col-md-8">
                 <div class="form-group">
                    <label><strong>Dirección de quien Envía <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text" id="direccion_envia" name="direccion_envia" class="form-control" required="required" value="<?php echo $datos->direccion_envia ?>" <?php echo($disabled); ?>>
                  </div>
            </div>
             <div class="col-md-4">
               <div class="form-group">
                    <label><strong>Cliente que Recibe <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" id="id_cliente_recibe" name="id_cliente_recibe" <?php echo($disabled); ?>>
                            <?php foreach ($clientes_lista as $list): ?> 
                            <option data-direccion="<?php echo $list->direccion ?>" value="<?php echo $list->id_cliente ?>"<?php if($list->id_cliente==$datos->id_cliente_recibe) echo "selected"  ?>><?php echo $list->nombre_comercial ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
             <div class="col-md-4">
                 <div class="form-group">
                  <label><strong>Responsable que Recibe <FONT COLOR="red">*</FONT></strong></label>
                  <input type="text"  name="responsable_recibe" class="form-control" required="required" value="<?php echo $datos->responsable_recibe ?>" <?php echo($disabled); ?>>
                </div>
              </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><strong>Teléfono  de quien Recibe</strong></label>
                    <input type="text"  name="telefono_recibe" class="form-control"  value="<?php echo $datos->responsable_recibe_telefono ?>" <?php echo($disabled); ?>>
                  </div>
            </div>
             <div class="col-md-4">
                 <div class="form-group">
                    <label><strong>Lugar Destino <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_lugar_destino" <?php echo($disabled); ?>>
                            <?php foreach ($lugares_lista as $list): ?> 
                            <option value="<?php echo $list->id_lugar ?>"<?php if($list->id_lugar==$datos->id_lugar_destino) echo "selected"  ?>><?php echo $list->lugar ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
            <div class="col-md-8">
                 <div class="form-group">
                    <label><strong>Dirección de quien Recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  id="direccion_recibe" name="direccion_recibe" class="form-control" required="required" value="<?php echo $datos->direccion_recibe ?>" <?php echo($disabled); ?>>
                  </div>
            </div>           
            <div class="col-md-4">
                  <div class="form-group">
                    <label><strong>Servicio <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" id="id_servicio" name="id_servicio" <?php echo($disabled); ?>>
                            <?php foreach ($servicios_lista as $list): ?> 
                            <option data-precio="<?php echo $list->precio_publico ?>" data-precio_peso_adicional="<?php echo $list->precio_peso_adicional ?>" data-pesomaximo="<?php echo $list->peso_maximo ?>" value="<?php echo $list->id_servicio ?>"<?php if($list->id_servicio==$datos->id_servicio) echo "selected"  ?>><?php echo $list->descripcion ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
            <div class="col-md-8">
                   <div class="form-group">
                    <label><strong>Tipo de pago <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" id='id_tipo_pago'  onchange="seleccion()" name="id_tipo_pago" 
                       <?php echo($disabled); ?>>
                            <?php foreach ($tipos_pago_lista as $list): ?> 
                            <option value="<?php echo $list->id_tipo_pago ?>"<?php if($list->id_tipo_pago==$datos->id_tipo_pago) echo "selected"  ?>><?php echo $list->tipo_pago ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label><strong>Peso <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number" onchange="calculapago()"  name="peso" id="peso" class="form-control" required="required" value="<?php echo $datos->peso ?>" <?php echo($disabled); ?>>
                  </div>
              
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label><strong>% Pago de quien envia <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number" onchange="calcular()" id="porcentaje_pago_envia" name="porcentaje_pago_envia" class="form-control" required="required" value="<?php echo $datos->porcentaje_pago_envia ?>" <?php echo($disabled); ?>>
                  </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label><strong>% de pago de quien recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number"  id="porcentaje_pago_recibe" name="porcentaje_pago_recibe" class="form-control" required="required" value="<?php echo $datos->porcentaje_pago_recibe ?>" readonly>
                  </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label><strong>Total pago de quien envia Q. </strong></label>
                    <input type="number" id="total_pago_envia"  name="total_pago_envia" class="form-control" required="required" value="<?php echo $datos->total_pago_envia ?>" readonly>
                  </div>
            </div>
           <div class="col-md-6">
                <div class="form-group">
                    <label><strong>Total pago de quien recibe Q. </strong></label>
                    <input type="number"  id="total_pago_recibe" name="total_pago_recibe" class="form-control" required="required" value="<?php echo $datos->total_pago_recibe ?>" readonly>
                  </div>
            </div>
            </div>
            <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if( $disabled==""){?>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar </button>
                  <?php } ?>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>transporte/guias"><i class="fa fa-undo"></i> Regresar </a>
            </div>         
            </form>
              </div>
            <!-- /.card-body -->
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
//var direccion_envia=$(this).find('option:selected').attr('data-direccion');
var peso_maximo=$(this).find('option:selected').attr('data-pesomaximo');
var precio=$(this).find('option:selected').attr('data-precio');
var precio_peso_adicional=$(this).find('option:selected').attr('data-precio_peso_adicional');
//$('#direccion_envia').val(direccion_envia);
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

//$('#id_cliente_recibe').change(function () {
//var direccion_envia=$(this).find('option:selected').attr('data-direccion');;
//$('#direccion_envia').val(direccion_envia);
//});

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