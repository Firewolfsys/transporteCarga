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
        $this->db->select('controladorid, nombre, controlador, orden, menuid');
        $this->db->from('controladores');
        $this->db->where('controladorid', $id);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
 
     public function obtener_todos($menuID){
        $this->db->select('controladorID, nombre, controlador, MenuID');
        $this->db->from('controladores');
        $this->db->where('menuid', $menuID);
        $this->db->order_by('orden', 'asc');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function guardar($nombre, $controlador, $orden, $menuid, $id=null){
        $data = array(
           'nombre'         => $nombre,
           'controlador'    => $controlador,
           'orden'          => $orden,
           'menuid'         => $menuid
        );
        if($id){
           $this->db->where('controladorid', $id);
           $this->db->update('controladores', $data);
        }else{
           $this->db->insert('controladores', $data);
        } 
    }

    public function eliminar($id){
        $this->db->where('controladorid', $id);
        $this->db->delete('controladores');
    }


    public function obtener_todos_por_rol($menuID, $rolid){
        $this->db->select('controladorID, nombre, controlador, MenuID');
        $this->db->from('controladores');
        $this->db->where('menuid', $menuID);
        $this->db->order_by('orden', 'asc');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }


    public function obtener_todos_porRol($menuID,$rolid){

        $queryString =  " select c.controladorID, c.nombre, c.controlador, c.MenuID ";
        $queryString .= " from  roles_permisos rp";
        $queryString .= " inner join controladores c on rp.controladorid = c.controladorid"; 
        $queryString .= " inner join menus m on c.menuid = m.menuid";
        $queryString .= " inner join roles r on rp.rolid = r.rolid";
        $queryString .= " where rp.rolid = ".$rolid." and m.menuid = ".$menuID;
        $queryString .= " order by c.orden asc ";
        $query = $this->db->query($queryString);
        
        $resultado = $query->result();
        return $resultado;
     }

}