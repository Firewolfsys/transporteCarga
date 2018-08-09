<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Estados_piloto_model extends CI_Model {


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
    
    public function guardar($estado, $id=null){
      $data = array(
         'estado' => $estado
      );
      if($id){
         $this->db->where('id_piloto_estado', $id);
         $this->db->update('pilotos_estado', $data);
      }else{
         $this->db->insert('pilotos_estado', $data);
      } 
    }
    public function eliminar($id){
       $this->db->where('id_piloto_estado', $id);
       $this->db->delete('pilotos_estado');
    }

    public function obtener_por_id($id){
       $this->db->select('id_piloto_estado, estado');
       $this->db->from('pilotos_estado');
       $this->db->where('id_piloto_estado', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('id_piloto_estado, estado');
       $this->db->from('pilotos_estado');
       $this->db->order_by('estado', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}