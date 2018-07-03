<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class roles extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('admin/roles_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "admin/roles/roles_lista";
        $this->datos['datos'] = $this->roles_model->obtener_todos();
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "admin/roles/ver";
        $this->datos['datos'] = $this->roles_model->obtener_por_id($id);
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
        $this->datos['vista'] = "admin/roles/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "admin/roles/guardar";
        $this->datos['datos'] = $this->roles_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
           $nombre = $this->input->post('nombre');
           $icono = $this->input->post('icono');
           $orden = $this->input->post('orden');
           $this->roles_model->guardar($nombre, $icono, $orden, $id);
           redirect('roles');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->roles_model->eliminar($id);
        redirect('roles');
    }
  
}