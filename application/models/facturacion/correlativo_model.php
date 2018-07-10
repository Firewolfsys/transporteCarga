<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class correlativo_model extends CI_Model {
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

    public function obtener_por_id($id){
        $this->db->select('correlativo_doctoid, serie, correlativo_inicial, correlativo_final, correlativo_toca, tipo_doctoid');
        $this->db->from('correlativo_doctos');
        $this->db->where('correlativo_doctoid', $id);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
 
     public function obtener_todos($tipo_doctoid){
        $this->db->select('correlativo_doctoid, serie, correlativo_inicial, correlativo_final, correlativo_toca, tipo_doctoid');
        $this->db->from('correlativo_doctos');
        $this->db->where('tipo_doctoid', $tipo_doctoid);
        $this->db->order_by('serie', 'asc');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function guardar($serie, $correlativo_inicial, $correlativo_final, $correlativo_toca, $tipo_doctoid, $id=null){
        $data = array(
           'serie'                  => $serie,
           'correlativo_inicial'    => $correlativo_inicial,
           'correlativo_final'      => $correlativo_final,
           'correlativo_toca'       => $correlativo_toca,
           'tipo_doctoid'           => $tipo_doctoid
        );
        if($id){
           $this->db->where('correlativo_doctoid', $id);
           $this->db->update('correlativo_doctos', $data);
        }else{
           $this->db->insert('correlativo_doctos', $data);
        } 
    }

    public function eliminar($id){
        $this->db->where('correlativo_doctoid', $id);
        $this->db->delete('correlativo_doctos');
    }

}