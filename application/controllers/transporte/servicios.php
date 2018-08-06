<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class servicios extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/servicios_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "transporte/servicios/servicios_lista";
        $this->datos['datos'] = $this->servicios_model->obtener_todos();
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "transporte/servicios/ver";
        $this->datos['datos'] = $this->servicios_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_servicio" => null,
            "descripcion" => null,
            "precio_publico" => null,
            "id_unidad_medida" => null,
            "peso_maximo" => null,
            "precio_peso_adicional" => null,
            "fecha_creacion" => null,
            "id_tipo_servicio" => null,
            "activo" => null
        );
        $this->datos['vista'] = "transporte/servicios/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "transporte/servicios/guardar";
        $this->datos['datos'] = $this->servicios_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
            $descripcion = $this->input->post('descripcion');
            $precio_publico = $this->input->post('precio_publico');
            $id_unidad_medida = $this->input->post('id_unidad_medida');
            $peso_maximmo = $this->input->post('peso_maximo');
            $precio_peso_adicional = $this->input->post('precio_peso_adicional');
            $fecha_creacion = $this->input->post('fecha_creacion');
            $id_tipo_servicio = $this->input->post('id_tipo_servicio');
            $activo = $this->input->post('activo');
            $this->servicios_model->guardar($descripcion, $precio_publico, $id_unidad_medida, 
            $peso_maximmo, $precio_peso_adicional, $fecha_creacion, $id_tipo_servicio, $activo, 
            $id);
            redirect('transporte/servicios');
        }else{
            $this->guardar();
        } 
     }

     public function eliminar($id){
        $this->servicios_model->eliminar($id);
        redirect('transporte/servicios');
    }
  
}