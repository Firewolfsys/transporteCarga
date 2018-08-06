<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipos_pago extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('facturacion/tipos_pago_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "facturacion/tipos_pago/tipos_pago_lista";
        $this->datos['datos'] = $this->tipos_pago_model->obtener_todos();
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "facturacion/tipos_pago/ver";
        $this->datos['datos'] = $this->tipos_pago_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_tipo_pago" => null,
            "tipo_pago" => null
        );
        $this->datos['vista'] = "facturacion/tipos_pago/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "facturacion/tipos_pago/guardar";
        $this->datos['datos'] = $this->tipos_pago_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
           $tipo_pago = $this->input->post('tipo_pago');
           $this->tipos_pago_model->guardar($tipo_pago, $id);
           redirect('facturacion/tipos_pago');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->tipos_pago_model->eliminar($id);
        redirect('facturacion/tipos_pago');
    }
  
}