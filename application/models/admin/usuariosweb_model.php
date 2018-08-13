<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Usuariosweb_model extends CI_Model {


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
    
    public function guardar($username, $email, $avatar, $rolid, $password, $id=null){
      $data = array(
         'username' => $username,
         'email' => $email, 
         'avatar' => $avatar,
         'rolid' => $rolid,
         'password' => $password,
         'updated_at' => date('Y-m-d')
      );
      if($id){
         $this->db->where('id', $id);
         $this->db->update('users', $data);
      }else{
         $this->db->insert('users', $data);
      } 
    }
    public function eliminar($id){
        $data = array(
            'is_deleted' => true
         );
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function obtener_por_id($id){
       $this->db->select('id, username, password, email, avatar, us.rolid, rol.descripcion, created_at, updated_at, is_deleted');
       $this->db->from('users us');
       $this->db->join('roles rol',' us.rolid = rol.rolid ');
       $this->db->where('id', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('id, username, avatar');
       $this->db->from('users');
       $this->db->order_by('username', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
}