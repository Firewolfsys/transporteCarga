<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Guias_model extends CI_Model {


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
    
    public function guardar($codigo_guia,$direccion_envia,$direccion_recibe,$responsable_envia,$responsable_recibe,$responsable_envia_telefono,$responsable_recibe_telefono,$id_tipo_pago,$porcentaje_pago_envia,$porcentaje_pago_recibe,$id_servicio,$peso,$total_pago_envia,$total_pago_recibe,$id_cliente_envia,$id_cliente_recibe, $id_lugar_origen, $id_lugar_destino,$id_usuario_crea, $id=null){
      if($id){
         $data = array(
         'codigo_guia' => $codigo_guia,
         'direccion_envia' => $direccion_envia,
         'direccion_recibe' => $direccion_recibe,
         'responsable_envia' => $responsable_envia,
         'responsable_recibe' => $responsable_recibe,
         'responsable_envia_telefono' => $responsable_envia_telefono,
         'responsable_recibe_telefono' => $responsable_recibe_telefono,
         'id_tipo_pago' => $id_tipo_pago,
         'porcentaje_pago_envia' => $porcentaje_pago_envia,
         'porcentaje_pago_recibe' => $porcentaje_pago_recibe,
         'id_servicio' => $id_servicio,
         'peso' => $peso,
         'total_pago_envia' => $total_pago_envia,
         'total_pago_recibe' => $total_pago_recibe,
         'id_cliente_envia' => $id_cliente_envia,
         'id_cliente_recibe' => $id_cliente_recibe,
         'id_lugar_origen' => $id_lugar_origen,
         'id_lugar_destino' => $id_lugar_destino
      );
         $this->db->where('id_guia', $id);
         $this->db->update('guias', $data);
      }else{
         $data = array(
         'codigo_guia' => $codigo_guia,
         'direccion_envia' => $direccion_envia,
         'direccion_recibe' => $direccion_recibe,
         'responsable_envia' => $responsable_envia,
         'responsable_recibe' => $responsable_recibe,
         'responsable_envia_telefono' => $responsable_envia_telefono,
         'responsable_recibe_telefono' => $responsable_recibe_telefono,
         'id_tipo_pago' => $id_tipo_pago,
         'id_guia_estado' => 1,
         'porcentaje_pago_envia' => $porcentaje_pago_envia,
         'porcentaje_pago_recibe' => $porcentaje_pago_recibe,
         'id_servicio' => $id_servicio,
         'peso' => $peso,
         'total_pago_envia' => $total_pago_envia,
         'total_pago_recibe' => $total_pago_recibe,
         'id_cliente_envia' => $id_cliente_envia,
         'id_cliente_recibe' => $id_cliente_recibe,
         'id_lugar_origen' => $id_lugar_origen,
         'id_lugar_destino' => $id_lugar_destino,
         'fecha_creacion' => date('Y-m-d'),
         'tipo_usuario_crea' => 2,
         'id_usuario_crea' => $id_usuario_crea
      );
         $this->db->insert('guias', $data);
          $id_guia = $this->db->insert_id();
          $datatracking = array(
         'id_guia' => $id_guia,
         'descripcion' => "Guia Creada",
         'fecha' => date('Y-m-d H:i:s'),
         'id_guia_estado' => 1);
          $this->db->insert('tracking', $datatracking);
      } 
    }

    public function cancelar($id){
               $data = array(
          'id_guia_estado' => 5
      );
          $this->db->where('id_guia', $id);
          $this->db->update('guias', $data);
    }

    public function eliminar($id){
       $this->db->where('id_piloto_estado', $id);
       $this->db->delete('pilotos_estado');
    }

    public function obtener_por_id($id){
       $this->db->select('*');
       $this->db->from('guias');
       $this->db->where('id_guia', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('*');
       $this->db->from('v_guias');
       $this->db->order_by('id_guia_estado', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

    public function obtener_guias_reporte($id_cliente, $id_estado, $fechaI, $fechaF){

      $this->db->select('g.codigo_guia, g.id_cliente_envia, g.id_guia_estado, g.fecha_creacion, g.peso, c.nombre_comercial,  o.lugar lugar_origen, d.lugar lugar_destino, e.estado ');
      $this->db->from('guias g');
      $this->db->join('clientes c', 'g.id_cliente_envia = c.id_cliente ');
      $this->db->join('lugares o','g.id_lugar_origen = o.id_lugar ' );
      $this->db->join('lugares d', 'g.id_lugar_destino = d.id_lugar');
      $this->db->join('guias_estado e', 'g.id_guia_estado = e.id_guia_estado');
      
  
      if($id_cliente!=0){
        $this->db->where('g.id_cliente_envia', $id_cliente);
      }
  
      if($id_estado!=0){
        $this->db->where('g.id_guia_estado', $id_estado);
      }
  
  
      $this->db->where('g.fecha_creacion >=', $fechaI);
      $this->db->where('g.fecha_creacion <=', $fechaF);
  
      $this->db->order_by('g.fecha_creacion', 'desc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
    }
}