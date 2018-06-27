<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Controladores_model extends CI_Model {
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

    public function obtener_por_id($id){
        $this->db->select('controladorid, nombre, controlador, orden, menuID');
        $this->db->from('controladores');
        $this->db->where('controladorid', $id);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
     }
 
     public function obtener_todos($menuID){
        $this->db->select('controladorID, nombre');
        $this->db->from('controladores');
        $this->db->where('menuid', $menuID);
        $this->db->order_by('orden', 'asc');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
     }

}