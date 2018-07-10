<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class TipoDoctos_model extends CI_Model {


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
         $this->db->where('tipo_doctoid', $id);
         $this->db->update('tipo_doctos', $data);
      }else{
         $this->db->insert('tipo_doctos', $data);
      } 
    }
    public function eliminar($id){
       $this->db->where('tipo_doctoid', $id);
       $this->db->delete('tipo_doctos');
    }

    public function obtener_por_id($id){
       $this->db->select('tipo_doctoid, descripcion');
       $this->db->from('tipo_doctos');
       $this->db->where('tipo_doctoid', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('tipo_doctoid, descripcion');
       $this->db->from('tipo_doctos');
       $this->db->order_by('descripcion', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}