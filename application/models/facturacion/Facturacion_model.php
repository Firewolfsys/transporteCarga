<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Facturacion_model extends CI_Model {
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

   public function obtener_todos($id_cliente){
      $this->db->select('*');
      $this->db->from('v_documentos');
      if($id_cliente!=0){
        $this->db->where('id_cliente', $id_cliente);
      }
      $this->db->order_by('fecha_creacion', 'desc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;

  }
    
  public function guardarencabezado($id_cliente, $tipo_docto, $fecha_inicio, $fecha_fin, $user_id, $id=null){
    $data = array(
        'id_cliente' => $id_cliente,
        'fecha_creacion' => date('Y-m-d'),
        'tipo_doctoid' => $tipo_docto,
        'fecha_inicio' => $fecha_inicio,
        'fecha_fin' => $fecha_fin,
        'user_login_id' => $user_id,
        'documento_estado_id' => 1
    );

    if($id){
        $this->db->where('id_documento', $id);
        $this->db->update('documentos', $data);
    }else{
        //guardamos el nuevo manifiesto
        $this->db->insert('documentos', $data);
        $id = $this->db->insert_id();
    } 
    return $id;
  }


    public function obtener_guias_pendientes($id_cliente, $fecha_inicio, $fecha_fin){
       $this->db->select('*');
       $this->db->from('v_guias_pendientes_facturar');
       $this->db->where('id_cliente', $id_cliente);
       $this->db->where('fecha_creacion >=', $fecha_inicio);
       $this->db->where('fecha_creacion <=', $fecha_fin);
       $this->db->order_by('fecha_creacion', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

    public function facturar_todos($id_documento, $id_cliente,$fecha_inicio, $fecha_fin)
    {
      $guias_pendientes = $this->facturacion_model->obtener_guias_pendientes($id_cliente,$fecha_inicio, $fecha_fin);
      foreach($guias_pendientes as $item):
      $this->facturacion_model->guardar_detalle($id_documento,$item->id_guia,$item->total_pago,$item->tipo_facturar);
      endforeach;
    }


    public function guardar_detalle($id_documento, $id_guia, $total_facturar, $tipo_facturar){
    //insertamos la guia al detalle de la facturacion
    $data = array(
        'id_documento' => $id_documento,
        'id_guia' => $id_guia,
        'total' => $total_facturar
    );
    $this->db->insert('documentos_detalle', $data);
    //actualizamos el total general en el encabezado
    $detalle = $this->facturacion_model->obtener_por_id($id_documento);
    $total_general = $detalle->total_general + $total_facturar;
    $datadocumento = array(
        'total_general' => $total_general
    );
    $this->db->where('id_documento', $id_documento);
    $this->db->update('documentos', $datadocumento);
    //actualizamos lo facturado en la guia.
    if($tipo_facturar==1)
    {
    $dataguia = array(
        'factura_envia' => $total_facturar
    );
    }
    if($tipo_facturar==2)
    {
    $dataguia = array(
        'factura_recibe' => $total_facturar
    );
    }
    $this->db->where('id_guia', $id_guia);
    $this->db->update('guias', $dataguia);
  }



  public function eliminar($id){
      $this->db->where('id_servicio', $id);
      $this->db->delete('servicio');
  }

  public function obtener_por_id($id){
      $this->db->select('*');
      $this->db->from('documentos');
      $this->db->where('id_documento', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

 
   public function obtener_detalle($id_documento){
       $this->db->select('a.*,b.*');
       $this->db->from('documentos_detalle a');
       $this->db->join('v_guias b', 'a.id_guia = b.id_guia');
       $this->db->where('a.id_documento', $id_documento);
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }


   public function eliminar_manifiesto($id_manifiesto){
    //obtenemos todas las  guias del manifiesto
    $this->db->select('*');
    $this->db->from('v_manifiestos_detalle');
    $this->db->where('id_manifiesto', $id_manifiesto);
    $this->db->order_by('fecha_creacion', 'desc');
    $consulta = $this->db->get();
    $resultado = $consulta->result();
    //recoremos todas las guias del manifiesto para actualizarles el estado y eliminarlas del tracking
    foreach($resultado as $item):
      //actualizamos el estado de la guia
      $dataguia = array(
          'id_guia_estado' => 1
      );
          $this->db->where('id_guia', $item->id_guia);
          $this->db->update('guias', $dataguia);
      //eliminamos todo el tracking de la guia
        $this->db->where('id_guia', $item->id_guia);
        $this->db->delete('tracking');
    endforeach;
       //eliminamos el detalle del manifiesto
        $this->db->where('id_manifiesto', $id_manifiesto);
        $this->db->delete('manifiestos_detalle');
       //eliminamos el manifiesto
        $this->db->where('id_manifiesto', $id_manifiesto);
        $this->db->delete('manifiestos');
    }


    public function finalizar_manifiesto($id_manifiesto){
    //actualizamos el estado de la guia, a en entregada.
    $data = array(
        'finalizado' => 1
    );
    $this->db->where('id_manifiesto', $id_manifiesto);
    $this->db->update('manifiestos', $data);
  }

}