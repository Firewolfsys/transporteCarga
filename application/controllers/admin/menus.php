<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menus extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('admin/menus_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "admin/menus/menus_lista";
        $this->datos['datos'] = $this->menus_model->obtener_todos();
        $this->load->view('admin/menus/menus_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "admin/menus/ver";
        $this->datos['datos'] = $this->menus_model->obtener_por_id($id);
        $this->load->view('admin/menus/ver',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "menuid" => null,
            "nombre" => null,
            "icono"  => null,
            "orden"  => null
        );
        $this->datos['vista'] = "admin/menus/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('admin/menus/nuevo', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "admin/menus/guardar";
        $this->datos['datos'] = $this->menus_model->obtener_por_id($id);
        $this->load->view('admin/menus/guardar', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
           $nombre = $this->input->post('nombre');
           $icono = $this->input->post('icono');
           $orden = $this->input->post('orden');
           $this->menus_model->guardar($nombre, $icono, $orden, $id);
           redirect('admin/menus');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->menus_model->eliminar($id);
        redirect('admin/menus');
    }
  
}