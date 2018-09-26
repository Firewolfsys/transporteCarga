<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Tracking_Model extends CI_Model {


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
    
    public function obtener_tracking($guia){
       $this->db->select('id_guia, codigo_guia, descripcion, estado, fecha, hora');
       $this->db->from('v_tracking');
       $this->db->where('codigo_guia', $guia);
       $this->db->order_by('fecha', 'desc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }
    public function obtener_ultimo_tracking($guia){
       $this->db->select('id_guia, codigo_guia, descripcion, estado, fecha, hora');
       $this->db->from('v_tracking');
       $this->db->where('codigo_guia', $guia);
       $this->db->order_by('id_tracking', 'desc');
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }
}