<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class pilotos_model extends CI_Model {


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
    
  public function guardar($nombres, $apellidos, $identificacion, 
  $licencia_tipo, $licencia, $fecha_ingreso, $pago_mensual, 
  $bonificacion_ley, $bonificacion_incentivo, $id_piloto_estado, 
  $telefono, $email, $direccion, $id=null){
    $data = array(
        'nombres' => $nombres,
        'apellidos' => $apellidos,
        'identificacion' => $identificacion,
        'licencia_tipo' => $licencia_tipo,
        'licencia' => $licencia,
        'fecha_ingreso' => $fecha_ingreso,
        'pago_mensual' => $pago_mensual,
        'bonificacion_ley' => $bonificacion_ley,
        'bonificacion_incentivo' => $bonificacion_incentivo,
        'id_piloto_estado' => $id_piloto_estado,
        'telefono' => $telefono,
        'email' => $email,
        'direccion' => $direccion
    );
    if($id){
        $this->db->where('id_piloto', $id);
        $this->db->update('pilotos', $data);
    }else{
        $this->db->insert('pilotos', $data);
    } 
  }
  public function darbaja($id){
       $data = array(
        'id_piloto_estado' => 3
    );
        $this->db->where('id_piloto', $id);
        $this->db->update('pilotos', $data);
  }

  public function obtener_por_id($id){
      $this->db->select('*');
      $this->db->from('v_pilotos');
      $this->db->where('id_piloto', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

  public function obtener_todos(){
      $this->db->select('id_piloto, nombres, apellidos, identificacion, licencia_tipo, licencia, fecha_ingreso, pago_mensual, bonificacion_ley, bonificacion_incentivo, id_piloto_estado, telefono, email, direccion, estado');
      $this->db->from('v_pilotos');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
  }

  public function obtener_todos_estado($id_piloto_estado){
    $this->db->select('id_piloto, nombres, apellidos, identificacion, licencia_tipo, licencia, fecha_ingreso, pago_mensual, bonificacion_ley, bonificacion_incentivo, id_piloto_estado, telefono, email, direccion, estado');
    $this->db->from('v_pilotos');

    if($id_piloto_estado !=0)
    {
        $this->db->where('id_piloto_estado', $id_piloto_estado);
    }

    $consulta = $this->db->get();
    $resultado = $consulta->result();
    return $resultado;
}
}