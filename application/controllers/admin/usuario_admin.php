<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_admin extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('admin/Usuariosweb_model');
            $this->load->model('admin/roles_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "admin/usuario_admin/usuario_admin_lista";
        $this->datos['datos'] = $this->Usuariosweb_model->obtener_todos();
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "admin/usuario_admin/ver";
        $this->datos['datos'] = $this->Usuariosweb_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id" => null,
            "username" => null,
            "email" => null,
            "avatar" => null,
            "rolid" => null
        );
        $this->datos['vista'] = "admin/usuario_admin/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "admin/usuario_admin/guardar";
        $this->datos['datos'] = $this->Usuariosweb_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
           $username = $this->input->post('username');
           $email = $this->input->post('email');
           $avatar = $this->input->post('avatar');
           $rolid = $this->input->post('rol');


           $this->Usuariosweb_model->guardar($username, $email,$avatar,$rolid,  $id);
           redirect('admin/usuario_admin');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->roles_model->eliminar($id);
        redirect('admin/usuario_admin');
    }

}