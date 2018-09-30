<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class servicios extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/servicios_model');
            $this->load->model('transporte/tipo_servicio_model');
            $this->load->model('transporte/unidad_medida_model');
            $this->load->model('clientes/clientes_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "transporte/servicios/servicios_lista";
        $this->datos['datos'] = $this->servicios_model->obtener_todos();
        $this->load->view('transporte/servicios/servicios_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "transporte/servicios/ver";
        $this->datos['datos'] = $this->servicios_model->obtener_por_id($id);
        $this->load->view('transporte/servicios/ver',$this->datos);
    }

    public function nuevo()
    {
        $parametros = array(
            "unidad_medida" => $this->unidad_medida_model->obtener_todos(),
            "tipos_servicio" => $this->tipo_servicio_model->obtener_todos()
        );


        $data = array(
            "id_servicio" => null,
            "descripcion" => null,
            "precio_publico" => null,
            "id_unidad_medida" => null,
            "peso_maximo" => null,
            "precio_peso_adicional" => null,
            "id_tipo_servicio" => null,
            "activo" => null
        );
        $this->datos['vista'] = "transporte/servicios/nuevo";
        $this->datos['parametros']= $parametros;
        $this->datos['datos'] = $data;
        $this->load->view('transporte/servicios/nuevo', $this->datos);

    }

    public function guardar($id){
        $parametros = array(
            "unidad_medida" => $this->unidad_medida_model->obtener_todos(),
            "tipos_servicio" => $this->tipo_servicio_model->obtener_todos()
        );

        $this->datos['vista'] = "transporte/servicios/guardar";
        $this->datos['parametros']= $parametros;
        $this->datos['datos'] = $this->servicios_model->obtener_por_id($id);
        $this->load->view('transporte/servicios/guardar', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
            $descripcion = $this->input->post('descripcion');
            $precio_publico = $this->input->post('precio_publico');
            $id_unidad_medida = $this->input->post('id_unidad_medida');
            $peso_maximmo = $this->input->post('peso_maximo');
            $precio_peso_adicional = $this->input->post('precio_peso_adicional');
            $id_tipo_servicio = $this->input->post('id_tipo_servicio');
            $activo = $this->input->post('activo');
            $this->servicios_model->guardar($descripcion, $precio_publico, $id_unidad_medida, 
            $peso_maximmo, $precio_peso_adicional, $id_tipo_servicio, $activo, 
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


     public function inactivar($id){
        $this->servicios_model->inactivar($id);
        redirect('transporte/servicios');
    }

     public function ver_servicios_cliente($id,$autopupup=null,$resultado = ""){
        
        $claseresultado = "";
        if($resultado  == "error")
        {
            $resultado = "ERROR, Cliente ya existe.!";
            $claseresultado = "danger";
        }
        if($resultado == "success")
        {
            $resultado = "Cliente agregado con exito.";
            $claseresultado = "success";
        }
        $this->datos['datos'] = $this->servicios_model->obtener_por_id($id);
        $this->datos['detalle_lista'] = $this->servicios_model->obtener_servicios_cliente($id);
        $this->datos['autopupup'] = $autopupup;
        $this->datos['claseresultado'] = $claseresultado;
        $this->datos['resultado'] = $resultado;
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['vista'] = "transporte/servicios/servicios_cliente";
        $this->load->view('transporte/servicios/servicios_cliente',$this->datos);
    }

     public function guardar_servicio_cliente($id_servicio){
        if($this->input->post()){
            $cliente = $this->input->post('id_cliente');
            $precio_publico = $this->input->post('precio_publico');
            $peso_maximo = $this->input->post('peso_maximo');
            $precio_peso_adicional = $this->input->post('precio_peso_adicional');

            $validacionservicio = $this->servicios_model->validar_cliente_servicio($id_servicio, $cliente);
            if($validacionservicio == null )
            {
            $this->servicios_model->guardar_servicio_cliente($id_servicio,$cliente,$precio_publico,$peso_maximo,$precio_peso_adicional);
            redirect('transporte/servicios/ver_servicios_cliente/'.$id_servicio.'/true/success');
            }
            else
            {
            redirect('transporte/servicios/ver_servicios_cliente/'.$id_servicio.'/true/error');   
            }
            }
     }

      public function eliminar_servicio_cliente($id_servicio_cliente,$id_servicio){
        $this->servicios_model->eliminar_servicio_cliente($id_servicio_cliente);
        redirect('transporte/servicios/ver_servicios_cliente/'.$id_servicio);
    }

  
}