<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class tipos_pago_model extends CI_Model {


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
    
    public function guardar($tipo_pago, $id=null){
      $data = array(
         'tipo_pago' => $tipo_pago
      );
      if($id){
         $this->db->where('id_tipo_pago', $id);
         $this->db->update('tipos_pago', $data);
      }else{
         $this->db->insert('tipos_pago', $data);
      } 
    }
    public function eliminar($id){
       $this->db->where('id_tipo_pago', $id);
       $this->db->delete('tipos_pago');
    }

    public function obtener_por_id($id){
       $this->db->select('id_tipo_pago, tipo_pago');
       $this->db->from('tipos_pago');
       $this->db->where('id_tipo_pago', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('id_tipo_pago, tipo_pago');
       $this->db->from('tipos_pago');
       $this->db->order_by('tipo_pago', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}