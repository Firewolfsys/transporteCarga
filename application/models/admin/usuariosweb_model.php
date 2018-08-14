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
    
    public function guardar($username, $email, $password, $avatar, $rolid, $id=null){
      $data = array(
         'username' => $username,
         'email' => $email, 
         'avatar' => $avatar,
         'rolid' => $rolid
      );
      if (isset($password)) 
      {
          $data['password'] = $this->hash_password($password);
        //array.push($data,'password' => $this->hash_password($password));
      }
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
       $this->db->select('id, username, email, password, avatar, u.rolid, r.descripcion,  is_deleted');
       $this->db->from('users u');
       $this->db->join('roles r',' u.rolid = r.rolid');
       $this->db->where('id', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

    public function obtener_todos(){
       $this->db->select('id, username, email, password, avatar, rolid, is_deleted');
       $this->db->from('users');
       $this->db->order_by('username', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

    /**
	 * hash_password function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @return string|bool could be a string on success, or bool false on failure
	 */
	private function hash_password($password) {
		return password_hash($password, PASSWORD_BCRYPT);
	}
	
	/**
	 * verify_password_hash function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return bool
	 */
	private function verify_password_hash($password, $hash) {
		return password_verify($password, $hash);
	}
}