<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class manifiestos_entrega_guias extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/manifiestos_model');
            $this->load->model('transporte/pilotos_model');
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
        $this->datos['vista'] = "transporte/manifiestos_entrega_guias/manifiestos_entrega_guias";
        $this->datos['guias_lista'] = $this->manifiestos_model->obtener_todos_entrega_guias($id_piloto);
        $this->load->view('transporte/manifiestos_entrega_guias/manifiestos_entrega_guias',$this->datos);
    }

      public function entregar_guia(){
        if($this->input->post()){
            $id_guia = $this->input->post('id_guia');
            $observacion = $this->input->post('observacion');
            $this->manifiestos_model->entregar_guia($id_guia,$observacion);
            redirect('transporte/manifiestos_entrega_guias');
        }
            
     }

}