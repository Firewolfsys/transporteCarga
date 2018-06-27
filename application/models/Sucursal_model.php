<?php
class Sucursal_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		public function get_news($user_id)
		{
			$this->db->from('vusuario_sucursal');
			$this->db->where('user_id', $user_id);
			return $this->db->get()->result_array();
                //$query = $this->db->get('vusuario_sucursal');
                //return $query->result_array();
		}			
		
}