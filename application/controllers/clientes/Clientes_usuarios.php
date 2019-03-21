<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientes_usuarios extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('clientes/Clientes_model');
            $this->load->model('clientes/Clientesusuarios_model');
        }        
    }

    public function lista($clienteid)
    {
        $cliente = $this->Clientes_model->obtener_por_id($clienteid);
        $this->datos['vista'] = "clientes/clientes/clientes_lista";
        $this->datos['datos'] = $this->Clientesusuarios_model->obtener_todos($clienteid);
        $this->datos['clienteid'] = $clienteid;
        $this->datos['cliente'] = $cliente->nombre_comercial;
        $this->load->view('clientes/clientes_usuarios/usuario_admin_lista',$this->datos);
    }

    public function ver($id, $clienteid){
        $this->datos['vista'] = "clientes/clientes/clientes_lista";
        $this->datos['clienteid'] = $clienteid;
        $this->datos['datos'] = $this->Clientesusuarios_model->obtener_por_id($id);
        $this->load->view('clientes/clientes_usuarios/ver',$this->datos);
    }

    public function nuevo($clienteid)
    {
        $data = array(
            "id" => null,
            "username" => null,
            "email" => null,
            "nombre" => null,
            "telefono" => null,
            "clienteid" => $clienteid
        );
        $this->datos['vista'] = "clientes/clientes/clientes_lista";
        $this->datos['datos'] = $data;
        $this->load->view('clientes/clientes_usuarios/nuevo', $this->datos);

    }

    public function guardar($id, $clienteid){
        $this->datos['vista'] = "clientes/clientes/clientes_lista";
        $this->datos['clienteid'] = $clienteid;
        $this->datos['datos'] = $this->Clientesusuarios_model->obtener_por_id($id);
        $this->load->view('clientes/clientes_usuarios/guardar', $this->datos);
    }

    

     public function guardar_post($clienteid, $id=null){
        if($this->input->post()){
           $username = $this->input->post('username');
           $password = $this->input->post('password');
           $email = $this->input->post('email');
           $nombre = $this->input->post('nombre');
           $telefono = $this->input->post('telefono');


           $this->Clientesusuarios_model->guardar($username, $email, $password, $nombre, $telefono, $clienteid, $id);
           redirect('clientes/clientes_usuarios/lista/'.$clienteid);
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id, $clienteid){
        $this->Clientesusuarios_model->eliminar($id);
        redirect('clientes/clientes_usuarios/lista/'.$clienteid);
    }

}