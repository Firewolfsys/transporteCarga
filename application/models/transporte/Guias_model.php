<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Guias_model extends CI_Model {


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
    
    public function guardar($codigo_guia,$direccion_envia,$direccion_recibe,$responsable_envia,$responsable_recibe,$responsable_envia_telefono,$responsable_recibe_telefono,$id_tipo_pago,$porcentaje_pago_envia,$porcentaje_pago_recibe,$id_servicio,$peso,$total_pago_envia,$total_pago_recibe,$id_cliente_envia,$id_cliente_recibe, $id_lugar_origen, $id_lugar_destino,$id_usuario_crea, $id=null, $precio, $peso_maximo, $precio_peso_adicional, $precio_especial){
      if($id){
         $data = array(
         'codigo_guia' => $codigo_guia,
         'direccion_envia' => $direccion_envia,
         'direccion_recibe' => $direccion_recibe,
         'responsable_envia' => $responsable_envia,
         'responsable_recibe' => $responsable_recibe,
         'responsable_envia_telefono' => $responsable_envia_telefono,
         'responsable_recibe_telefono' => $responsable_recibe_telefono,
         'id_tipo_pago' => $id_tipo_pago,
         'porcentaje_pago_envia' => $porcentaje_pago_envia,
         'porcentaje_pago_recibe' => $porcentaje_pago_recibe,
         'id_servicio' => $id_servicio,
         'peso' => $peso,
         'total_pago_envia' => $total_pago_envia,
         'total_pago_recibe' => $total_pago_recibe,
         'id_cliente_envia' => $id_cliente_envia,
         'id_cliente_recibe' => $id_cliente_recibe,
         'id_lugar_origen' => $id_lugar_origen,
         'id_lugar_destino' => $id_lugar_destino,
         'precio' => $precio,
         'peso_maximo' => $peso_maximo,
         'precio_peso_adicional' => $precio_peso_adicional,
         'precio_especial' => $precio_especial
      );
         $this->db->where('id_guia', $id);
         $this->db->update('guias', $data);
      }else{
         $data = array(
         'codigo_guia' => $codigo_guia,
         'direccion_envia' => $direccion_envia,
         'direccion_recibe' => $direccion_recibe,
         'responsable_envia' => $responsable_envia,
         'responsable_recibe' => $responsable_recibe,
         'responsable_envia_telefono' => $responsable_envia_telefono,
         'responsable_recibe_telefono' => $responsable_recibe_telefono,
         'id_tipo_pago' => $id_tipo_pago,
         'id_guia_estado' => 1,
         'porcentaje_pago_envia' => $porcentaje_pago_envia,
         'porcentaje_pago_recibe' => $porcentaje_pago_recibe,
         'id_servicio' => $id_servicio,
         'peso' => $peso,
         'total_pago_envia' => $total_pago_envia,
         'total_pago_recibe' => $total_pago_recibe,
         'id_cliente_envia' => $id_cliente_envia,
         'id_cliente_recibe' => $id_cliente_recibe,
         'id_lugar_origen' => $id_lugar_origen,
         'id_lugar_destino' => $id_lugar_destino,
         'fecha_creacion' => date('Y-m-d'),
         'tipo_usuario_crea' => 2,
         'id_usuario_crea' => $id_usuario_crea,
         'precio' => $precio,
         'peso_maximo' => $peso_maximo,
         'precio_peso_adicional' => $precio_peso_adicional,
         'precio_especial' => $precio_especial
      );
         $this->db->insert('guias', $data);
          $id = $this->db->insert_id();
          $datatracking = array(
         'id_guia' => $id,
         'descripcion' => "Guia Creada",
         'fecha' => date('Y-m-d H:i:s'),
         'id_guia_estado' => 1);
          $this->db->insert('tracking', $datatracking);
      } 
      return $id;
    }

    public function cancelar($id){
               $data = array(
          'id_guia_estado' => 5
      );
          $this->db->where('id_guia', $id);
          $this->db->update('guias', $data);
    }

    public function eliminar($id){
       $this->db->where('id_piloto_estado', $id);
       $this->db->delete('pilotos_estado');
    }

    public function obtener_por_id($id){
       $this->db->select('*');
       $this->db->from('guias');
       $this->db->where('id_guia', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

     public function validar_guia_facturada($id_guia){
       $this->db->select('*');
       $this->db->from('v_guias_facturadas');
       $this->db->where('id_guia', $id_guia);
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

     public function validar_guia_existe($codigo){
       $this->db->select('*');
       $this->db->from('guias');
       $this->db->where('codigo_guia', $codigo);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }

     public function obtener_guia($id){
       $this->db->select('*');
       $this->db->from('v_guias');
       $this->db->where('id_guia', $id);
       $consulta = $this->db->get();
       $resultado = $consulta->row();
       return $resultado;
    }


    public function obtener_todos(){
       $this->db->select('*');
       $this->db->from('v_guias');
       $this->db->where('id_guia_estado <>', 5);
       $this->db->order_by('id_guia_estado', 'asc');
       $consulta = $this->db->get();
       $resultado = $consulta->result();
       return $resultado;
    }

    public function obtener_guias_reporte($id_cliente, $id_estado, $fechaI, $fechaF){

      $this->db->select('g.codigo_guia, g.id_cliente_envia, g.id_guia_estado, g.fecha_creacion, g.peso, c.nombre_comercial,  o.lugar lugar_origen, d.lugar lugar_destino, e.estado ');
      $this->db->from('guias g');
      $this->db->join('clientes c', 'g.id_cliente_envia = c.id_cliente ');
      $this->db->join('lugares o','g.id_lugar_origen = o.id_lugar ' );
      $this->db->join('lugares d', 'g.id_lugar_destino = d.id_lugar');
      $this->db->join('guias_estado e', 'g.id_guia_estado = e.id_guia_estado');
      
  
      if($id_cliente!=0){
        $this->db->where('g.id_cliente_envia', $id_cliente);
      }
  
      if($id_estado!=0){
        $this->db->where('g.id_guia_estado', $id_estado);
      }
  
  
      $this->db->where('g.fecha_creacion >=', $fechaI);
      $this->db->where('g.fecha_creacion <=', $fechaF);
  
      $this->db->order_by('g.fecha_creacion', 'desc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
    }

       public function obtener_guias_hija($id_guia){
       $this->db->select('a.*, b.descripcion as servicio');
       $this->db->from('guias_hijas a');
       $this->db->join('servicio b', 'a.id_servicio = b.id_servicio ');
       $this->db->where('a.id_guia', $id_guia);
       $this->db->order_by('a.fecha_creacion', 'desc');
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

  public function guardar_guia_hija($id_guia, $codigo_guia_hija, $id_servicio, $peso, $porcentaje_pago_envia, $porcentaje_pago_recibe, $precio_especial, $id_cliente_envia){
    //obtenemos la informacion del servicio
      $this->db->select('peso_maximo, precio, precio_peso_adicional');
      $this->db->from('servicio_cliente');
      $this->db->where('id_servicio', $id_servicio);
      $this->db->where('id_cliente', $id_cliente_envia);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      if($resultado == null )
      {
      $this->db->select('peso_maximo, precio_publico as precio, precio_peso_adicional');
      $this->db->from('servicio');
      $this->db->where('id_servicio', $id_servicio);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      } 
      $precio = $resultado->precio;
      $peso_maximo = $resultado->peso_maximo;
      $precio_peso_adicional = $resultado->precio_peso_adicional;
      $peso_adicional_cobra = $peso - $peso_maximo;
      if($peso_adicional_cobra > 0)
      {
        $total_pago_envia = ((($precio_peso_adicional*$peso_adicional_cobra)+$precio)*$porcentaje_pago_envia)/100;
        $total_pago_recibe =((($precio_peso_adicional*$peso_adicional_cobra)+$precio)*$porcentaje_pago_recibe)/100;
      }else{
        $total_pago_envia = ($precio*$porcentaje_pago_envia)/100;
        $total_pago_recibe =($precio*$porcentaje_pago_recibe)/100;
      }
      
    //insertamos la guia al detalle del manifiesto
    $data = array(
        'id_guia ' => $id_guia,
        'codigo_guia_hija' => $codigo_guia_hija,
        'fecha_creacion' => date('Y-m-d H:i:s'),
        'id_servicio' => $id_servicio,
         'peso' => $peso,
         'porcentaje_pago_envia' => $porcentaje_pago_envia,
         'porcentaje_pago_recibe' => $porcentaje_pago_recibe,
         'total_pago_envia' => $total_pago_envia,
         'total_pago_recibe' => $total_pago_recibe,
         'precio' => $precio,
         'peso_maximo' => $peso_maximo,
         'precio_peso_adicional' => $precio_peso_adicional,
         'precio_especial' => $precio_especial
    );
    $this->db->insert('guias_hijas', $data);
  }

   public function eliminar_guia_hija($id_guia_hija){
        $this->db->where('id_guia_hija', $id_guia_hija);
        $this->db->delete('guias_hijas');
    }

    private function estadistica_guias_mensual()
    {
      $resp = array();
      $dias = array();
      $this->db->select('*');
      $this->db->from('vw_guia_mensual_Dias');
      $query = $this->db->get();
      foreach ($query->result_array() as $value) {
        $dias[]=array(
            "dia" => $value['dia']
        );
      }

      $this->db->select(' * ');
      $this->db->from('vw_guia_mensual');
      $consulta = $this->db->get();
      $res = array();
      $estadoActual = 0;
      $desc_estado_Act = "";
      $color = "";

      $estados = array();
      $valores = array();

      foreach($consulta->result_array() as $valor)
      {
        if ($estadoActual == 0) { 
          $estadoActual = $valor['id_guia_estado'];
          $desc_estado_Act = $valor['estado'];
          $color = $valor['color'];
        }

        if ($estadoActual != $valor['id_guia_estado'])
        {
          $estados = array (
            "guia_estado" => $estadoActual
            ,"guia_descripcion" => $desc_estado_Act
            ,"color" => $color
            ,"data" => $valores
          );
          unset($valores);
          $valores = array();
          array_push($res,$estados);
          $estadoActual = $valor['id_guia_estado'];
          $desc_estado_Act = $valor['estado'];
          $color = $valor['color'];
        }

        array_push($valores, $valor['cantidad']);
        
      }
      $estados = array (
        "guia_estado" => $estadoActual
        ,"guia_descripcion" => $desc_estado_Act
        ,"color" => $color
        ,"data" => $valores
      );
      array_push($res,$estados);

      $resp = array(
        "dias" => $dias,
        "estados" => $res
      );

      return $resp;

    }

    private function estadistica_guias_semanal(){

      $resp = array();
      $dias = array();

      $this->db->select('*');
      $this->db->from('vw_guia_semanal_Dias');
      $query = $this->db->get();
      foreach ($query->result_array() as $value) {
        $dias[]=array(
            "dia" => $value['dia'],
            "diaNombre" => $value['diaNombre'],
        );
      }




      $this->db->select(' * ');
      $this->db->from('vw_guia_semanal');
      $consulta = $this->db->get();
      $res = array();
      $estadoActual = 0;
      $desc_estado_Act = "";
      $color = "";

      $estados = array();
      $valores = array();

      foreach($consulta->result_array() as $valor)
      {
        if ($estadoActual == 0) { 
          $estadoActual = $valor['id_guia_estado'];
          $desc_estado_Act = $valor['estado'];
          $color = $valor['color'];
        }

        if ($estadoActual != $valor['id_guia_estado'])
        {
          $estados = array (
            "guia_estado" => $estadoActual
            ,"guia_descripcion" => $desc_estado_Act
            ,"color" => $color
            ,"data" => $valores
          );
          unset($valores);
          $valores = array();
          array_push($res,$estados);
          $estadoActual = $valor['id_guia_estado'];
          $desc_estado_Act = $valor['estado'];
          $color = $valor['color'];
        }

        array_push($valores, $valor['cantidad']);
        
      }
      $estados = array (
        "guia_estado" => $estadoActual
        ,"guia_descripcion" => $desc_estado_Act
        ,"color" => $color
        ,"data" => $valores
      );
      array_push($res,$estados);

      $resp = array(
        "dias" => $dias,
        "estados" => $res
      );

      return $resp;
    }

    private function estadistica_guias_semestral(){

      $resp = array();
      $dias = array();
      $this->db->select('*');
      $this->db->from('vw_guia_semestral_Dias');
      $query = $this->db->get();
      foreach ($query->result_array() as $value) {
        $dias[]=array(
            "dia" => $value['dia'],
            "diaNombre" => $value['diaNombre'],
        );
      }




      $this->db->select(' * ');
      $this->db->from('vw_guia_semestral');
      $consulta = $this->db->get();
      $res = array();
      $estadoActual = 0;
      $desc_estado_Act = "";
      $color = "";

      $estados = array();
      $valores = array();

      foreach($consulta->result_array() as $valor)
      {
        if ($estadoActual == 0) { 
          $estadoActual = $valor['id_guia_estado'];
          $desc_estado_Act = $valor['estado'];
          $color = $valor['color'];
        }

        if ($estadoActual != $valor['id_guia_estado'])
        {
          $estados = array (
            "guia_estado" => $estadoActual
            ,"guia_descripcion" => $desc_estado_Act
            ,"color" => $color
            ,"data" => $valores
          );
          unset($valores);
          $valores = array();
          array_push($res,$estados);
          $estadoActual = $valor['id_guia_estado'];
          $desc_estado_Act = $valor['estado'];
          $color = $valor['color'];
        }

        array_push($valores, $valor['cantidad']);
        
      }
      $estados = array (
        "guia_estado" => $estadoActual
        ,"guia_descripcion" => $desc_estado_Act
        ,"color" => $color
        ,"data" => $valores
      );
      array_push($res,$estados);

      $resp = array(
        "dias" => $dias,
        "estados" => $res
      );

      return $resp;
    }


    public function getEstadisticaGuias(){
      $res = array(
        "guia_semanal" => $this->estadistica_guias_semanal()
        ,"guia_mensual" => $this->estadistica_guias_mensual()
        ,"guia_semestral" => $this->estadistica_guias_semestral()
      );
      return json_encode($res); 
    }

}