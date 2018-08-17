<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estados_piloto extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/estados_piloto_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "transporte/estados_piloto/estados_piloto_lista";
        $this->datos['datos'] = $this->estados_piloto_model->obtener_todos();
        $this->load->view('transporte/estados_piloto/estados_piloto_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "transporte/estados_piloto/ver";
        $this->datos['datos'] = $this->estados_piloto_model->obtener_por_id($id);
        $this->load->view('transporte/estados_piloto/ver',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_piloto_estado" => null,
            "estado" => null
        );
        $this->datos['vista'] = "transporte/estados_piloto/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('transporte/estados_piloto/nuevo', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "transporte/estados_piloto/guardar";
        $this->datos['datos'] = $this->estados_piloto_model->obtener_por_id($id);
        $this->load->view('transporte/estados_piloto/guardar', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
           $estado = $this->input->post('estado');
           $this->estados_piloto_model->guardar($estado, $id);
           redirect('transporte/estados_piloto');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->estados_piloto_model->eliminar($id);
        redirect('transporte/estados_piloto');
    }
  
}