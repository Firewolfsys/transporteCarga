<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Lugares_Model extends CI_Model {


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
    
    public function guardar($lugar, $id=null){
      $data = array(
         'lugar' => $lugar
      );
      if($id){
         $this->db->where('id_lugar', $id);
         $this->db->update('lugares', $data);
      }else{
         $this->db->insert('lugares', $data);
      } 
    }
    public function eliminar($id){
       $this->db->where('id_Lugar', $id);
       $this->db->delete('Lugares');
    }

    public function obtener_por_id($id){
       $this->db->select('id_lugar, lugar');
       $this->db->from('lugares');
       $this->db->where('id_lugar', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('id_lugar, lugar');
       $this->db->from('lugares');
       $this->db->order_by('lugar', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}