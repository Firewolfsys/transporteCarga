<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class manifiestos_traslado extends CI_Controller {
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
        $id_piloto = $this->input->post('id_piloto');
        $parametros = array(
            "id_piloto" => $id_piloto,
            "pilotos" => $this->pilotos_model->obtener_todos()
        );

        $this->datos['parametros']= $parametros;
        $this->datos['vista'] = "transporte/manifiestos_traslado/manifiestos_lista";
        $this->datos['datos'] = $this->manifiestos_model->obtener_todos_traslado($id_piloto);
        $this->load->view('transporte/manifiestos_traslado/manifiestos_lista',$this->datos);
    }

    public function ver($id,$autopupup=null,$resultado = ""){
        
        $claseresultado = "";
        if($resultado  == "error")
        {
            $resultado = "ERROR, Guia ya fue trasladada.!";
            $claseresultado = "danger";
        }
        if($resultado  == "error2")
        {
            $resultado = "ERROR, Guia no existe.!";
            $claseresultado = "danger";
        }
        if($resultado == "success")
        {
            $resultado = "GUIA trasladada con exito.";
            $claseresultado = "success";
        }
        
         $parametros = array(
            "pilotos" => $this->pilotos_model->obtener_todos(),
            "lugares" => $this->lugares_model->obtener_todos(),
            "guias_pendientes" => $this->manifiestos_model->obtener_guias_pendientes_traslado($id),
            "guias_trasladas" => $this->manifiestos_model->obtener_guias_trasladadas($id),
            "autopopup" => $autopupup,
            "claseresultado" => $claseresultado,
            "resultado" => $resultado
        );
        $this->datos['parametros']= $parametros;
        $this->datos['vista'] = "transporte/manifiestos_traslado/ver";
        $this->datos['datos'] = $this->manifiestos_model->obtener_por_id($id);
        $this->load->view('transporte/manifiestos_traslado/ver',$this->datos);
    }

   
    public function guardar_detalle($id_manifiesto){
        if($this->input->post()){
            $codigo_guia = $this->input->post('codigo_guia');
            $codigo_guia_se = preg_replace('/\s+/', '', $codigo_guia);
            $existe = $this->manifiestos_model->existe_guia($codigo_guia_se);
            if($existe!=null){
            $validacionguia = $this->manifiestos_model->validar_guia_pendiente_traslado($codigo_guia_se);
            $guia = $this->manifiestos_model->obtener_guia_codigo($codigo_guia_se);
            $varlidarguiaenmanifiesto = $this->manifiestos_model->guia_en_manifiesto($id_manifiesto, $guia->id_guia);
            if($validacionguia == null && $varlidarguiaenmanifiesto !=null)
            {
            $this->manifiestos_model->guardar_traslado($guia->id_guia,$id_manifiesto);
            redirect('transporte/manifiestos_traslado/ver/'.$id_manifiesto.'/true/success');
            }
            else
            {
            redirect('transporte/manifiestos_traslado/ver/'.$id_manifiesto.'/true/error');   
            }
            }else
            {
            redirect('transporte/manifiestos_traslado/ver/'.$id_manifiesto.'/true/error2'); 
            }
        }
     }

      public function trasladar($id_manifiesto, $id_guia){
            $guia = $id_guia;
            $this->manifiestos_model->guardar_traslado($guia,$id_manifiesto);
            redirect('transporte/manifiestos_traslado/ver/'.$id_manifiesto);
            
     }

      public function cancelartraslado($id_manifiesto, $id_guia){
            $this->manifiestos_model->cancelar_traslado($id_guia);
            redirect('transporte/manifiestos_traslado/ver/'.$id_manifiesto);
            
     }
}