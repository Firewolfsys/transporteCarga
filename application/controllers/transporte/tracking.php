<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {


    public function __construct() {
        parent::__construct();
            $this->load->model('tracking_model');  
    }
    public function index()
    {
        $this->load->view('main/header');
        $this->load->view('tracking/principal');
        $this->load->view('main/footer');
    }
    public function ver_tracking($guia)
    {
        $this->load->view('main/header');
        $this->datos['tracking_lista'] = $this->tracking_model->obtener_tracking($guia);
        $this->datos['ultimo_tracking'] = $this->tracking_model->obtener_ultimo_tracking($guia);
        $this->datos['guia'] = $guia;
        $this->load->view('tracking/principal_filtrado',$this->datos);
        $this->load->view('main/footer');
    }
}
