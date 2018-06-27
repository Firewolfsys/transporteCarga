<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Menus_model extends CI_Model {


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
    
    public function get_menus_NavBar($user_id){
        $this->db->select('*');
        $this->db->from('menus');
        $this->db->join('controladores','controladores.controladorID = menus.controladorID');
        return $this->db->get();
    }


    public function guardar($nombre, $icono, $orden, $id=null){
      $data = array(
         'nombre' => $nombre,
         'icono' => $icono,
         'orden' => $orden
      );
      if($id){
         $this->db->where('menuid', $id);
         $this->db->update('menus', $data);
      }else{
         $this->db->insert('menus', $data);
      } 
    }
    public function eliminar($id){
       $this->db->where('menuid', $id);
       $this->db->delete('menus');
    }

    public function obtener_por_id($id){
       $this->db->select('menuid, nombre, icono, orden');
       $this->db->from('menus');
       $this->db->where('menuid', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('menuID, nombre');
       $this->db->from('menus');
       $this->db->order_by('orden', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}