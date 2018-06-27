<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menus extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('login_model');
        }        
    }

    public function index()
    {
        $this->load->model('menus_model');
        $this->datos['vista'] = "menus/menus_lista";
        $this->datos['datos'] = $this->menus_model->obtener_todos();
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
        $this->load->model('menus_model');
        $this->datos['vista'] = "menus/ver";
        $this->datos['datos'] = $this->menus_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "menuid" => null,
            "nombre" => null,
            "icono"  => null,
            "orden"  => null
        );
        $this->datos['vista'] = "menus/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);

    }

    public function guardar($id){
        $this->load->model('menus_model');
        $this->datos['vista'] = "menus/guardar";
        $this->datos['datos'] = $this->menus_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
           $nombre = $this->input->post('nombre');
           $icono = $this->input->post('icono');
           $orden = $this->input->post('orden');
           $this->load->model('menus_model');
           $this->menus_model->guardar($nombre, $icono, $orden, $id);
           redirect('menus');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->load->model('menus_model');
        $this->menus_model->eliminar($id);
        redirect('menus');
    }
  
}