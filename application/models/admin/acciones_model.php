<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Acciones_model extends CI_Model {
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
        $this->db->select('accionid, nombre, controladorid');
        $this->db->from('acciones');
        $this->db->where('accionid', $id);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
 
     public function obtener_todos($controladorid){
        $this->db->select('a.accionid, a.nombre, a.controladorid, b.menuid');
        $this->db->from('acciones a');
        $this->db->join('controladores b','a.controladorid = b.controladorid', 'left');
        $this->db->where('a.controladorid', $controladorid);
        //$this->db->order_by('orden', 'asc');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function guardar($nombre, $controladorid, $id=null){
        $data = array(
           'nombre'         => $nombre,
           'controladorID'  => $controladorid
        );
        if($id){
           $this->db->where('accionid', $id);
           $this->db->update('acciones', $data);
        }else{
           $this->db->insert('acciones', $data);
        } 
    }

    public function eliminar($id){
        $this->db->where('accionid', $id);
        $this->db->delete('acciones');
    }

}