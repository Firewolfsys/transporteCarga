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

   public function obtener_todos(){
      $this->db->select('*');
      $this->db->from('v_manifiestos');
      $this->db->order_by('fecha_creacion', 'desc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
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
        $id = $this->db->insert_id();
    } 
    return $id;
  }

    public function guardar_detalle($id_guia, $id_manifiesto){
    //insertamos la guia al detalle del manifiesto
    $data = array(
        'id_manifiesto' => $id_manifiesto,
        'id_guia' => $id_guia
    );
    $this->db->insert('manifiestos_detalle', $data);
    //actualizamos el estado de la guia, a en bodega.
    $dataguia = array(
        'id_guia_estado' => 2
    );
    $this->db->where('id_guia', $id_guia);
    $this->db->update('guias', $dataguia);
    //insertamos en tracking el movimiento de la guia
    $datatracking = array(
    'id_guia' => $id_guia,
    'descripcion' => "En bodega",
    'fecha' => date('Y-m-d H:i:s'),
    'id_guia_estado' => 2);
     $this->db->insert('tracking', $datatracking);
  }

  public function guardar_traslado($id_guia, $id_manifiesto){
    //actualizamos el estado de la guia, a en trasladada.
    $dataguia = array(
        'id_guia_estado' => 3
    );
    $this->db->where('id_guia', $id_guia);
    $this->db->update('guias', $dataguia);
    //insertamos en tracking el movimiento de la guia
    $datatracking = array(
    'id_guia' => $id_guia,
    'descripcion' => "En transito",
    'fecha' => date('Y-m-d H:i:s'),
    'id_guia_estado' => 3);
     $this->db->insert('tracking', $datatracking);
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

 
   public function obtener_detalle($id_manifiesto){
       $this->db->select('*');
       $this->db->from('v_manifiestos_detalle');
       $this->db->where('id_manifiesto', $id_manifiesto);
       $this->db->order_by('fecha_creacion', 'desc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

    public function validar_guia_en_manifiesto($codigo_guia){
      $this->db->select('*');
      $this->db->from('v_manifiestos_detalle');
      $this->db->where('codigo_guia', $codigo_guia);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

     public function guia_en_manifiesto($id_manifiesto, $guia){
      $this->db->select('*');
      $this->db->from('v_manifiestos_detalle');
      $this->db->where('id_guia', $guia);
      $this->db->where('id_manifiesto', $id_manifiesto);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
    }


    public function validar_guia_pendiente_traslado($codigo_guia){
      $this->db->select('*');
      $this->db->from('v_manifiestos_detalle');
      $this->db->where('codigo_guia', $codigo_guia);
      $this->db->where('id_guia_estado', 3);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

   public function obtener_todos_traslado($id_piloto){
      $this->db->select('*');
      $this->db->from('v_manifiestos_traslados');
      if($id_piloto!=0){
        $this->db->where('id_piloto', $id_piloto);
      }
      $this->db->order_by('fecha_creacion', 'desc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;

  }

    public function obtener_todos_entrega_guias($id_piloto){
      $this->db->select('*');
      $this->db->from('v_guias_para_entregar');
      if($id_piloto!=0){
        $this->db->where('id_piloto', $id_piloto);
      }
      $this->db->order_by('fecha_creacion', 'desc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;

  }

  public function obtener_guias_pendientes_traslado($id_manifiesto){
      $this->db->select('*');
      $this->db->from('v_manifiestos_detalle');
      $this->db->where('id_manifiesto', $id_manifiesto);
      $this->db->where('id_guia_estado', 2);
      $this->db->order_by('fecha_creacion', 'desc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;

  }

  public function obtener_guias_trasladadas($id_manifiesto){
      $this->db->select('*');
      $this->db->from('v_manifiestos_detalle');
      $this->db->where('id_manifiesto', $id_manifiesto);
      $this->db->where('id_guia_estado', 3);
      $this->db->order_by('fecha_creacion', 'desc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;

  }

  public function obtener_manifiestos_reporte($id_piloto, $id_estado, $fechaI, $fechaF){
    $this->db->select('m.id_manifiesto, m.fecha_creacion, m.finalizado, p.id_piloto, p.nombres, p.apellidos, o.lugar lugar_origen, d.lugar lugar_destino ');
    $this->db->from('manifiestos m');
    $this->db->join('pilotos p', 'm.id_piloto = p.id_piloto ');
    $this->db->join('lugares o','m.id_lugar_origen = o.id_lugar ' );
    $this->db->join('lugares d', 'm.id_lugar_destino = d.id_lugar');

    if($id_piloto!=0){
      $this->db->where('m.id_piloto', $id_piloto);
    }

    if($id_estado!=0){
        if($id_estado==1) { $this->db->where('finalizado = 0'); }
        if($id_estado==2) { $this->db->where('finalizado = 1'); }
    }


    $this->db->where('fecha_creacion >=', $fechaI);
    $this->db->where('fecha_creacion <=', $fechaF);

    $this->db->order_by('m.fecha_creacion', 'desc');
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

    public function cancelar_traslado($id_guia){
      //actualizamos el estado de la guia
      $dataguia = array(
          'id_guia_estado' => 2
      );
        $this->db->where('id_guia', $id_guia);
        $this->db->update('guias', $dataguia);
      //eliminamos todo el tracking de la guia
        $this->db->where('id_guia', $id_guia);
        $this->db->where('id_guia_estado', 3);
        $this->db->delete('tracking');
    }

    public function entregar_guia($id_guia, $observacion){
    //actualizamos el estado de la guia, a en entregada.
    $dataguia = array(
        'id_guia_estado' => 4
    );
    $this->db->where('id_guia', $id_guia);
    $this->db->update('guias', $dataguia);
    //insertamos en tracking el movimiento de la guia
    $datatracking = array(
    'id_guia' => $id_guia,
    'descripcion' => "Entregada",
    'fecha' => date('Y-m-d H:i:s'),
    'observacion' => $observacion,
    'id_guia_estado' => 4);
     $this->db->insert('tracking', $datatracking);
  }

}