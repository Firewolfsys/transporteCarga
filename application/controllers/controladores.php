<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controladores extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('controladores_model');
        }        
    }

    public function index()
    {
    }

    public function ControladorByMenu($menuid)
    {
        $this->load->model('controladores_model');
        $this->datos['vista'] = "controladores/controladores_lista";
        $this->datos['datos'] = $this->controladores_model->obtener_todos($menuid);
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
        $this->load->model('controladores_model');
        $this->datos['vista'] = "controladores/ver";
        $this->datos['datos'] = $this->controladores_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }
}