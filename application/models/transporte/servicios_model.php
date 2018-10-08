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
       $this->db->select('ser.*, cli.nombre_comercial');
       $this->db->from('servicio_cliente ser');
       $this->db->where('ser.id_servicio', $id_servicio);
       $this->db->join('clientes cli','ser.id_cliente = cli.id_cliente');
       //$this->db->order_by('fecha_creacion', 'desc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

    public function validar_cliente_servicio($id_servicio,$cliente){
      $this->db->select('*');
      $this->db->from('servicio_cliente');
      $this->db->where('id_servicio', $id_servicio);
      $this->db->where('id_cliente', $cliente);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

  public function guardar_servicio_cliente($id_servicio,$cliente,$precio_publico,$peso_maximo,$precio_peso_adicional, $id_serviciocliente){
    //insertamos la guia al detalle del manifiesto
    if($id_serviciocliente == 0){
    $data = array(
        'id_servicio ' => $id_servicio,
        'id_cliente' => $cliente,
        'precio' => $precio_publico,
        'peso_maximo' => $peso_maximo,
        'precio_peso_adicional' => $precio_peso_adicional
    );
    $this->db->insert('servicio_cliente', $data);
  }else{
        $data = array(
        'precio' => $precio_publico,
        'peso_maximo' => $peso_maximo,
        'precio_peso_adicional' => $precio_peso_adicional
        );
        $this->db->where('id_serviciocliente', $id_serviciocliente);
        $this->db->update('servicio_cliente', $data);
  }
  }

   public function eliminar_servicio_cliente($id_servicio_cliente){
        $this->db->where('id_serviciocliente', $id_servicio_cliente);
        $this->db->delete('servicio_cliente');
    }

   public function servicio_x_cliente($id_cliente, $id_servicio){
      $this->db->select('peso_maximo, precio, precio_peso_adicional');
      $this->db->from('servicio_cliente');
      $this->db->where('id_servicio', $id_servicio);
      $this->db->where('id_cliente', $id_cliente);
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
  }

    public function precio_x_servicio($id_servicio){
      $this->db->select('peso_maximo, precio_publico as precio, precio_peso_adicional');
      $this->db->from('servicio');
      $this->db->where('id_servicio', $id_servicio);
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
  }
}