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


    public function nuevo($menuid)
    {
        $data = array(
            "controladorid" => null,
            "menuid" => $menuid,
            "nombre" => null,
            "controlador"  => null,
            "orden"  => null
        );
        $this->datos['vista'] = "controladores/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);

    }

    public function guardar($id){
        $this->load->model('controladores_model');
        $this->datos['vista'] = "controladores/guardar";
        $this->datos['datos'] = $this->controladores_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }

    public function guardar_post($id=null){
        if($this->input->post()){
           $nombre = $this->input->post('nombre');
           $controlador = $this->input->post('controlador');
           $orden = $this->input->post('orden');
           $menuid = $this->input->post('menuid');
           $this->load->model('controladores_model');
           $this->controladores_model->guardar($nombre, $controlador, $orden, $menuid, $id);
           redirect('controladores/ControladorByMenu'."/".$menuid);
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->load->model('controladores_model');
        $this->controladores_model->eliminar($id);
        redirect('controladores/ControladorByMenu'."/".$menuid);
    }


}