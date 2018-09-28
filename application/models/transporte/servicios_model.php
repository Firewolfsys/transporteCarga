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
  $peso_maximo, $precio_peso_adicional, $id_tipo_servicio, 
  $activo,  $id=null){
    $data = array(
        'descripcion' => $descripcion,
        'precio_publico' => $precio_publico,
        'id_unidad_medida' => $id_unidad_medida,
        'peso_maximo' => $peso_maximo,
        'precio_peso_adicional' => $precio_peso_adicional,
        'fecha_creacion' => date('Y-m-d H:i:s'),
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
      $this->db->select('id_servicio, descripcion, precio_publico, ser.id_unidad_medida, um.unidad_medida, peso_maximo, precio_peso_adicional, fecha_creacion, ser.id_tipo_servicio, tser.tipo_servicio, activo');
      $this->db->from('servicio ser');
      $this->db->join('tipo_servicio tser','ser.id_tipo_servicio = tser.id_tipo_servicio');
      $this->db->join('unidad_medida um', 'ser.id_unidad_medida = um.id_unidad_medida');
      $this->db->where('id_servicio', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

  public function obtener_todos(){
       $this->db->select('id_servicio, descripcion, precio_publico, ser.id_unidad_medida, um.unidad_medida, peso_maximo, precio_peso_adicional, fecha_creacion, ser.id_tipo_servicio, tser.tipo_servicio, activo,(case when activo=1 then "activo" else "inactivo" end) as estado');
      $this->db->from('servicio ser');
      $this->db->join('tipo_servicio tser','ser.id_tipo_servicio = tser.id_tipo_servicio');
      $this->db->join('unidad_medida um', 'ser.id_unidad_medida = um.id_unidad_medida');
      $this->db->order_by('estado', 'asc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
  }

   public function inactivar($id){
             $data = array(
        'activo' => 0
    );
        $this->db->where('id_servicio', $id);
        $this->db->update('servicio', $data);
  }

   public function obtener_servicios_cliente($id_servicio){
       $this->db->select('*');
       $this->db->from('servicio_cliente');
       $this->db->where('id_servicio', $id_servicio);
       //$this->db->order_by('fecha_creacion', 'desc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

    public function validar_guia_hija_cargada($codigo_guia_hija){
      $this->db->select('*');
      $this->db->from('guias_hijas');
      $this->db->where('codigo_guia_hija', $codigo_guia_hija);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

  public function guardar_guia_hija($id_guia, $codigo_guia_hija){
    //insertamos la guia al detalle del manifiesto
    $data = array(
        'id_guia ' => $id_guia,
        'codigo_guia_hija' => $codigo_guia_hija,
        'fecha_creacion' => date('Y-m-d H:i:s')
    );
    $this->db->insert('guias_hijas', $data);
  }

   public function eliminar_guia_hija($id_guia_hija){
        $this->db->where('id_guia_hija', $id_guia_hija);
        $this->db->delete('guias_hijas');
    }
}