<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class clientes_model extends CI_Model {


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
    
  public function guardar($nombre_comercial, $razon_social, $nit, 
  $direccion, $telefono, $email, $fecha_ingreso, $activo,  $id=null){
    $data = array(
        'nombre_comercial' => $nombre_comercial,
        'razon_social' => $razon_social,
        'nit' => $nit,
        'direccion' => $direccion,
        'telefono' => $telefono,
        'email' => $email,
        'fecha_ingreso' => $fecha_ingreso,
        'activo' => $activo
    );
    if($id){
        $this->db->where('id_cliente', $id);
        $this->db->update('clientes', $data);
    }else{
        $this->db->insert('clientes', $data);
    } 
  }
  public function eliminar($id){
      $this->db->where('id_cliente', $id);
      $this->db->delete('clientes');
  }

  public function obtener_por_id($id){
      $this->db->select('id_cliente, nombre_comercial, razon_social, nit, direccion, telefono, email, fecha_ingreso, activo');
      $this->db->from('clientes');
      $this->db->where('id_cliente', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

  public function obtener_todos(){
      $this->db->select('id_cliente, nombre_comercial, razon_social, nit, direccion, telefono, email, fecha_ingreso, activo');
      $this->db->from('clientes');
      $this->db->order_by('nombre_comercial', 'asc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
  }
}