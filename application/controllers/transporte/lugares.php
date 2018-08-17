<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lugares extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/lugares_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "transporte/lugares/lugares_lista";
        $this->datos['datos'] = $this->lugares_model->obtener_todos();
        $this->load->view('transporte/lugares/lugares_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "transporte/lugares/ver";
        $this->datos['datos'] = $this->lugares_model->obtener_por_id($id);
        $this->load->view('transporte/lugares/ver',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_lugar" => null,
            "lugar" => null
        );
        $this->datos['vista'] = "transporte/lugares/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('transporte/lugares/nuevo', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "transporte/lugares/guardar";
        $this->datos['datos'] = $this->lugares_model->obtener_por_id($id);
        $this->load->view('transporte/lugares/guardar', $this->datos);
    }

    public function guardar_post($id=null){
        if($this->input->post()){
           $lugar = $this->input->post('lugar');
           $this->lugares_model->guardar($lugar, $id);
           redirect('transporte/lugares');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->lugares_model->eliminar($id);
        redirect('transporte/lugares');
    }
  
}