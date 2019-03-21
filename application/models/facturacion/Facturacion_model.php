<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Facturacion_model extends CI_Model {
    /**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
  	parent::__construct();
		$this->load->database();
  }

   public function obtener_todos($id_cliente){
      $this->db->select('*');
      $this->db->from('v_documentos');
      if($id_cliente!=0){
        $this->db->where('id_cliente', $id_cliente);
      }
      $this->db->order_by('documento_estado_id', 'asc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;

  }

     public function obtener_todos_facturados($id_cliente){
      $this->db->select('*');
      $this->db->from('v_documentos');
      if($id_cliente!=0){
        $this->db->where('id_cliente', $id_cliente);
      }
      $this->db->where('documento_estado_id', 1);
      $this->db->order_by('fecha_creacion', 'desc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;

  }
    
  public function guardarencabezado($id_cliente, $tipo_docto, $fecha_inicio, $fecha_fin, $user_id, $id=null){
  
    if($id){
         $data = array(
        'fecha_inicio' => $fecha_inicio,
        'fecha_fin' => $fecha_fin
        );

        $this->db->where('id_documento', $id);
        $this->db->update('documentos', $data);
    }else{
         //obtenemos el ultimo correlativo generado
          $this->db->select('*');
          $this->db->from('tipo_doctos');
          $this->db->where('tipo_doctoid', $tipo_docto);
          $consultadoctos = $this->db->get();
          $resultadodoctos = $consultadoctos->row();
          $correlativotoca = $resultadodoctos->correlativo_toca;
          //actualizamos el correlativo que toca
          $datacorrelativo = array(
          'correlativo_toca' => $correlativotoca + 1
          );
          $this->db->where('tipo_doctoid', $tipo_docto);
          $this->db->update('tipo_doctos', $datacorrelativo);
         //insertamos el encabezado 
         $data = array(
        'id_cliente' => $id_cliente,
        'fecha_creacion' => date('Y-m-d'),
        'tipo_doctoid' => $tipo_docto,
        'fecha_inicio' => $fecha_inicio,
        'fecha_fin' => $fecha_fin,
        'user_login_id' => $user_id,
        'documento_estado_id' => 1,
        'correlativo' => $correlativotoca
        );
        $this->db->insert('documentos', $data);
        $id = $this->db->insert_id();

    } 
    return $id;
  }

    public function factura_pagada($id_documento){
  
         $data = array(
        'documento_estado_id' => 2,
        'fecha_pagada' => date('Y-m-d H:i:s')
        );
        $this->db->where('id_documento', $id_documento);
        $this->db->update('documentos', $data);
  }



    public function obtener_guias_pendientes($id_cliente, $fecha_inicio, $fecha_fin){
       $this->db->select('*');
       $this->db->from('v_guias_pendientes_facturar');
       $this->db->where('id_cliente', $id_cliente);
       $this->db->where('fecha_creacion >=', $fecha_inicio);
       $this->db->where('fecha_creacion <=', $fecha_fin);
       $this->db->order_by('fecha_creacion', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

    public function facturar_todos($id_documento, $id_cliente,$fecha_inicio, $fecha_fin)
    {
      $guias_pendientes = $this->facturacion_model->obtener_guias_pendientes($id_cliente,$fecha_inicio, $fecha_fin);
      foreach($guias_pendientes as $item):
      $this->facturacion_model->guardar_detalle($id_documento,$item->id_guia,$item->total_pago,$item->tipo_facturar);
      endforeach;
    }


    public function guardar_detalle($id_documento, $id_guia, $total_facturar, $tipo_facturar){
    //insertamos la guia al detalle de la facturacion
    $data = array(
        'id_documento' => $id_documento,
        'id_guia' => $id_guia,
        'tipo_facturar' => $tipo_facturar,
        'total' => $total_facturar
    );
    $this->db->insert('documentos_detalle', $data);
    //actualizamos el total general en el encabezado
    $detalle = $this->facturacion_model->obtener_por_id($id_documento);
    $total_general = $detalle->total_general + $total_facturar;
    $datadocumento = array(
        'total_general' => $total_general
    );
    $this->db->where('id_documento', $id_documento);
    $this->db->update('documentos', $datadocumento);
    //actualizamos lo facturado en la guia.
    if($tipo_facturar==1)
    {
    $dataguia = array(
        'factura_envia' => $total_facturar
    );
    }
    if($tipo_facturar==2)
    {
    $dataguia = array(
        'factura_recibe' => $total_facturar
    );
    }
    $this->db->where('id_guia', $id_guia);
    $this->db->update('guias', $dataguia);
    //validamos si los montos totales de las guias son iguales a los facturados para darla como facturada
    $this->db->select('*');
    $this->db->from('guias');
    $this->db->where('id_guia', $id_guia);
    $consultaguia = $this->db->get();
    $resultadoguia = $consultaguia->row();
    //if($resultadoguia->total_pago_envia == $resultadoguia->factura_envia && $resultadoguia->total_pago_recibe == $resultadoguia->factura_recibe)
    //{
      // $dataguia = array(
       // 'id_guia_estado' => 5
      //);
    //$this->db->where('id_guia', $id_guia);
    //$this->db->update('guias', $dataguia);
    //}
  }

   public function eliminar_detalle($id_documento, $id_guia, $total_facturar, $tipo_facturar, $id_detalle){
    //eliminamos la guia al detalle de la facturacion
    $this->db->where('id_detalle_documento', $id_detalle);
    $this->db->delete('documentos_detalle');
    //actualizamos el total general en el encabezado
    $detalle = $this->facturacion_model->obtener_por_id($id_documento);
    $total_general = $detalle->total_general - $total_facturar;
    $datadocumento = array(
        'total_general' => $total_general
    );
    $this->db->where('id_documento', $id_documento);
    $this->db->update('documentos', $datadocumento);
    if($tipo_facturar==1)
    {
    $dataguia = array(
        'factura_envia' => 0
    );
    }
    if($tipo_facturar==2)
    {
    $dataguia = array(
        'factura_recibe' => 0
    );
    }
    $this->db->where('id_guia', $id_guia);
    $this->db->update('guias', $dataguia);
  }



  public function eliminar($id){
      $this->db->where('id_servicio', $id);
      $this->db->delete('servicio');
  }

  public function obtener_por_id($id){
      $this->db->select('*');
      $this->db->from('documentos');
      $this->db->where('id_documento', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

    public function obtener_encabezado_factura($id){
      $this->db->select('*');
      $this->db->from('v_documentos');
      $this->db->where('id_documento', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

    public function obtener_detalle_factura($id){
      $this->db->select('*');
      $this->db->from('v_documentos_detalle');
      $this->db->where('id_documento', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
  }
 
   public function obtener_detalle($id_documento){
       $this->db->select('a.*,b.*');
       $this->db->from('documentos_detalle a');
       $this->db->join('v_guias b', 'a.id_guia = b.id_guia');
       $this->db->where('a.id_documento', $id_documento);
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }


   public function anular_factura($id_documento){
    //obtenemos todas las  guias del detalle del documento
    $this->db->select('*');
    $this->db->from('documentos_detalle');
    $this->db->where('id_documento', $id_documento);
    $consulta = $this->db->get();
    $resultado = $consulta->result();
    //recoremos todas las guias de la factura para habilitarlas de nuevo para que puedan ser facturadas
    foreach($resultado as $item):
      //eliminamos el detalle
      $this->facturacion_model->eliminar_detalle($id_documento, $item->id_guia, $item->total, $item->tipo_facturar,$item->id_detalle_documento);
    endforeach;
    //eliminamos la informacion del detalle de la factura
       $this->db->where('id_documento', $id_documento);
      $this->db->delete('documentos_detalle');
      //anulamos la factura
      $datadocumento = array(
        'documento_estado_id' => 3
    );
    $this->db->where('id_documento', $id_documento);
    $this->db->update('documentos', $datadocumento);
    }

    private function estadistica_facturas_semanal(){

        $resp = array();
        $dias = array();
  
        $this->db->select('*');
        $this->db->from('vw_factura_semanal');
        $query = $this->db->get();

        
        foreach ($query->result_array() as $value) {
          $estados[]=array(
              "estado" => $value['estado']
          );

          $res[]=array(
              "valor" => $value['cantidad']  
          );
        }
  
  
        $resp = array(
          "estados" => $estados,
          "valores" => $res
        );
  
        return $resp;
    }


    private function estadistica_facturas_mensual(){

        $resp = array();
        $dias = array();
  
        $this->db->select('*');
        $this->db->from('vw_factura_mensual');
        $query = $this->db->get();

        
        foreach ($query->result_array() as $value) {
          $estados[]=array(
              "estado" => $value['estado']
          );

          $res[]=array(
              "valor" => $value['cantidad']  
          );
        }
  
  
        $resp = array(
          "estados" => $estados,
          "valores" => $res
        );
  
        return $resp;
    }

    private function estadistica_facturas_semestral(){

        $resp = array();
        $dias = array();
  
        $this->db->select('*');
        $this->db->from('vw_factura_semestral');
        $query = $this->db->get();

        
        foreach ($query->result_array() as $value) {
          $estados[]=array(
              "estado" => $value['estado']
          );

          $res[]=array(
              "valor" => $value['cantidad']  
          );
        }
  
  
        $resp = array(
          "estados" => $estados,
          "valores" => $res
        );
  
        return $resp;
    }


    public function getEstadisticaFacturas(){
        $res = array(
          "factura_semanal" => $this->estadistica_facturas_semanal()
          ,"factura_mensual" => $this->estadistica_facturas_mensual()
          ,"factura_semestral" => $this->estadistica_facturas_semestral()
        );
        return json_encode($res); 
      }
  
}