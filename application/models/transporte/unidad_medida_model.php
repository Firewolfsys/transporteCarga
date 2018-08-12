<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Unidad_Medida_Model extends CI_Model {


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
    
    public function guardar($unidad_medida, $id=null){
      $data = array(
         'unidad_medida' => $unidad_medida
      );
      if($id){
         $this->db->where('id_unidad_medida', $id);
         $this->db->update('unidad_medida', $data);
      }else{
         $this->db->insert('unidad_medida', $data);
      } 
    }
    public function eliminar($id){
       $this->db->where('id_unidad_medida', $id);
       $this->db->delete('unidad_medida');
    }

    public function obtener_por_id($id){
       $this->db->select('id_unidad_medida, unidad_medida');
       $this->db->from('unidad_medida');
       $this->db->where('id_unidad_medida', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('id_unidad_medida, unidad_medida');
       $this->db->from('unidad_medida');
       $this->db->order_by('unidad_medida', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}