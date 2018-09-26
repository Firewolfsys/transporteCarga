</br></br></br></br></br></br></br></br></br>
<div class="panel panel-primary">
  <div class="panel-heading"><h3 class="card-title"><?php echo($titulo); ?></h3></div>
  <div class="panel-body">
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
          <form role="form" method="post" action="<?php echo base_url() ?>guias/guardar_post/<?php echo $datos->id_guia ?>" >
           <div class="card-body">
            <!--codigo guia-->
            <div class="row">
              <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><strong>Código Guía</strong></span>
                    <input type="text"  name="codigo_guia" class="form-control" required="required" value="<?php echo $datos->codigo_guia ?>">
                  </div>
              </div>
               <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><strong>Fecha Guía</strong></span>
                    <input type="text"  name="fecha_guia" class="form-control" required="required" value="<?php echo $datos->fecha_creacion ?>" <?php echo($disabledheader); ?>>
                  </div>
              </div>
               <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><strong>Estado Guía</strong></span>
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
                       <select class="form-control select2" name="id_cliente_envia" <?php echo($disabled); ?>>
                            <?php foreach ($clientes_lista as $list): ?> 
                            <option value="<?php echo $list->id_cliente ?>" <?php if($list->id_cliente==$datos->id_cliente_envia) echo "selected"  ?>><?php echo $list->nombre_comercial ?> </option>
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
                    <label><strong>Teléfono  de quien Envía <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="telefono_envia" class="form-control" required="required" value="<?php echo $datos->responsable_envia_telefono ?>" <?php echo($disabled); ?>>
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
                    <input type="text"  name="direccion_envia" class="form-control" required="required" value="<?php echo $datos->direccion_envia ?>" <?php echo($disabled); ?>>
                  </div>
            </div>
             <div class="col-md-4">
               <div class="form-group">
                    <label><strong>Cliente que Recibe <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_cliente_recibe" <?php echo($disabled); ?>>
                            <?php foreach ($clientes_lista as $list): ?> 
                            <option value="<?php echo $list->id_cliente ?>"<?php if($list->id_cliente==$datos->id_cliente_recibe) echo "selected"  ?>><?php echo $list->nombre_comercial ?> </option>
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
                    <label><strong>Teléfono  de quien Recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="text"  name="telefono_recibe" class="form-control" required="required" value="<?php echo $datos->responsable_recibe_telefono ?>" <?php echo($disabled); ?>>
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
                    <input type="text"  name="direccion_recibe" class="form-control" required="required" value="<?php echo $datos->direccion_recibe ?>" <?php echo($disabled); ?>>
                  </div>
            </div>           
            <div class="col-md-6">
                  <div class="form-group">
                    <label><strong>Servicio <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_servicio" <?php echo($disabled); ?>>
                            <?php foreach ($servicios_lista as $list): ?> 
                            <option value="<?php echo $list->id_servicio ?>"<?php if($list->id_servicio==$datos->id_servicio) echo "selected"  ?>><?php echo $list->descripcion ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <label><strong>Peso <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number"  name="peso" class="form-control" required="required" value="<?php echo $datos->peso ?>" <?php echo($disabled); ?>>
                  </div>
            </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <label><strong>Tipo de pago <FONT COLOR="red">*</FONT></strong></label>
                       <select class="form-control select2" name="id_tipo_pago" <?php echo($disabled); ?>>
                            <?php foreach ($tipos_pago_lista as $list): ?> 
                            <option value="<?php echo $list->id_tipo_pago ?>"<?php if($list->id_tipo_pago==$datos->id_tipo_pago) echo "selected"  ?>><?php echo $list->tipo_pago ?> </option>
                            <?php endforeach; ?>
                        </select>
                  </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label><strong>% Pago de quien envia <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number"  name="porcentaje_pago_envia" class="form-control" required="required" value="<?php echo $datos->porcentaje_pago_envia ?>" <?php echo($disabled); ?>>
                  </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label><strong>% de pago de quien recibe <FONT COLOR="red">*</FONT></strong></label>
                    <input type="number"  name="porcentaje_pago_recibe" class="form-control" required="required" value="<?php echo $datos->porcentaje_pago_recibe ?>" <?php echo($disabled); ?>>
                  </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label><strong>Total pago de quien envia </strong></label>
                    <input type="number"  name="total_pago_envia" class="form-control" required="required" value="<?php echo $datos->total_pago_envia ?>" <?php echo($disabled); ?>>
                  </div>
            </div>
           <div class="col-md-6">
                <div class="form-group">
                    <label><strong>Total pago de quien recibe </strong></label>
                    <input type="number"  name="total_pago_recibe" class="form-control" required="required" value="<?php echo $datos->total_pago_recibe ?>" <?php echo($disabled); ?>>
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
                    <a class="btn btn-danger" href="<?php echo base_url() ?>guias"><i class="fa fa-undo"></i> Regresar </a>
            </div>         
            </form>

        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

  </div>
</div>




