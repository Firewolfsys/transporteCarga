<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guias_estado extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/guias_estado_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "transporte/guias_estado/guias_estado_lista";
        $this->datos['datos'] = $this->guias_estado_model->obtener_todos();
        $this->load->view('transporte/guias_estado/guias_estado_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "transporte/guias_estado/ver";
        $this->datos['datos'] = $this->guias_estado_model->obtener_por_id($id);
        $this->load->view('transporte/guias_estado/ver',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_guias_estado" => null,
            "estado" => null
        );
        $this->datos['vista'] = "transporte/guias_estado/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('transporte/guias_estado/nuevo', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "transporte/guias_estado/guardar";
        $this->datos['datos'] = $this->guias_estado_model->obtener_por_id($id);
        $this->load->view('transporte/guias_estado/guardar', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
           $estado = $this->input->post('estado');
           $this->guias_estado_model->guardar($estado, $id);
           redirect('transporte/guias_estado');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->guias_estado_model->eliminar($id);
        redirect('transporte/guias_estado');
    }
  
}