<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guias extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('login_model');
        }        
    }
    public function index()
    {
        $this->datos['vista'] = "transporte/guias/guias_lista";
        $this->load->view('transporte/guias/guias_lista',$this->datos);
    }
}