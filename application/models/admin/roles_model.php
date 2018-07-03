<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Roles_model extends CI_Model {


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
    
    public function guardar($descripcion, $id=null){
      $data = array(
         'descripcion' => $descripcion
      );
      if($id){
         $this->db->where('rolid', $id);
         $this->db->update('roles', $data);
      }else{
         $this->db->insert('roles', $data);
      } 
    }
    public function eliminar($id){
       $this->db->where('rolid', $id);
       $this->db->delete('roles');
    }

    public function obtener_por_id($id){
       $this->db->select('rolid, descripcion');
       $this->db->from('roles');
       $this->db->where('rolid', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('rolid, descripcion');
       $this->db->from('roles');
       $this->db->order_by('descripcion', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}