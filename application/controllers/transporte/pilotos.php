<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class pilotos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/pilotos_model');
            $this->load->model('transporte/estados_piloto_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "transporte/pilotos/pilotos_lista";
        $this->datos['parametros'] = $this->estados_piloto_model->obtener_todos();
        $this->datos['datos'] = $this->pilotos_model->obtener_todos();
        $this->load->view('transporte/pilotos/pilotos_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "transporte/pilotos/ver";
        $this->datos['datos'] = $this->pilotos_model->obtener_por_id($id);
        $this->load->view('transporte/pilotos/ver',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_piloto" => null,
            "nombres" => null,
            "apellidos" => null,
            "identificacion" => null,
            "licencia_tipo" => null,
            "licencia" => null,
            "fecha_ingreso" => null,
            "pago_mensual" => null,
            "bonificacion_ley" => null,
            "bonificacion_incentivo" => null,
            "id_piloto_estado" => null,
            "telefono" => null,
            "email" => null,
            "direccion" => null
        );
        $this->datos['vista'] = "transporte/pilotos/nuevo";
        $this->datos['parametros'] = $this->estados_piloto_model->obtener_todos();
        $this->datos['datos'] = $data;
        $this->load->view('transporte/pilotos/nuevo', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "transporte/pilotos/guardar";
        $this->datos['parametros'] = $this->estados_piloto_model->obtener_todos();
        $this->datos['datos'] = $this->pilotos_model->obtener_por_id($id);
        $this->load->view('transporte/pilotos/guardar', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
            $nombres = $this->input->post('nombres');
            $apellidos = $this->input->post('apellidos');
            $identificacion = $this->input->post('identificacion');
            $licencia_tipo = $this->input->post('licencia_tipo');
            $licencia = $this->input->post('licencia');
            $fecha_ingreso = $this->input->post('fecha_ingreso');
            $pago_mensual = $this->input->post('pago_mensual');
            $bonificacion_ley = $this->input->post('bonificacion_ley');
            $bonificacion_incentivo = $this->input->post('bonificacion_incentivo');
            $id_piloto_estado = $this->input->post('id_piloto_estado');
            $telefono = $this->input->post('telefono');
            $email = $this->input->post('email');
            $direccion = $this->input->post('direccion');
            $this->pilotos_model->guardar($nombres, $apellidos, $identificacion, $licencia_tipo,
            $licencia, $fecha_ingreso, $pago_mensual, $bonificacion_ley, $bonificacion_incentivo,
            $id_piloto_estado, $telefono, $email, $direccion, $id);
            redirect('transporte/pilotos');
        }else{
            $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->pilotos_model->eliminar($id);
        redirect('transporte/pilotos');
    }
  
}