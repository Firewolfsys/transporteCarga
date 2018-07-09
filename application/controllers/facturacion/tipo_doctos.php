<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_doctos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('facturacion/tipodoctos_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "facturacion/tipo_doctos/tipodoctos_lista";
        $this->datos['datos'] = $this->tipodoctos_model->obtener_todos();
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "facturacion/tipo_doctos/ver";
        $this->datos['datos'] = $this->tipodoctos_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "tipo_doctoid" => null,
            "descripcion" => null
        );
        $this->datos['vista'] = "facturacion/tipo_doctos/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "facturacion/tipo_doctos/guardar";
        $this->datos['datos'] = $this->tipodoctos_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
           $descripcion = $this->input->post('descripcion');
           $this->tipodoctos_model->guardar($descripcion, $id);
           redirect('facturacion/tipo_doctos');
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->tipodoctos_model->eliminar($id);
        redirect('facturacion/tipo_doctos');
    }
  
}