<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class manifiestos_model extends CI_Model {


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
    
  public function guardarencabezado($id_piloto, $id_lugar_origen, $id_lugar_destino, $id=null){
    $data = array(
        'id_piloto' => $id_piloto,
        'fecha_creacion' => date('Y-m-d'),
        'id_lugar_origen' => $id_lugar_origen,
        'id_lugar_destino' => $id_lugar_destino
    );

    if($id){
        $this->db->where('id_manifiesto', $id);
        $this->db->update('manifiestos', $data);
    }else{
        $this->db->insert('manifiestos', $data);
    } 
    $id = $this->db->insert_id();
    return $id;
  }

    public function guardar_detalle($id_guia, $id_manifiesto){
    $data = array(
        'id_manifiesto' => $id_manifiesto,
        'id_guia' => $id_guia
    );
        $this->db->insert('manifiestos_detalle', $data);
    
  }


  public function eliminar($id){
      $this->db->where('id_servicio', $id);
      $this->db->delete('servicio');
  }

  public function obtener_por_id($id){
      $this->db->select('*');
      $this->db->from('manifiestos');
      $this->db->where('id_manifiesto', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

   public function obtener_guia_codigo($codigo_guia){
      $this->db->select('*');
      $this->db->from('guias');
      $this->db->where('codigo_guia', $codigo_guia);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

  public function obtener_todos(){
      $this->db->select('*');
      $this->db->from('v_manifiestos');
      $this->db->order_by('fecha_creacion', 'desc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
  }

   public function obtener_detalle($id_manifiesto){
       $this->db->select('*');
       $this->db->from('v_manifiestos_detalle');
       $this->db->where('id_manifiesto', $id_manifiesto);
       $this->db->order_by('fecha_creacion', 'desc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

}