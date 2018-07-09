<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class correlativo extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('facturacion/Correlativo_model');
            $this->load->library('menu');
        }        
    }

    public function index()
    {
    }

    public function CorrelativoByTipoDocto($tipo_doctoid)
    {
        $parametros = array(
            "tipo_doctoid" => $tipo_doctoid
        );
        $this->datos['vistapadre'] = "facturacion/tipo_doctos";
        $this->datos['vista'] = "facturacion/correlativo/correlativo_lista";
       // $this->datos['datos'] = $this->correlativo_model->obtener_todos($tipo_doctoid);
        $this->datos['parametros'] = $parametros;
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
        $this->datos['vistapadre'] = "facturacion/tipo_doctos";
        $this->datos['vista'] = "facturacion/correlativo/ver";
        $this->datos['datos'] = $this->correlativo_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }


    public function nuevo($tipo_doctoid)
    {
        $data = array(
            "correlativo_doctoid"   => null,
            "tipo_doctoid"          => $tipo_doctoid,
            "serie"                 => null,
            "correlativo_inicial"   => null,
            "correlativo_final"     => null,
            "correlativo_toca"      => null
        );
        $this->datos['vistapadre'] = "facturacion/tipo_doctos";
        $this->datos['vista'] = "facturacion/correlativo/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);
    }

    public function guardar($id){
        $this->datos['vistapadre'] = "facturacion/tipo_doctos";
        $this->datos['vista'] = "facturacion/correlativo/guardar";
        $this->datos['datos'] = $this->correlativo_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }

    public function guardar_post($id=null){
        if($this->input->post()){
           $serie = $this->input->post('serie');
           $correlativo_inicial = $this->input->post('correlativo_inicial');
           $correlativo_final = $this->input->post('correlativo_final');
           $correlativo_toca = $this->input->post('correlativo_toca');
           $tipo_doctoid = $this->input->post('tipo_doctoid');
           $this->correlativo_model->guardar ($serie, $correlativo_inicial, $correlativo_final, $correlativo_toca, $tipo_doctoid,  $id);
           redirect('facturacion/correlativo/CorrelativoByTipoDocto'."/".$tipo_doctoid);
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id,$tipo_doctoid){
        $this->correlativo_model->eliminar($id);
        redirect('facturacion/correlativo/CorrelativoByTipoDocto'."/".$tipo_doctoid);
    }


}