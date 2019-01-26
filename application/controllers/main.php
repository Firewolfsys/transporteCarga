<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('main_model');
            $this->load->model('transporte/guias_model');
            $this->load->model('facturacion/facturacion_model');
        }               
    }
    public function index()
    {

        $this->datos['datos'] = $this->main_model->obtener_guias();
        $this->datos['manifiestos'] = $this->main_model->obtener_manifiestos();
        $this->datos['vista'] = "main/tablero";
        $this->load->view('main/tablero',$this->datos);
    }

    public function getEstaditicas()
    {
        echo $this->guias_model->getEstadisticaGuias();
    }

    public function getEstaditicasFacturas()
    {
        echo $this->facturacion_model->getEstadisticaFacturas();
    }


}

