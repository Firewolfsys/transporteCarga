<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_servicio extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/tipo_servicio_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "transporte/tipo_servicio/tipo_servicio_lista";
        $this->datos['datos'] = $this->tipo_servicio_model->obtener_todos();
        $this->load->view('transporte/tipo_servicio/tipo_servicio_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "transporte/tipo_servicio/ver";
        $this->datos['datos'] = $this->tipo_servicio_model->obtener_por_id($id);
        $this->load->view('transporte/tipo_servicio/ver',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_tipo_servicio" => null,
            "tipo_servicio" => null
        );
        $this->datos['vista'] = "transporte/tipo_servicio/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('transporte/tipo_servicio/nuevo', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "transporte/tipo_servicio/guardar";
        $this->datos['datos'] = $this->tipo_servicio_model->obtener_por_id($id);
        $this->load->view('transporte/tipo_servicio/guardar', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
           $tipo_servicio = $this->input->post('tipo_servicio');
           $this->tipo_servicio_model->guardar($tipo_servicio, $id);
           redirect('transporte/tipo_servicio');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->tipo_servicio_model->eliminar($id);
        redirect('transporte/tipo_servicio');
    }
  
}