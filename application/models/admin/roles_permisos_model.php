<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Roles_permisos_model extends CI_Model {
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
        $this->db->select('idroles_permisos, rolID, controladorID');
        $this->db->from('roles_permisos');
        $this->db->where('idroles_permisos', $id);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }

    public function elimina_Permisos_porRol($rolid)
    {
        $this->db->where('rolid', $rolid);
        $this->db->delete('roles_permisos');
    }
 
     public function obtener_todos($rolID){

        $querystring = "select controladorID, nombrecontrolador, menuID,  nombreMenu, 1 as permiso  from  vw_permisos_por_rol pr where pr.rolid = ".$rolID;
        $querystring = $querystring." union ";
        $querystring = $querystring." select controladorID, nombreControlador, menuID, nombreMenu, 0 permiso  from vw_permisos p where p.controladorID not in (";
        $querystring = $querystring." select controladorID  from  vw_permisos_por_rol pr where pr.rolid = ".$rolID." ) order by menuID, controladorID";

        $query = $this->db->query($querystring);

        // $this->db->select(" IF(rp.idroles_permisos IS NULL,'0','1') AS permiso, m.menuid, m.nombre menunombre, m.icono, c.controladorID, c.nombre controladornombre ");
        // $this->db->from('roles_permisos rp');
        // $this->db->join('controladores c',' rp.controladorid = c.controladorid ', 'right');
        // $this->db->join('menus m',' c.menuid = m.menuid ', 'right');
        // $where = "rp.rolid=".$rolID." OR rp.rolid is null";
        // $this->db->where($where);
        // $this->db->order_by('m.orden', 'asc');
        // $this->db->order_by('c.orden', 'asc');
        // $consulta = $this->db->get();
        $resultado = $query->result();
        return $resultado;
    }

    public function guardar($rolid, $controladorid){
        $data = array(
           'rolID'         => $rolid,
           'controladorID'    => $controladorid
        );
        $this->db->insert('roles_permisos', $data);
    }

}