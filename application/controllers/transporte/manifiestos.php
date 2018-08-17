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
        $this->load->view('transporte/manifiestos/manifiestos_lista',$this->datos);
    }

    public function ver($id,$autopupup=null,$resultado = ""){
        
        $claseresultado = "";
        if($resultado  == "error")
        {
            $resultado = "ERROR, Guia cargada ya en un Manifiesto.!";
            $claseresultado = "danger";
        }
        if($resultado == "success")
        {
            $resultado = "GUIA, Agregada a Manifiesto.";
            $claseresultado = "success";
        }
        
         $parametros = array(
            "pilotos" => $this->pilotos_model->obtener_todos(),
            "lugares" => $this->lugares_model->obtener_todos(),
            "detalle_lista" => $this->manifiestos_model->obtener_detalle($id),
            "autopopup" => $autopupup,
            "claseresultado" => $claseresultado,
            "resultado" => $resultado
        );
        $this->datos['parametros']= $parametros;
        $this->datos['vista'] = "transporte/manifiestos/ver";
        $this->datos['datos'] = $this->manifiestos_model->obtener_por_id($id);
        $this->load->view('transporte/manifiestos/ver',$this->datos);
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
        $this->load->view('transporte/manifiestos/nuevo', $this->datos);

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
            $codigo_guia_se = preg_replace('/\s+/', '', $codigo_guia);
            $validacionguia = $this->manifiestos_model->validar_guia_en_manifiesto($codigo_guia_se);
            if($validacionguia == null )
            {
            $guia = $this->manifiestos_model->obtener_guia_codigo($codigo_guia_se);
            $this->manifiestos_model->guardar_detalle($guia->id_guia,$id_manifiesto);
            redirect('transporte/manifiestos/ver/'.$id_manifiesto.'/true/success');
            }
            else
            {
            redirect('transporte/manifiestos/ver/'.$id_manifiesto.'/true/error');   
            }
            }
     }

     public function eliminar($id){
        $this->servicios_model->eliminar($id);
        redirect('transporte/servicios');
    }
  
}