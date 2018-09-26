<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class clientes extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('clientes/clientes_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "clientes/clientes/clientes_lista";
        $this->datos['datos'] = $this->clientes_model->obtener_todos();
        $this->load->view('clientes/clientes/clientes_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "clientes/clientes/ver";
        $this->datos['datos'] = $this->clientes_model->obtener_por_id($id);
        $this->load->view('clientes/clientes/ver',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_cliente" => null,
            "nombre_comercial" => null,
            "razon_social" => null,
            "nit" => null,
            "direccion" => null,
            "telefono" => null,
            "email" => null,
            "fecha_ingreso" => null,
            "activo" => null,
            "aplica_pago_mensual" => null
        );
        $this->datos['vista'] = "clientes/clientes/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('clientes/clientes/nuevo', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "clientes/clientes/guardar";
        $this->datos['datos'] = $this->clientes_model->obtener_por_id($id);
        $this->load->view('clientes/clientes/guardar', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
            $nombre_comercial = $this->input->post('nombre_comercial');
            $razon_social = $this->input->post('razon_social');
            $nit = $this->input->post('nit');
            $direccion = $this->input->post('direccion');
            $telefono = $this->input->post('telefono');
            $email = $this->input->post('email');
            $fecha_ingreso = $this->input->post('fecha_ingreso');
            $activo = $this->input->post('activo');
            $aplica_pago_mensual = $this->input->post('pago_mensual');
            $this->clientes_model->guardar($nombre_comercial, $razon_social, $nit, $direccion,
            $telefono, $email, $fecha_ingreso, $activo, $aplica_pago_mensual ,$id);
            redirect('clientes/clientes');
        }else{
            $this->guardar();
        } 
     }

     public function inactivar($id){
        $this->clientes_model->inactivar($id);
        redirect('clientes/clientes');
    }
  
}