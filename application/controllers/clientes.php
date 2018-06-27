<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientes extends CI_Controller {
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
        $this->datos['vista'] = "clientes/clientes_lista";
        $this->load->view('main/principal',$this->datos);
    }
}