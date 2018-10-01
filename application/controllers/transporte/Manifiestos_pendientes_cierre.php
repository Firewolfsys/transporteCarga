<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class manifiestos_pendientes_cierre extends CI_Controller {
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
        $this->datos['vista'] = "transporte/manifiestos_pendientes_cierre/manifiestos_pendientes_cierre";
        $this->datos['datos'] = $this->manifiestos_model->obtener_pendientes_cierre($id_piloto);
        $this->load->view('transporte/manifiestos_pendientes_cierre/manifiestos_pendientes_cierre',$this->datos);
    }


      public function finalizar($id_manifiesto){
            $this->manifiestos_model->finalizar_manifiesto($id_manifiesto);
            redirect('transporte/manifiestos_pendientes_cierre');
            
     }
}