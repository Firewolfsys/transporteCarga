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
    
    public function get_menus_NavBar($controlador){

        $this->db->select('m.menuid, m.nombre, m.icono, c.controladorid, c.nombre nombreC,c.controlador');
        $this->db->from('menus m');
        $this->db->join('controladores c','c.menuid = m.menuid', 'left');
        $this->db->order_by('m.orden', 'asc');
        $this->db->order_by('c.orden', 'asc');
        $this->db->where('c.controlador', $controlador);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
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
       $this->db->select('menuID, nombre,icono');
       $this->db->from('menus');
       $this->db->order_by('orden', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

    public function obtener_todos_porRol($rolid){

      $queryString =  " select distinct m.menuID, m.nombre,  m.icono ";
      $queryString .= " from  roles_permisos rp";
      $queryString .= " inner join controladores c on rp.controladorid = c.controladorid"; 
      $queryString .= " inner join menus m on c.menuid = m.menuid";
      $queryString .= " inner join roles r on rp.rolid = r.rolid";
      $queryString .= " where rp.rolid = ".$rolid;
      $queryString .= " order by m.orden asc ";
      $query = $this->db->query($queryString);
      
      $resultado = $query->result();
      return $resultado;
   }


}