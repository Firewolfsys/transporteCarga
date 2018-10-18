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
  $direccion, $telefono, $email, $fecha_ingreso, $activo, $aplica_pago_mensual, $vendedores ,$id=null){
    $data = array(
        'nombre_comercial' => $nombre_comercial,
        'razon_social' => $razon_social,
        'nit' => $nit,
        'direccion' => $direccion,
        'telefono' => $telefono,
        'email' => $email,
        'fecha_ingreso' => $fecha_ingreso,
        'activo' => $activo,
        'aplica_pago_mensual' => $aplica_pago_mensual,
        'vendedores' => $vendedores
    );
    if($id){
        $this->db->where('id_cliente', $id);
        $this->db->update('clientes', $data);
    }else{
        $this->db->insert('clientes', $data);
    } 
  }
  public function inactivar($id){
             $data = array(
        'activo' => 0
    );
        $this->db->where('id_cliente', $id);
        $this->db->update('clientes', $data);
  }

     public function eliminar($id){
       $this->db->where('id_cliente', $id);
       $this->db->delete('servicio_cliente');
       $this->db->where('id_cliente', $id);
       $this->db->delete('clientes');
    }

    public function obtener_guias_cliente($id){
       $this->db->select('*');
      $this->db->from('guias');
      $this->db->where('id_cliente_envia', $id);
      $this->db->or_where('id_cliente_recibe', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
    }

  public function obtener_por_id($id){
      $this->db->select('id_cliente, nombre_comercial, razon_social, nit, direccion, telefono, email, fecha_ingreso, activo, aplica_pago_mensual');
      $this->db->from('clientes');
      $this->db->where('id_cliente', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

  public function obtener_todos(){
      $this->db->select('*');
      $this->db->from('v_clientes');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
  }

  public function obtener_todos_estado($estado){
    $this->db->select('*');
    $this->db->from('v_clientes');
    
    if($estado != -1 ) $this->db->where('activo', $estado);

    $consulta = $this->db->get();
    $resultado = $consulta->result();
    return $resultado;
  }
}