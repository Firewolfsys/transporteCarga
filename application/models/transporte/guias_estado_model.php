<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Guias_Estado_Model extends CI_Model {


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
         $this->db->where('id_guia_estado', $id);
         $this->db->update('guias_estado', $data);
      }else{
         $this->db->insert('guias_estado', $data);
      } 
    }
    public function eliminar($id){
       $this->db->where('id_guia_estado', $id);
       $this->db->delete('guias_estado');
    }

    public function obtener_por_id($id){
       $this->db->select('id_guia_estado, estado');
       $this->db->from('guias_estado');
       $this->db->where('id_guia_estado', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('id_guia_estado, estado');
       $this->db->from('guias_estado');
       $this->db->order_by('estado', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}