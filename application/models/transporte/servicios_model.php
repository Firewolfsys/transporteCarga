<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class servicios_model extends CI_Model {


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
    
  public function guardar($descripcion, $precio_publico, $id_unidad_medida, 
  $peso_maximo, $precio_peso_adicional, $fecha_creacion, $id_tipo_servicio, 
  $activo,  $id=null){
    $data = array(
        'descripcion' => $descripcion,
        'precio_publico' => $precio_publico,
        'id_unidad_medida' => $id_unidad_medida,
        'peso_maximo' => $peso_maximo,
        'precio_peso_adicional' => $precio_peso_adicional,
        'fecha_creacion' => $fecha_creacion,
        'id_tipo_servicio' => $id_tipo_servicio,
        'activo' => $activo
    );
    if($id){
        $this->db->where('id_servicio', $id);
        $this->db->update('servicio', $data);
    }else{
        $this->db->insert('servicio', $data);
    } 
  }
  public function eliminar($id){
      $this->db->where('id_servicio', $id);
      $this->db->delete('servicio');
  }

  public function obtener_por_id($id){
      $this->db->select('id_servicio, descripcion, precio_publico, id_unidad_medida, peso_maximo, precio_peso_adicional, fecha_creacion, id_tipo_servicio, activo');
      $this->db->from('servicio');
      $this->db->where('id_servicio', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

  public function obtener_todos(){
      $this->db->select('id_servicio, descripcion, precio_publico, id_unidad_medida, peso_maximo, precio_peso_adicional, fecha_creacion, id_tipo_servicio, activo');
      $this->db->from('servicio');
      $this->db->order_by('descripcion', 'asc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
  }
}