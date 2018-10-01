<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Main_model extends CI_Model {


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
    

  public function obtener_guias(){
      $this->db->select('a.creadas,b.bodega,c.transito,d.entregadas');
      $this->db->from('(SELECT 1 as codigo, count(a.id_guia) as creadas 
                      FROM guias a
                      where id_guia_estado = 1 ) a');
      $this->db->join('(SELECT 1 as codigo,count(a.id_guia) as bodega 
                      FROM guias a
                      where id_guia_estado = 2 
                      )b ','a.codigo = b.codigo');
      $this->db->join('(SELECT 1 as codigo,count(a.id_guia) as transito 
                      FROM guias a
                      where id_guia_estado = 3 
                      )c ','a.codigo = c.codigo');
      $this->db->join('(SELECT 1 as codigo,count(a.id_guia) as entregadas 
                      FROM guias a
                      where id_guia_estado = 4 
                      )d ','a.codigo = d.codigo');
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

   public function obtener_manifiestos(){
      $this->db->select('a.ruta,b.finalizado,c.pendientes_cierre');
      $this->db->from('(SELECT 1 as codigo, count(id_manifiesto) as ruta
                       FROM manifiestos
                       where finalizado = 0 ) a');
      $this->db->join('(SELECT 1 as codigo, count(id_manifiesto) as finalizado
                       FROM manifiestos
                       where finalizado = 1
                      )b ','a.codigo = b.codigo');
      $this->db->join('(SELECT 1 as codigo, count(id_manifiesto) as pendientes_cierre
                       FROM v_manifiestos_pendientes_cerrar
                      )c ','a.codigo = c.codigo');
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }
}