<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class tipo_servicio_model extends CI_Model {


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
    
    public function guardar($tipo_servicio, $id=null){
      $data = array(
         'tipo_servicio' => $tipo_servicio
      );
      if($id){
         $this->db->where('id_tipo_servicio', $id);
         $this->db->update('tipo_servicio', $data);
      }else{
         $this->db->insert('tipo_servicio', $data);
      } 
    }
    public function eliminar($id){
       $this->db->where('id_tipo_servicio', $id);
       $this->db->delete('tipo_servicio');
    }

    public function obtener_por_id($id){
       $this->db->select('id_tipo_servicio, tipo_servicio');
       $this->db->from('tipo_servicio');
       $this->db->where('id_tipo_servicio', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('id_tipo_servicio, tipo_servicio');
       $this->db->from('tipo_servicio');
       $this->db->order_by('tipo_servicio', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}