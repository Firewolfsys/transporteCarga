<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guias extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('main');
        } else {
            $this->load->model('transporte/guias_model');
            $this->load->model('clientes/clientes_model');
            $this->load->model('transporte/lugares_model');
            $this->load->model('transporte/servicios_model');
            $this->load->model('facturacion/tipos_pago_model');
            $this->load->model('transporte/guias_estado_model');
        }    
    }

    public function index()
    {
        $this->datos['vista'] = "trannsporte/guias/guias_lista";
        $this->datos['datos'] = $this->guias_estado_model->obtener_todos();
        $this->load->view('transporte/guias/guias_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "facturacion/tipo_doctos/ver";
        $this->datos['datos'] = $this->tipodoctos_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }

    public function nuevo()
    {
        $this->load->view('main/header');
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['lugares_lista'] = $this->lugares_model->obtener_todos();
        $this->datos['servicios_lista'] = $this->servicios_model->obtener_todos();
        $this->datos['tipos_pago_lista'] = $this->tipos_pago_model->obtener_todos();
        $this->load->view('guias/nuevo',$this->datos);
        $this->load->view('main/footer');

    }

    public function editar($id){
        $this->load->view('main/header');
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['lugares_lista'] = $this->lugares_model->obtener_todos();
        $this->datos['servicios_lista'] = $this->servicios_model->obtener_todos();
        $this->datos['tipos_pago_lista'] = $this->tipos_pago_model->obtener_todos();
        $this->datos['guias_estado_lista'] = $this->guias_estado_model->obtener_todos();
        $this->datos['datos'] = $this->guias_model->obtener_por_id($id);
        $this->datos['disabledheader'] = "disabled";
        $this->datos['disabled'] = "";
        $this->datos['titulo'] = "Modificar Guia";
        $this->load->view('guias/ver',$this->datos);
        $this->load->view('main/footer');
    }


    public function visualizar($id){
        $this->load->view('main/header');
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['lugares_lista'] = $this->lugares_model->obtener_todos();
        $this->datos['servicios_lista'] = $this->servicios_model->obtener_todos();
        $this->datos['tipos_pago_lista'] = $this->tipos_pago_model->obtener_todos();
        $this->datos['guias_estado_lista'] = $this->guias_estado_model->obtener_todos();
        $this->datos['datos'] = $this->guias_model->obtener_por_id($id);
        $this->datos['disabledheader'] = "disabled";
        $this->datos['disabled'] = "disabled";
        $this->datos['titulo'] = "Ver Guia";
        $this->load->view('guias/ver',$this->datos);
        $this->load->view('main/footer');
    }

     public function guardar_post($id=null){
        if($this->input->post()){
           $codigo_guia = $this->input->post('codigo_guia');
           $direccion_envia = $this->input->post('direccion_envia');
           $direccion_recibe = $this->input->post('direccion_recibe');
           $responsable_envia = $this->input->post('responsable_envia');
           $responsable_recibe = $this->input->post('responsable_recibe');
           $responsable_envia_telefono = $this->input->post('telefono_envia');
           $responsable_recibe_telefono = $this->input->post('telefono_recibe');
           $id_tipo_pago = $this->input->post('id_tipo_pago');
           $porcentaje_pago_envia = $this->input->post('porcentaje_pago_envia');
           $porcentaje_pago_recibe = $this->input->post('porcentaje_pago_recibe');
           $id_servicio = $this->input->post('id_servicio');
           $peso = $this->input->post('peso');
           $total_pago_envia = $this->input->post('total_pago_envia');
           $total_pago_recibe = $this->input->post('total_pago_recibe');
           $id_cliente_envia = $this->input->post('id_cliente_envia');
           $id_cliente_recibe = $this->input->post('id_cliente_recibe');
           $id_lugar_origen = $this->input->post('id_lugar_origen');
           $id_lugar_destino = $this->input->post('id_lugar_destino');
           $id_usuario_crea = $_SESSION['user_id'];
           $this->guias_model->guardar($codigo_guia,$direccion_envia,$direccion_recibe,$responsable_envia,$responsable_recibe,$responsable_envia_telefono,$responsable_recibe_telefono,$id_tipo_pago,$porcentaje_pago_envia,$porcentaje_pago_recibe,$id_servicio,$peso,$total_pago_envia,$total_pago_recibe,$id_cliente_envia,$id_cliente_recibe, $id_lugar_origen, $id_lugar_destino,$id_usuario_crea, $id);
           redirect('guias');
           
        }else
        {

        }
     }

  
}
     
