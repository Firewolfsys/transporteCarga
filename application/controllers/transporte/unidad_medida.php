<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class unidad_medida extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/unidad_medida_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "transporte/unidad_medida/unidad_medida_lista";
        $this->datos['datos'] = $this->unidad_medida_model->obtener_todos();
        $this->load->view('transporte/unidad_medida/unidad_medida_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "transporte/unidad_medida/ver";
        $this->datos['datos'] = $this->unidad_medida_model->obtener_por_id($id);
        $this->load->view('transporte/unidad_medida/ver',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_unidad_medida" => null,
            "unidad_medida" => null
        );
        $this->datos['vista'] = "transporte/unidad_medida/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('transporte/unidad_medida/nuevo', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "transporte/unidad_medida/guardar";
        $this->datos['datos'] = $this->unidad_medida_model->obtener_por_id($id);
        $this->load->view('transporte/unidad_medida/guardar', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
           $unidad_medida = $this->input->post('unidad_medida');
           $this->unidad_medida_model->guardar($unidad_medida, $id);
           redirect('transporte/unidad_medida');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->unidad_medida_model->eliminar($id);
        redirect('transporte/unidad_medida');
    }
  
}