<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class manifiestos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/manifiestos_model');
            $this->load->model('transporte/pilotos_model');
            $this->load->model('transporte/lugares_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "transporte/manifiestos/manifiestos_lista";
        $this->datos['datos'] = $this->manifiestos_model->obtener_todos();
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
         $parametros = array(
            "pilotos" => $this->pilotos_model->obtener_todos(),
            "lugares" => $this->lugares_model->obtener_todos(),
            "detalle_lista" => $this->manifiestos_model->obtener_detalle($id),
            "disabled" => "disabled",
            "autopopup" => "false"
        );
        $this->datos['parametros']= $parametros;
        $this->datos['vista'] = "transporte/manifiestos/ver";
        $this->datos['datos'] = $this->manifiestos_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }

    public function nuevo()
    {
        $parametros = array(
            "pilotos" => $this->pilotos_model->obtener_todos(),
            "lugares" => $this->lugares_model->obtener_todos()
        );

        $data = array(
            "id_manifiesto" => null,
            "id_piloto" => null,
            "fecha_creacion" => null,
            "finalizado" => null,
            "id_lugar_origen" => null,
            "id_lugar_destino" => null
        );
        $this->datos['vista'] = "transporte/manifiestos/nuevo";
        $this->datos['parametros']= $parametros;
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);

    }

     public function guardar_encabezado($id=null){
        if($this->input->post()){
            $id_piloto = $this->input->post('id_piloto');
            $id_lugar_origen = $this->input->post('id_lugar_origen');
            $id_lugar_destino = $this->input->post('id_lugar_destino');
            
            $id = $this->manifiestos_model->guardarencabezado($id_piloto, $id_lugar_origen, $id_lugar_destino, 
            $id);
            redirect('transporte/manifiestos/ver/'.$id);
        }else{redirect('transporte');}
     }

    public function guardar_detalle($id_manifiesto){
        if($this->input->post()){
            $codigo_guia = $this->input->post('codigo_guia');
            $guia = $this->manifiestos_model->obtener_guia_codigo($codigo_guia);
            $this->manifiestos_model->guardar_detalle($guia->id_guia,$id_manifiesto);
            $parametros = array(
                "pilotos" => $this->pilotos_model->obtener_todos(),
                "lugares" => $this->lugares_model->obtener_todos(),
                "detalle_lista" => $this->manifiestos_model->obtener_detalle($id_manifiesto),
                "autopopup" => "true"
            );
            $this->datos['parametros']= $parametros;
            $this->datos['vista'] = "transporte/manifiestos/ver";
            $this->datos['datos'] = $this->manifiestos_model->obtener_por_id($id_manifiesto);
            $this->load->view('main/principal',$this->datos);
            }
     }

     public function eliminar($id){
        $this->servicios_model->eliminar($id);
        redirect('transporte/servicios');
    }
  
}