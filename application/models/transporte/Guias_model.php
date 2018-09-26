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
         'tipo_usuario_crea' => 1,
         'id_usuario_crea' => $id_usuario_crea
      );
      if($id){
         $this->db->where('id_guia', $id);
         $this->db->update('guias', $data);
      }else{
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
       $this->db->order_by('fecha_creacion', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}